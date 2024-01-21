<?php
namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\Cronstatus;
use App\Models\Webscrappingurl;
use App\Models\Medianews;

/*
 * Tutorial : http://iapdesign.com/webdev/laravel-4-webdev/superb-web-scraping-tutorials-using-laravel-4/
 * Goutte Documentation/Help: https://github.com/FriendsOfPHP/Goutte
 */

class webscraperController extends BaseController {

    private $client;
    public  $url;
    public  $crawler;
    public  $filters;
    public  $filterParent;
    public  $content = array();

    /*
     * To get the last Executed Query
    $queries = DB::getQueryLog();
    $last_query = end($queries);
    */

    /**
     * Defining our Dependency Injection Here.
     * or Instantiate new Classes here.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client    = $client;
    }

    /**
     * This will be used for Outputing our Data
     * and Rendering to browser.
     *
     * @return void
     */
    public function getIndex()
    {
        $this->url = 'http://code.tutsplus.com';
        $this->setScrapeUrl( $this->url );

        $this->filters = [
            'title'             => '.posts__post-title',
            'short_description' => '.posts__post-summary',
            'image_preview'     => '.posts__post-preview img',
            'author'            => '.posts__post-author-link'
        ];

        return View::make('scraper')->with('contents', $this->getContents());
    }

    /**
     * Setup our scraper data. Which includes the url that
     * we want to scrape
     *
     * @param (String) $url = default is NULL
     *        (String) $method = Method Types its either POST || GET
     * @return void
     */
    public function setScrapeUrl($url = NULL, $method = 'GET')
    {
        $this->crawler = $this->client->request($method, $url);
        return $this->crawler;
    }

    /**
     * This will get all the return Result from our Web Scraper
     *
     * @return array
     */
    public function getContents()
    {
        return $this->content = $this->startScraper();
    }

    /**
     * It will handle all the scraping logic, filtering
     * and getting the data from the defined url in our method setScrapeUrl()
     *
     * @return array
     */
    private function startScraper()
    {
        // lets check if our filter has result.
        // im using CssSelector Dom Components like jquery for selecting data attributes.
        $countContent = $this->crawler->filter('.posts__post-title')->count();

        if ($countContent) {
            // loop through in each ".posts--list-large li" to get the data that we need.
            $this->content = $this->crawler->filter('.posts--list-large li')->each(function(Crawler $node, $i) {
                return [
                        'title'             => $node->filter($this->filters['title'])->text(),
                        'url'               => $this->url.$node->filter($this->filters['title'])->attr('href'),
                        'short_description' => $node->filter($this->filters['short_description'])->text(),
                        'image_preview'     => $node->filter($this->filters['image_preview'])->attr('src'),
                        'author'            => $node->filter($this->filters['author'])->text()
                ];
            });
        }
        return $this->content;
    }

    /*
     *
     * New Web Scrapping for FEHB
     */

    public function grabAllData($url = null, $params = null)
    {
        if($url != null){
            $this->url = $url;
        }

        $this->setScrapeUrl( $this->url );

        $fieldsToBeScrapped = array();

        if($params != null){

            if(isset($params['title']))
                $fieldsToBeScrapped['title'] = $params['title'];

            if(isset($params['short_description']))
                $fieldsToBeScrapped['short_description'] = $params['short_description'];

            if(isset($params['date']))
                $fieldsToBeScrapped['date'] = $params['date'];
        }

        if(isset($params['parent']))
            $this->filterParent = $params['parent'];
        else
            $this->filterParent = '';

        $this->filters = $fieldsToBeScrapped;

        return $this->getContentsCustom();

    }


    /*
     * Get requested Content from scrapped URL
     */
    public function getContentsCustom()
    {
        return $this->content = $this->startScraperCustom();
    }


    /*
     * Scraping content using the URL and [aramenters requested.
     */
    private function startScraperCustom()
    {
        // lets check if our filter has result.
        // im using CssSelector Dom Components like jquery for selecting data attributes.
        $countContent = $this->crawler->filter($this->filters['title'])->count();

        if ($countContent) {
            // loop through in each ".posts--list-large li" to get the data that we need.
            $this->content = $this->crawler->filter($this->filterParent)->each(function(Crawler $node, $i) {

                $return = array();

                foreach($this->filters as $key => $value){

                    $return[$key] = $node->filter($value)->text();

                    if($key == 'title'){
                        $return['link'] = $node->filter($value)->attr('href');
                    }
                }

                return $return;

            });
        }

        return $this->content;
    }


