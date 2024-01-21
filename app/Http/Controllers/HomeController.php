<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Grievance;
use App\Models\Report;
use App\Models\Page;
use App\Models\CrawledAnnounce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class HomeController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */
    public function testing_pdf()
    {




     return View::make('testing_pdf');

    }
    public function delete_multiple()
    {
    $id=$_GET['id'];
     $del=Grievance::where(['id'=>$id])->delete();

    }
    public function del($id)
    {
        $del=Grievance::where(['id'=>$id])->delete();
        if($del)
        {
           return redirect()->to('admin/grienvance_procedure')->with('delete_messae','SuccessFully  Deleted!');
        }
    }

    public function destory_session()
    {
       Session::flush('success_message');
    }

    public function grienvance_procedure()
    {
        $report=Grievance::get();
        $report2=Grievance::orderBy('id', 'desc')->take(1)->get();
        $links = DB::connection("cms")->table("links")->get();
       return View::make('admin.grivenvace_procendure',compact('report','report2','links'));
    }

public function grivance()
{
$id=100;
$report=Grievance::get();
	$banners=DB::connection('cms')->select('SELECT *,b.banner from page_banner as a left join banners as b on a.banner_id=b.id where a.page_id='.$id.' and status=1 order by a.id desc');

		//$banners=DB::select(DB::raw($raw));

		//dd($banners);
	if($banners)
	{
		$banner=$banners[0]->banner;
	}else{
		$banner='banner5.jpg';

	}
	$links = DB::connection("cms")->table("links")->get();

return View::make('grievancereportslisting',compact('report','banner','links'));
}
public function save_gravience(Request $req)
{
// images
$data = $req->all();

 $image=$data['Submit'];
// if($image)
// {

//          try {
//            $file = $image;
//             $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
//              $image->move("images", $name);
//          } catch (Illuminate\Filesystem\FileNotFoundException $e) {

//          }
//          $image_name=$name;
//       }
//       else{
//         $image_name='';
//       }


  $file = $req->file('Submit');
  if($file)
  {
    $destinationPath = 'photos';
    $extension = $file->getClientOriginalExtension();
    $filename = Str::random(12).".{$extension}";
    $upload_success = $req->file('Submit')->move($destinationPath, $filename);
}
else{
$filename='';
}
$image_name='';
$save=Grievance::insertGetId(array(
       'name'      => $data['Name'],
       'address'      => $data['Address'],

       'city'      => $data['City'],


       'job_title'      => $data['JobTitle'],
       'state'      => $data['State'],

       'email'      => $data['Email'],

       'postal_code'      => $data['PostalCode'],
       'telephone'      => $data['Phone'],

       'country'      => $data['DDLCountry'],



       'description'      => $data['message1'],
       'telephone'      => $data['Phone'],

       'updates_at'      => date('Y-m-d'),
       'image' =>$filename,
       'company_name'=>$data['CompanyName']

));
if($save){

Session::put('success_message', 'The information has been saved/updated successfully.');
return redirect()->to('grievanceform');
}
else{
Session::put('error_message', 'The information has not been saved/updated. Please correct the errors.');
return redirect()->to('grievanceform');
}
}
public function grivanceForm()
{
$id=101;
	$banners=DB::connection('cms')->select('SELECT *,b.banner from page_banner as a left join banners as b on a.banner_id=b.id where a.page_id='.$id.' and status=1 order by a.id desc');

		//$banners=DB::select(DB::raw($raw));

		//dd($banners);
	if($banners)
	{
		$banner=$banners[0]->banner;
	}else{
		$banner='banner5.jpg';

	}
	$links = DB::connection("cms")->table("links")->get();

return View::make('grievanceForm',compact('banner','links'));
}
    public function showWelcome()
    {
        return View::make('hello');
    }

        public function showIndex()
        {

        $page = Page::where('type','=','irhome')->where('published','=',1)->get();

        $reports = Report::where('type','=','annualreports')->where('active','=',1)->orderBy('updated_at','DESC')->paginate(3);
        // Following for latest news
        $latestNews = DB::connection('medianews')->select('SELECT * FROM media_news WHERE `status` = 1 ORDER BY `date` DESC LIMIT 0,3');

        // Following for stock price
        $stockdata = DB::connection('charts')->select('SELECT * FROM ohlc ORDER BY `id` DESC LIMIT 0,1');

        // Last Stock Data
        $laststockdata = DB::connection('charts')->select('SELECT * FROM ohlcvs ORDER BY `id` DESC LIMIT 0,1');


      //  $latestAnnouncements = DB::connection('mysql')->select("SELECT * FROM announcements WHERE ORDER BY STR_TO_DATE( date_of_publishing,  '%d %M %Y' )  DESC LIMIT 0,3");
      //$latestAnnouncements = DB::table('announcements')->orderBy(DB::Raw("STR_TO_DATE( date_of_publishing,  '%d %M %Y' )"), 'DESC')->take(3)->get();
        $latestAnnouncements =  CrawledAnnounce::where('status','=',1)->orderBy('date_of_publishing', 'DESC')->take(3)->get();;

        $details_annc = array();
         //$details_annc['Entitlements (Notice of Book Closure)'] = 'investorrelations/frontentitlementdetail'; backup comment
        $details_annc['Entitlement(Notice of Book Closure)'] = 'investorrelations/frontentitlementdetail';
        //$details_annc['Investor Alert Announcement'] = 'investorrelations/frontinvestoralertdetail';
        $details_annc['Investor Alert'] = 'investorrelations/frontinvestoralertdetail';
        $details_annc['Additional Listing Announcement (ALA)'] = 'investorrelations/frontadditionallistingdetail';
        $details_annc['Listing Circular'] = 'investorrelations/frontlistingcirculardetail';
        $details_annc['Trading of rights announcement'] = 'investorrelations/fronttradingrightdetail';
        $details_annc['Financial Results'] = 'investorrelations/frontfinanciallistingdetail';
        $details_annc['General Announcement'] = 'investorrelations/frontgeneralannouncementdetail';
        $details_annc['General Meeting'] = 'investorrelations/frontgeneralmeetingdetail';
        $details_annc['General Meetings'] = 'investorrelations/frontgeneralmeetingdetail';
        $details_annc['Special Announcements'] = 'investorrelations/frontspecialannouncementdetail';
        $details_annc["Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965"] = 'investorrelations/directorinterestdetail';
        $details_annc["Change in Substantial Shareholders Interest Pursuant to Form 29B"] = 'investorrelations/shareholderdetail';
        $details_annc["Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016"] = 'investorrelations/interestshareholdersection138detail';
        $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016"] = 'investorrelations/interestshareholdersection137detail';
        $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965"] = 'investorrelations/interestshareholderdetail';
        $details_annc["Notice of Person Ceasing (29C)"] = 'investorrelations/personceasingdetail';
        $details_annc['Change in Audit Committee'] = 'investorrelations/auditcommitteedetail';
        $details_annc['Change in Risk Committee'] = 'investorrelations/riskcommitteedetail';
        $details_annc['Change in Boardroom'] = 'investorrelations/boardroomdetail';
        $details_annc['Change in Chief Executive Officer'] = 'investorrelations/chiefexecutiveofficerdetail';
        $details_annc['Change in Principal Officer'] = 'investorrelations/principalofficerdetail';
        $details_annc['Change of Address'] = 'investorrelations/addressdetail';
        $details_annc['Change of Company Secretary'] = 'investorrelations/compsectretarydetail';
        $details_annc['Change of Registrar'] = 'investorrelations/registrardetail';
        $details_annc['Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement'] = 'investorrelations/resaledetail';
        $details_annc["Notice of Shares Buy Back by a Company pursuant to Form 28A"] = 'investorrelations/companypursuantdetail';
        $details_annc['Notice of Shares Buy Back by a Company pursuant to Form 28B'] = 'investorrelations/sharecompanypursuantdetail';
        $details_annc['Notice of Shares Buy Back - Immediate Announcement'] = 'investorrelations/immediateannouncementdetail';
        $details_annc['Change in Nomination Committee'] = 'investorrelations/nominationcommitteedetail';
        $details_annc['General Announcement for PLC'] = 'investorrelations/frontgeneralannouncementdetail';
        $details_annc['Additional Listing Announcement'] = 'investorrelations/frontadditionallistingdetail';
        $details_annc['Additional Listing Announcement /Subdivision of Shares'] = 'investorrelations/frontadditionallistingdetail';
        $details_annc['Change in Remuneration Committee'] = 'investorrelations/remunerationcommitteedetail';
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;
            $breadcrumbs = array(
                                          0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Investor Relations",
                                                   "url" => ""
                                                )

                                    );
            $mainMenuTitle = $page[0]->page_title;
            $pageTitle = $page[0]->page_title;

            return View::make('frontindex', array(    'page' => $page,
                                                      'Reports' => $reports,
                                                      'mainMenuTitle' => $mainMenuTitle,
                                                      'pageTitle' => $pageTitle ,
                                                      'breadcrumbs' => $breadcrumbs,
                                                      'tagLine' => $tagLine,
                                                      'latestnews' => $latestNews,
                                                      'latestannouncements' => $latestAnnouncements,
                                                      'stockdata' => $stockdata[0],
                                                      'laststockdata' => $laststockdata[0],
                                                    'details_annc' => $details_annc,'metaTitle' => $metaTitle

            ));
        }

}
