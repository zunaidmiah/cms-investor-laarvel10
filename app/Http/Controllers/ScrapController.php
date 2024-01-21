<?php
namespace App\Http\Controllers;
/**
 * Short description for file.
 *
 * This file contains Web URL Scrapping functionality.
 *
 */

Class ScrapController extends BaseController{

    public function __construct(){

        //contruct ccde Here. Eg; Checking the admin login

    }


    function check_url_exist($feedurl = null) {

        $feedurl = rtrim($feedurl, "/");

        if ($this->isValidURL($feedurl)) {

            //$rssdata = $this->requestAction(array('controller' => 'rssegtcrons', 'action' => 'get_rss_data_feed'), array('pass' => array($feedurl)));
            $rssdata = $this->get_rss_data_feed($feedurl);

            if (!empty($rssdata)) {     //User entered Feed URL diretly. So setup it without thinking much :)

                // return Feed Url from the website
                return $feedurl;

            } else {                    //User has entered Website URL(not feed URL). So search for feed

                //Return Feed Url
                $urlsarray = $this->checkRssFeedUrl($feedurl);

                if (!empty($urlsarray)) {

                    if(is_array($urlsarray))
                        $rssdata = $this->get_rss_data_feed($urlsarray[0]);//Feed data
                    else
                        $rssdata = $this->get_rss_data_feed($urlsarray);//Feed data

                    if (!empty($rssdata)) {
                        return $feedurl;// return Feed Url
                    } else {
                        return "invalidRssFound";
                    }

                } else {                //Feed URL not found for this website URL
                    return 'feedNotFound';
                }
            }

        }else{                          // Invalid Website URL
            return 'invalidWesiteUrl';
        }
    }

    function analyzeFlexibleUrl($feed_page_url = null){

        if($feed_page_url != null){
            //Anayzing Blog URL
            $data['redirect'] = $feed_page_url;
            echo 'redirect';
        }

    }

    function isValidURL($url) {
        return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
    }

    function checkRssFeedUrl($url = null) {

        //$url = "http://bemycareercoach.com";
        $url = trim($url);

        if (substr($url, -1) !== '/' && strpos($url, "?") === false) {
            //$url=$url."/";
        }

        App::import('Vendor', 'adword', array('file' => 'SiteContentChecker.php'));

        //$content = file_get_contents($url);
        $content = $this->get_curl_data($url);
        $page = new DOMDocument();
        @$page->loadHTML($content);

        $rssurls = array();
        $wordpress = 0;
        foreach ($page->getElementsByTagname('link') as $link) {
            if (strpos($link->getAttribute('href'), 'wp-')) {
                $wordpress++;
            } else if (strpos($link->getAttribute('type'), "rss+xml") !== false or strpos($link->getAttribute('type'), "atom+xml") !== false) {
                if (substr($link->getAttribute('href'), 0, 1) == "/") {
                    $domain = $this->unparse_url($url);
                    $rssurls[] = $domain . $link->getAttribute('href');
                } else {
                    $fineme = 'http://';
                    $mystring = $link->getAttribute('href');
                    $pos = explode('http://', $mystring);
                    $pos2 = explode('https://', $mystring);
                    if (!empty($pos)) {
                        if ($pos[0] == '' or $pos2[0] == '') {
                            $rssurls[] = $link->getAttribute('href');
                        } else {
                            $rssurls[] = $url . '/' . $link->getAttribute('href');
                        }
                    }
                }
            }
        }
        $prse_array = $this->parse_urls($url);

        $wp1 = $prse_array['scheme'] . "://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . "/") . "feed/";
        $wp2 = $prse_array['scheme'] . "://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . "/") . "feed";

        $wp3 = $prse_array['scheme'] . "://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . $prse_array['path'] . "/") . "feed";
        $wp4 = $prse_array['scheme'] . "://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . $prse_array['path'] . "/") . "feed/";


        $wp11 = $prse_array['scheme'] . "s://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . "/") . "feed/";
        $wp22 = $prse_array['scheme'] . "s://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . "/") . "feed";

        $wp33 = $prse_array['scheme'] . "s://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . $prse_array['path'] . "/") . "feed";
        $wp44 = $prse_array['scheme'] . "s://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . $prse_array['path'] . "/") . "feed/";



        if (!empty($rssurls)) {
            foreach ($rssurls as $kk => $wpurl) {

                $wpurl = str_replace("www.", "", $wpurl);
                $wpurl = rtrim($wpurl, "/");
                $hostarr = $this->parse_urls($wpurl);
                if ($wp1 == $wpurl || $wp11 == $wpurl) {
                    return $rssurls = array($wpurl);
                } else if ($wp2 == $wpurl || $wp22 == $wpurl) {
                    return $rssurls = array($wpurl);
                } else if ($wp3 == $wpurl || $wp33 == $wpurl) {
                    return $rssurls = array($wpurl);
                } else if ($wp4 == $wpurl || $wp44 == $wpurl) {
                    return $rssurls = array($wpurl);
                } else if ($hostarr['host'] == "feeds.feedburner.com") {
                    return $rssurls = array($wpurl);
                }
            }
        } else if ($wordpress > 0) {
            return $rssurls = array($url . '/feed');
        }

        return $rssurls;
    }



    function parse_urls($url) {

        return (parse_url($url));
    }

    function get_blog_name($url) {
        $prse_array = $this->parse_urls($url);
        $strarray = array(
            '.com' => ''
            , '.net' => ''
            , '.gov' => ''
            , '.edu' => ''
            , '.org' => ''
            , '.co' => ''
            , '.uk' => ''
            , '.in' => ''
            , '.au' => ''
            , '.nl' => ''
            , '.nz' => ''
            , 'wordpress' => ''
            , 'blogspot' => ''
            , 'typepad' => ''
            , 'www.' => ''
        );

        $dn = str_replace(array_keys($strarray), array_values($strarray), $prse_array['host']);

        $domain = array_values(array_filter(explode('.', $dn)));
        //$domain = array_values(array_reverse($domain));
        $title = $domain[0];

        return ($title);
    }

    function get_base_domain($url = null) {
        $prse_array = $this->parse_urls($url);
        $wp1 = $prse_array['scheme'] . "://" . str_replace("//", "/", str_replace("www.", "", $prse_array['host']) . "/");
        //$wp1 = $prse_array['scheme'] . "://" . str_replace("//", "/", $prse_array['host'] . "/");
        return $wp1;
    }

    function check_seourl_avail($seourl) {
        $condition = array();


        //$condition['Feed.feed_type'] = "8";
        $condition['Feed.seourl'] = $seourl;
        //$condition['Feed.status'] = "1";
        $feeddata = $this->Feed->find('first', array(
            'conditions' => $condition,
            'fields' => array('Feed.id')
        ));

        if (empty($feeddata)) {
            return true;
        } else {
            return false;
        }
    }

    function get_tags($url = null) {
        Configure::write('debug', 0);
        $tagsarr = get_meta_tags($url);
        return ($tagsarr['keywords']);
    }

    function getToken($length) {
        $token = "";
        $codeAlphabet = "ABCDEFGHJKLMNPQRSTUVWXYZ";
        $codeAlphabet .= strtolower("ABCDEFGHJKLMNPQRSTUVWXYZ");
        $codeAlphabet.= "0123456789";
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, strlen($codeAlphabet))];
        }
        return $token;
    }

    function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0)
            return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }


    function getAllFeedUrls($url = null) {
        // $url = "http://www.specificfeeds.com/blog";
        //$url = "http://bemycareercoach.com";
        $url = trim($url);
        Configure::write('debug', 0);

        if (substr($url, -1) !== '/' && strpos($url, "?") === false) {
            //$url=$url."/";
        }

        App::import('Vendor', 'adword', array('file' => 'SiteContentChecker.php'));

        $content = file_get_contents($url);
        $page = new DOMDocument();
        @$page->loadHTML($content);

        $rssurls = array();

        foreach ($page->getElementsByTagname('link') as $link) {
            if (strpos($link->getAttribute('type'), "rss+xml") !== false or strpos($link->getAttribute('type'), "atom+xml") !== false) {

                if (substr($link->getAttribute('href'), 0, 1) == "/") {

                    $rssurls[] = $url . $link->getAttribute('href');

                } else {

                    $fineme = 'http://';
                    $mystring = $link->getAttribute('href');
                    $pos = explode('http://', $mystring);
                    $pos2 = explode('https://', $mystring);
                    if (!empty($pos)) {
                        if ($pos[0] == '' or $pos2[0] == '') {
                            $rssurls[] = $link->getAttribute('href');
                        } else {
                            $rssurls[] = $url . '/' . $link->getAttribute('href');
                        }
                    }

                }

            }
        }

        return $rssurls;
    }


    function unparse_url($url=null) {
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
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // The maximum number of seconds to allow cURL functions to execute.
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1); // The maximum number of redirects

        $result = trim(curl_exec($ch));

        curl_close($ch);

        if (empty($result)) {
            $url = str_replace(' ', '%20', $url);
            $result = trim(file_get_contents($url));
        }

        return $result;
    }

    function xml_to_array($curldata, $maxlimit = false) {

        $array = array('title', 'link', 'guid', 'comments', 'description', 'pubDate', 'category', 'author', 'dc:creator', 'creator', 'content:encoded', 'summary');
        $data = $this->parseRSS($curldata);
        $feed_data_array = array();

        $notitle = 'no title';
        if (!isset($data['rss']['channel']['item'][0]) and isset($data['rss']['channel']['item'])) {
            $feed_data_array[0] = $data['rss']['channel']['item'];
        } elseif (!empty($data['rss']['channel']['item'])) {
            $feed_data_array = $data['rss']['channel']['item'];
        } elseif (!empty($data['rdf:RDF']['channel']['item'])) {
            $feed_data_array = $data['rdf:RDF']['channel']['item'];
        } else if (!empty($data['feed']['entry']) and isset($data['feed']['entry'][0])) {
            $feed_data_array = $data['feed']['entry'];
            $notitle = isset($data['feed']['title']['value']) ? $data['feed']['title']['value'] : 'no title';
        } else if (!empty($data['feed']['entry'])) {
            $feed_data_array = array($data['feed']['entry']);
            $notitle = $data['feed']['title']['value'];
        } else if (!empty($data['RDF']['item'])) {
            $feed_data_array = $data['RDF']['item'];
        }

        $rss_items_array = array();
        $item_number = 1;
        foreach ($feed_data_array as $rssdata) {

            if ($maxlimit == true) {
                if ($item_number > 10)
                    continue;
            }

            $item_number++;


            if (isset($rssdata["title"]['value']) and is_array($rssdata["title"])) {
                $rssdata["title"] = $rssdata["title"]['value'];
            }

            if (isset($rssdata["title"]['0']) and is_array($rssdata["title"])) {
                $rssdata["title"] = $rssdata["title"]['0'];
            }

            if (isset($rssdata["title"]['type']) and is_array($rssdata["title"])) {

                if (isset($rssdata["title"]['value']) and $rssdata["title"]['value'] != "") {
                    $rssdata["title"] = $rssdata["title"]['value'];
                } else {
                    $rssdata["title"] = $notitle;
                }
            }

            if (isset($rssdata["title"]) && empty($rssdata["title"])) {
                $rssdata["title"] = $notitle;
            }

            if (isset($rssdata["link_attr"]['href'])) {
                $rssdata["link"] = $rssdata["link_attr"]['href'];
            } else if (isset($rssdata["link"]['href']) and is_array($rssdata["link"])) {
                $rssdata["link"] = $rssdata["link"]['href'];
            }

            if (isset($rssdata["summary"])) {
                $rssdata["description"] = $rssdata["summary"];
            }
            /** For Link * */
            if (isset($rssdata["feedburner:origLink"]) and ! isset($rssdata["link"])) {
                $rssdata["link"] = $rssdata["feedburner:origLink"];
            }

            if (isset($rssdata["origLink"])) {
                $rssdata["link"] = $rssdata["origLink"];
            } else if (isset($rssdata["guid"]) and is_array($rssdata["guid"]) and ! isset($rssdata["link"]) and $rssdata["guid"]['isPermaLink'] == true) {
                $rssdata["link"] = $rssdata["guid"]['value'];
            } elseif (isset($rssdata["guid"]) and ! isset($rssdata["link"])) {
                $rssdata["link"] = $rssdata["guid"];
            } else if (is_array($rssdata["link"]) and isset($rssdata["link"][0]['href'])) {
                //$rssdata["link"]  = $rssdata["link"][0]['href'];
                foreach ($rssdata["link"] as $linkarr) {
                    if (isset($linkarr['rel']) && $linkarr['rel'] == "alternate") {
                        $rssdata["link"] = $linkarr['href'];
                    }
                }
            }

            if (is_array($rssdata["link"]) and isset($rssdata["link"][0])) {
                $rssdata["link"] = $rssdata['link'][0];
            }

            //** end link

            if (isset($rssdata["content:encoded"])) {
                $rssdata["description"] = (string) $rssdata["content:encoded"];
            }

            if (isset($rssdata["encoded"])) {
                $rssdata["description"] = (string) $rssdata["encoded"];
            }

            if (isset($rssdata["description"]) and is_array($rssdata["description"]) and empty($rssdata["description"])) {
                $rssdata["description"] = '';
            }

            if (isset($rssdata["description"]) and is_array($rssdata["description"])) {
                $descrp = '';
                $description = $rssdata["description"];

                foreach ($description as $dk => $descr) {
                    $descrp .=$descr;
                }

                $rssdata["description"] = $descrp;
            }

            if (isset($rssdata["content"]['value']) and ! isset($rssdata["description"])) {
                $rssdata["description"] = strip_tags($rssdata["content"]['value']);
            }


            if (!isset($rssdata["description"])) {
                $rssdata["description"] = $rssdata["title"];
            }




            if (!isset($rssdata["pubDate"]) and isset($rssdata["updated"])) {
                $rssdata["pubDate"] = $rssdata["updated"];
            }

            /* if(isset($rssdata["dc:creator"])){
              if(is_array($rssdata["dc:creator"]))
              $dc_author=implode(",",$dc_author);

              $rssdata["author"]=$rssdata["dc:creator"];
              } */

            if (isset($rssdata["creator"])) {
                $rssdata["author"] = $rssdata["creator"];
            }

            if (isset($rssdata["author"]) and is_array($rssdata["author"]) and isset($rssdata["author"]['name'])) {
                $rssdata["author"] = $rssdata["author"]['name'];
            }if (isset($rssdata["author"]) and is_array($rssdata["author"])) {
                $rssdata["author"] = implode(",", $rssdata["author"]);
            }

            if (isset($rssdata["category"])) {

                if (is_array($rssdata["category"])) {
                    $cat_array = array();
                    foreach ($rssdata["category"] as $kc => $category) {

                        if (is_array($category)) {
                            if (isset($category['value']))
                                $cat_array[] = $category['value'];
                            else if (isset($category['term']))
                                $cat_array[] = $category['term'];
                        }else {
                            $cat_array[] = $category;
                        }
                    }
                    $rssdata["category"] = implode(",", $cat_array);
                }


                $rssdata["category"] = $rssdata["category"];
            }


            $items = array();
            foreach ($array AS $key => $value) {

                if (isset($rssdata[$value]))
                    $items[$value] = $rssdata[$value];
            }



            if (!empty($items))
                $rss_items_array[] = $items;
        }



        return $rss_items_array;
    }


    function get_rss_data_feed($url) {
        $curldata = $this->get_curl_data($url);
        return $this->xml_to_array($curldata);
    }


}