    public function grabAllDataInit($sendMail = null){

        $Webscrappingurl = new Webscrappingurl();

        //$allUrls = $Webscrappingurl->fetchAllUrls();
        $allUrls = $Webscrappingurl->fetchAllActiveUrls();

        if(!empty($allUrls)){

            header('Content-type: text/html; charset=UTF-8');

            $mediaNews = new Medianews();
            $insertData = array();
            $insertDataArray = array();

            foreach ($allUrls as $allUrl){

                $result = array();

                $params = array();
                $fullArticle = array();
                $resultGrab = array();
                $stopGrab = 0;

                if(preg_match("/thestar/", $allUrl->url, $match)){
                    $scrappingUrl = 'http://www.thestar.com.my/search/?q=fareast%20bhd&qsort=newest&qrec=100&qstockcode=';

                    $params['title'] = '.story-list h2 a';
                    $params['short_description'] = '.story-list p';
                    $params['date'] = '.story-list .date';
                    $params['parent'] = '.search-list .story-list';

                    $insertData['footer'] = 'The Star Online';

                }else if(preg_match("/nst\.com/", $allUrl->url, $match)){
                    $scrappingUrl = 'http://www.nst.com.my/search?s=fareast+bhd';

                    $params['title'] = '.field-content a';
                    $params['parent'] = '#content .view-search-articles .views-row';

                    $result = $this->grabAllData($scrappingUrl, $params);

                    if(!empty($result)){
                        foreach($result as $key => $val){
                            if(!$this->isValidURL($val['link'])){
                                $result[$key]['link'] = $this->unparse_url($this->url).$val['link'];
                            }
                            $fullArticle[] = $result[$key]['link'];
                        }

                        $paramsTemp['title'] = '.node-title a';
                        $paramsTemp['short_description'] = '.field-item';
                        $paramsTemp['date'] = '.node-published-date';
                        $paramsTemp['parent'] = '.node-article';

                    }

                    $insertData['footer'] = 'New Straits Times Online';

                }else if(preg_match("/theedgemarkets/", $allUrl->url, $match)){
                    $scrappingUrl = 'http://www.theedgemarkets.com/en/content/search-results?query=fareast%20bhd';
                    $originalScrappingUrl = 'http://lumina.knorex.com/ws/1.1/search/simple?repository=lumina&fields=label,comment,knxsys:isCreatedAt,knx:hasImages,tagima:stock_code&offset=0&limit=50&query=fareast%20bhd';

                    $pageContent = $this->get_curl_data($originalScrappingUrl);
                    $json_decoded_content = json_decode($pageContent, true);

                    foreach($json_decoded_content['results'] as $key => $value){

                        $contentFields['title'] = $value['fields']['rdfs:label'][0];
                        $dateChunks = explode('-', strstr($value['fields']['knxsys:isCreatedAt'][0], 'T', true));
                        $contentFields['date'] = mktime(0, 0, 0, $dateChunks[1], $dateChunks[2], $dateChunks[0]);
                        $contentFields['short_description'] = $value['fields']['rdfs:comment'][0];
                        $contentFields['link'] = $value['fields']['uri'][0];

                        $resultGrab[] = $contentFields;
                    }

                    $insertData['footer'] = 'The Edge Markets';
                    $stopGrab = 1;

                }else if(preg_match("/sinchew/", $allUrl->url, $match)){
                    $scrappingUrl = 'http://search.sinchew.com.my/search/google?cx=012605229465411000741%3Aq70ti1atknw&cof=FORID%3A11&sort=metatags-pubdate&query=fareast+bhd&op=&form_id=google_cse_searchbox_form';
                    $originalScrappingUrl = 'https://www.googleapis.com/customsearch/v1element?key=AIzaSyCVAXiUzRYsML1Pv6RwSG1gunmMikTzQqY&rsz=filtered_cse&num=20&hl=zh_TW&prettyPrint=false&source=gcsc&gss=.com&sig=23952f7483f1bca4119a89c020d13def&cx=012605229465411000741:q70ti1atknw&q=fareast%20bhd&sort=&googlehost=www.google.com&oq=ock%20bhd&gs_l=partner.12...0.0.2.4354.0.0.0.0.0.0.0.0..0.0.gsnos%2Cn%3D13...0.0..1ac..25.partner..0.0.0.&callback=google.search.Search.apiary4095&nocache=1417713214140';

                    $pageContent = $this->get_curl_data($originalScrappingUrl);
                    $pageContent = strstr($pageContent, '{');
                    $pageContent = trim($pageContent,');');

                    $json_decoded_content = json_decode($pageContent, true);

                    foreach($json_decoded_content['results'] as $key => $value){

                        $contentFields['title'] = $value['titleNoFormatting'];
                        if(isset($value['richSnippet']['metatags']['pubdate'])){
                            preg_match('/(\d{4})(\d{2})(\d{2})/', $value['richSnippet']['metatags']['pubdate'], $matches);

                            $year = $matches[1];
                            $month = $matches[2];
                            $date = $matches[3];

                            $contentFields['date'] = mktime(0, 0, 0, $month, $date, $year);
                        }else{
                            $contentFields['date'] = time();
                        }

                        if(strpos($value['contentNoFormatting'], 'Copyright') !== false){
                            $contentFields['short_description'] = strstr($value['contentNoFormatting'], 'Copyright', true);
                        }else{
                            $contentFields['short_description'] = $value['contentNoFormatting'];
                        }

                        $contentFields['link'] = $value['unescapedUrl'];

                        $resultGrab[] = $contentFields;
                    }

                    $insertData['footer'] = 'Sinchew';
                    $stopGrab = 1;

                }else{
                    $scrappingUrl = '';
                }

                if(!empty($scrappingUrl)){

                    //if($scrappingUrl != 'http://www.thestar.com.my/search/?q=fareast%20bhd&qsort=newest&qrec=100&qstockcode=') continue;
                    //if($scrappingUrl != 'http://www.nst.com.my/search?s=fareast+bhd') continue;
                    //if($scrappingUrl != 'http://www.theedgemarkets.com/en/content/search-results?query=fareast%20bhd') continue;
                    //if($scrappingUrl != 'http://search.sinchew.com.my/search/google?cx=012605229465411000741%3Aq70ti1atknw&cof=FORID%3A11&sort=metatags-pubdate&query=fareast+bhd&op=&form_id=google_cse_searchbox_form') continue;

                    if(!empty($fullArticle)){
                        //$result = $this->grabAllData($scrappingUrl, $params);
                        $result = array();
                        foreach($fullArticle as $key => $link){
                            $resultTemp = $this->grabAllData($link, $paramsTemp);

                            if($scrappingUrl == 'http://www.nst.com.my/search?s=fareast+bhd'){
                                $resultTemp[0]['date'] = trim(strstr($resultTemp[0]['date'], '@', true));
                            }
                            $result[] = $resultTemp[0];
                        }

                    }else if($stopGrab){
                        $result = $resultGrab;
                    }else{
                        $result = $this->grabAllData($scrappingUrl, $params);
                    }

                    //print_r($result);exit;
                    if(!empty($result)){

                        $insertDataArray = array();
                        $insertDataTitleArray = array();

                        foreach($result as $resultData){

                            if(isset($resultData['title'])){
                                $insertData['title'] = $resultData['title'];
                            }

                            if(isset($resultData['link'])){

                                if(!$this->isValidURL($resultData['link'])){
                                    $resultData['link'] = $this->unparse_url($this->url).$resultData['link'];
                                }

                                $insertData['link'] = $resultData['link'];
                            }

                            if(isset($resultData['short_description'])){
                                $insertData['content'] = $resultData['short_description'];
                            }

                            if(isset($resultData['date'])){
                                if($stopGrab){
                                    $insertData['date'] = $resultData['date'];
                                }else{
                                    $insertData['date'] = strtotime($resultData['date']);
                                }

                            }

                            $insertData['scraping_url_id'] = $allUrl->id;
                            $insertData['status'] = 0;

                            $conditions['title'] = $insertData['title'];
                            $existing_id = $mediaNews->getMediaNewsWithConditions($conditions);

                            if($existing_id){

                                $insertData['id'] = $existing_id;

                                //Update data to Database
                                $update = $mediaNews->updateSingleScraper($insertData);

                            }else{
                                //Insert data to Database
                                //$insert = $mediaNews->insertScraper($insertData);

                                $insertData['id'] = NULL;
                                $insertData['heading'] = '';
                                $insertData['news_image'] = '';
                                $insertData['created_at'] = date("Y-m-d H:i:s", time());
                                $insertData['updated_at'] = date("Y-m-d H:i:s", time());

                                $insertDataArray[] = $insertData;
                                $insertDataTitleArray[] = $insertData['title'];
                            }


                        }

                        if(!empty($insertDataArray)){
                            //Insert data to Database
                            $insert = $mediaNews->insertAllScraper($insertDataArray);

                            /*
                            $queries = DB::getQueryLog();
                            print_r($queries);
                            */
                            //print_r($insertDataArray);
                            if($insert){
                                //Send mail
                                //echo 'sendMail';
                                if($sendMail == true){
                                    $mailData = $mediaNews->getNewsFromTitles($insertDataTitleArray);
                                    $mailStatus = $this->sendMail($mailData, $type = 1);
                                    if($mailStatus){
                                        $mailStatusReturn = 1;
                                    }
                                }
                                //return array(1, $insertDataTitleArray);

                            }else{
                                //Send Email to admin that the Cron is not inserting the data
                                //echo 'Data not inserted';
                                //return array(0, 'Data not inserted');
                            }

                        }else{
                            //No Data to insert

                            //echo 'No New data to insert';
                            //return array(0, 'No New data to insert');
                        }

                    }
                }

            }//Foreach $allUrls

            if(isset($mailStatusReturn) && $mailStatusReturn == 1){
                return 1;//At least one email sent
            }else{
                return 2;//No email sent
            }

        }

        //echo '<pre>';
        //print_r($result);

    }


    public function unparse_url($url=null) {
        //$url = 'http://foobla.com/joomla/obrss';
        $parsed_url = parse_url($url);

        $scheme   = isset($parsed_url['scheme']) ? $parsed_url['scheme'] . '://' : '';
        $host     = isset($parsed_url['host']) ? $parsed_url['host'] : '';
        $port     = isset($parsed_url['port']) ? ':' . $parsed_url['port'] : '';
        $user     = isset($parsed_url['user']) ? $parsed_url['user'] : '';
        $pass     = isset($parsed_url['pass']) ? ':' . $parsed_url['pass']  : '';
        $pass     = ($user || $pass) ? "$pass@" : '';
        $path     = isset($parsed_url['path']) ? $parsed_url['path'] : '';
        $query    = isset($parsed_url['query']) ? '?' . $parsed_url['query'] : '';
        $fragment = isset($parsed_url['fragment']) ? '#' . $parsed_url['fragment'] : '';
        //return "$scheme$user$pass$host$port$path$query$fragment";
        return "$scheme$user$pass$host$port";
    }


    function get_curl_data($url) {

        $ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url); // The URL to fetch. This can also be set when initializing a session with curl_init().
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // The number of seconds to wait while trying to connect.
        curl_setopt($ch, CURLOPT_USERAGENT, $ua); // The contents of the "User-Agent: " header to be used in a HTTP request.
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE); // To fail silently if the HTTP code returned is greater than or equal to 400.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // To follow any "Location: " header that the server sends as part of the HTTP header.
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // To automatically set the Referer: field in requests where it follows a Location: redirect.
        curl_setopt($ch, CURLOPT_TIMEOUT, 30); // The maximum number of seconds to allow cURL functions to execute.
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1); // The maximum number of redirects
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // for https - To blindly accept any server certificate, without doing any verification as to which CA signed it, and whether or not that CA is trusted.

        $result = trim(curl_exec($ch));

        curl_close($ch);

        return $result;
    }


    public function isValidURL($url) {
        return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
    }


    public function grabAllDataAdmin() {
        $return = $this->grabAllDataInit();
        return redirect()->to('admin/media_news_list');
    }


    public function grabAllDataCron($param = null) {

        //Insert cron Start status in database
        $cronStatus = new Cronstatus();
        $params['type'] = 'news';
        $cronId = $cronStatus->insertCronRecord($params); //return Id

        $mediaNews = new Medianews();
        $return = $this->grabAllDataInit($sendMail = true);

        //if($return[0] == 1 && is_array($return[1])){
        if($return == 1){
            //$mailData = $mediaNews->getNewsFromTitles();
            //$this->sendMail($mailData);
            $mailSent = 1;
        }  else {
            $mailSent = 0;
        }

        //Update cron finish status in database
        $params['id'] = $cronId;
        $params['mail_sent'] = $mailSent;
        $cronStatus->updateCronRecord($params);

    }

    function getNewsFromTitles($params = null) {

        $mediaNews = new Medianews();

        if($params == null){
            $params = array(
                "OCK to build more telco towers",
                "2012 may see IPO backlog",
            );
        }

        $return = $mediaNews->getNewsFromTitles($params);
        /*
        $queries = DB::getQueryLog();
        $last_query = end($queries);
        print_r($queries);
        */
        //print_r($return);
        return $return;
    }

    public function sendMail($param = null, $type = '1') {

        /*
         * Get newly scraped news.
         * Send email if any news scrapped
         */

        /*
         * $type wil be used in future to use different layouts for email
         */

        if($type == '1'){

            $mediaIds = array();

            foreach($param as $value){
                $mediaIds[] = $value->id;
                $source = $value->footer;
            }
            $mediaIdsImploded = implode(',', $mediaIds);

            $paramsToPass['emailParams'] = $param;
            $paramsToPass['mediaIds'] = $mediaIdsImploded;
            $paramsToPass['maildate'] = date('d M, Y', time());
            $paramsToPass['source'] = $source;

            $subject = "Media News: $source (Pending for Approval)";

            Mail::send('emails.news', $paramsToPass, function($message) use ($subject){
                $message->from('admin@webqom.com', 'FEHB Media News');
                $message->to('hock@webqom.com', '');
                $message->cc('anand@webqom.com', '');
                $message->subject($subject);
            });

            if( count(Mail::failures()) > 0) {
                /*
                echo "There was one or more failures. They were: <br />";

                foreach (Mail::failures as $email_address) {
                    echo " - $email_address <br />";
                }*/
                return 0;
            } else {
                //echo "No errors, all sent successfully!";
                return 1;
            }

            //var_dump($mailStatus);
            //return $mailStatus;
        }

    }


    public function sendTestMail($param = null, $type = '1') {

        Mail::send('emails.testing', array('key'=>'value'), function($message){
            $message->from('admin@webqom.com', 'OCK Media News');
            $message->to('praggyagupta21@gmail.com', '');
            $message->cc('praggyagupta21@gmail.com', '');
            $message->subject('Test Subject');
        });

    }

    public function testData(){
        $scrappingUrl = 'http://www.nst.com.my/search?s=fareast+bhd';

        $this->url = $scrappingUrl;

        $params['title'] = '.field-content a';
        $params['parent'] = '#content .view-search-articles .views-row';

        $result = $this->grabAllData($scrappingUrl, $params);

        if(!empty($result)){
            foreach($result as $key => $val){
                if(!$this->isValidURL($val['link'])){
                    $result[$key]['link'] = $this->unparse_url($this->url).$val['link'];
                }

            }
        }
        print_r($result);exit;
    }

    public function getIndex2()
    {
        $this->url = 'http://www.nst.com.my/search?s=fareast+bhd';
        $this->setScrapeUrl2( $this->url );

        $this->filters = [
            'title'             => '.field-content a'
        ];

        //echo '<pre>';
        print_r($this->getContents2());exit;

        //return View::make('scraper')->with('contents', $this->getContents2());
    }

    /**
     * Setup our scraper data. Which includes the url that
     * we want to scrape
     *
     * @param (String) $url = default is NULL
     *        (String) $method = Method Types its either POST || GET
     * @return void
     */
    public function setScrapeUrl2($url = NULL, $method = 'GET')
    {
        $this->crawler = $this->client->request($method, $url);
        return $this->crawler;
    }

    /**
     * This will get all the return Result from our Web Scraper
     *
     * @return array
     */
    public function getContents2()
    {
        return $this->content = $this->startScraper2();
    }

    /**
     * It will handle all the scraping logic, filtering
     * and getting the data from the defined url in our method setScrapeUrl()
     *
     * @return array
     */
    private function startScraper2()
    {
        // lets check if our filter has result.
        // im using CssSelector Dom Components like jquery for selecting data attributes.
        $countContent = $this->crawler->filter('.field-content a')->count();

        if ($countContent) {
            // loop through in each ".posts--list-large li" to get the data that we need.
            $this->content = $this->crawler->filter('#content .view-search-articles div.views-row')->each(function(Crawler $node, $i) {
                return [
                        'title'             => $node->filter($this->filters['title'])->text(),
                        'url'               => $this->url.$node->filter($this->filters['title'])->attr('href')
                ];
            });
        }
        return $this->content;
    }


    function getDataContent() {

        header('Content-type: text/html; charset=UTF-8');

        $originalScrappingUrl = 'https://www.googleapis.com/customsearch/v1element?key=AIzaSyCVAXiUzRYsML1Pv6RwSG1gunmMikTzQqY&rsz=filtered_cse&num=10&hl=zh_TW&prettyPrint=false&source=gcsc&gss=.com&sig=23952f7483f1bca4119a89c020d13def&cx=012605229465411000741:q70ti1atknw&q=fareast%20bhd&sort=&googlehost=www.google.com&oq=fareast%20bhd&gs_l=partner.12...0.0.2.4354.0.0.0.0.0.0.0.0..0.0.gsnos%2Cn%3D13...0.0..1ac..25.partner..0.0.0.&callback=google.search.Search.apiary4095&nocache=1417713214140';
        $pageContent = $this->get_curl_data($originalScrappingUrl);
        print_r($pageContent);
    }

}
