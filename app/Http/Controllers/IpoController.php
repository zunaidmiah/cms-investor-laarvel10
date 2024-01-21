<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Page;
use App\Models\Announcement;
use App\Models\CrawledAnnounce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IpoController extends BaseController {
	public $breadcrumbs = [
		['title' => 'Home', 'url' => '/'],
		['title' => 'Investor Relations', 'url' => ''],
		['title' => 'News Center', 'url' => ''],
		['title' => 'Bursa Announcements', 'url' => '']
	];
	/*
	|--------------------------------------------------------------------------
	| Default CorporateController
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function IpoStatistics() {

		$page = Page::where('type','=','ipostatistics')->where('published','=',1)->get();
		return View::make('adminipostatistics',array(
				'page' => $page
			)
		);

	}

	public function IpoCompetitive() {

		$page = Page::where('type','=','ipocompetitive')->where('published','=',1)->get();
		return View::make('adminipocompetitive',array(
				'page' => $page
			)
		);

	}

	public function IpoRiskFactors() {

		$page = Page::where('type','=','iporiskfactors')->where('published','=',1)->get();
		return View::make('adminiporiskfactors',array(
				'page' => $page
			)
		);

	}

	public function IpoUtilisationProceeds() {

		$page = Page::where('type','=','ipoutilisationproceeds')->where('published','=',1)->get();
		return View::make('adminipoutilisationproceeds',array(
				'page' => $page
			)
		);

	}

	public function IpoIndustryOverview() {

		$page = Page::where('type','=','ipoindustryoverview')->where('published','=',1)->get();
		return View::make('adminipoindustryoverview',array(
				'page' => $page
			)
		);

	}

	public function Entitlements() {

		$page = Page::where('type','=','entitlements')->where('published','=',1)->get();
		return View::make('adminentitlements',array(
				'page' => $page
			)
		);

	}

//	public function Entitlement() {
//
//		$page = Page::where('type','=','entitlement')->where('published','=',1)->get();
//
//		return View::make('adminentitlement',array(
//				'page' => $page
//			)
//		);
//
//	}

	public function Entitlement(Request $req) {

		$page = Page::where('type','=','entitlement')->where('published','=',1)->get();

		$pgCount = Announcement::where('category','=','Entitlements')->count();
		for ($i = 1; $i <= $pgCount; $i++ )
		{
			if($i == 1)
			{
				$cntArr[10] = 10;
			}

			if($i == 11)
			{
				$cntArr[20] = 20;
			}

			if($i == 21)
			{
				$cntArr[30] = 30;
			}

			if($i == 31)
			{
				$cntArr[50] = 50;
			}

			if($i == 51)
			{
				$cntArr[100] = 100;
				break;
			}
		}
		if($req->input('noperpage1'))
		{
			$noperpage = $req->input('noperpage1');
		}else {

			$noperpage = 10;
		}
		$entitlement = Announcement::where('category','LIKE','%Entitlement%')->paginate($noperpage);
		if($pgCount > 0)
		{
			$cntarray1 = $cntArr;
		}
		else {
			$cntarray1 = 0;
		}

		$results = DB::select('select * from annc where category LIKE "%?%"', array('Entitlements'));
		return View::make('adminentitlement',array(
				'page' => $page,
				'entitlement'=>$entitlement,
				'cntarray1' => $cntarray1
			)
		);


		// return View::make('adminentitlement',array(
		//                                          'page' => $page
		//                                           )
		//                        );

	}

	/* Front Functions */

	public function frontIpoStatistics() {

		$page = Page::where('type','=','ipostatistics')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "Estate Information",
				"url" => ""
			),
			3 => array
			(
				"title" => "Estate Location",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontipostatistics',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	/**
	 * private function which handles data retrieval
	 * from the database by taking the category
	 * type as arguments. Further it also filters data
	 * as per the from and to date chosen.
	 */
	private function getData($category)
	{
		if((!empty($_REQUEST['dateFrom'])) && (!empty($_REQUEST['dateTo'])))
		{
			$announcements = Announcement::where('category', 'LIKE', "%" . $category . "%")
				->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['dateFrom'])))
				->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['dateTo'])))
				->where('status','=',1)
				->where('active','=',1)
				->get();
		}
		else if(!empty($_REQUEST['from_year']))
		{
			$announcements = Announcement::where('category', 'LIKE', "%" . $category . "%")
				->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['dateFrom'])))
				->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))
				->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))
				->where('status','=',1)
				->where('active','=',1)
				->get();
		}
		else
		{
			$announcements = Announcement::where('category', 'LIKE', "%" . $category . "%")
				->where('status','=',1)
				->where('active','=',1)
				->get();
		}

		return $announcements;
	}

	/* public function frontEntitlement()
	{
		$page = Page::where('type','=','entitlement')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$announcements = $this->getData('Entitlement');

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Entitlementments Summary', 'url' => '/investorrelations/frontentitlement']
		];
		return View::make('frontentitlement', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontEntitlementDetail($id)
	{
		$announcement = Announcement::find($id);

		$page = Page::where('type','=','entitlement')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Entitlementments Summary', 'url' => '/investorrelations/frontentitlement'],
			['title' => $announcement->title, 'url' => '/investorrelations/frontentitlementdetail/' . $announcement->id]
		];

		return View::make('frontentitlementdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontInvestorAlert()
	{
		$page = Page::where('type','=','investoralert')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Investor Alert', 'url' => '/investorrelations/frontinvestoralert/']
		];
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo'])))
		{
			$investoralert = Announcement::where('category','=','Investor Alert')
				->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))
				->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))
				->where('status','=',1)
				->where('active','=',1)
				->get();

		}
		else if(!empty($_REQUEST['from_year']))
		{
			$investoralert = Announcement::where('category','=','Investor Alert')
				->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))
				->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))
				->where('status','=',1)
				->where('active','=',1)
				->get();
		}
		else{
			$investoralert = Announcement::where('category','=','Investor Alert')
				->where('status','=',1)
				->where('active','=',1)
				->get();
		}

		return View::make('frontinvestoralert',array(
			'investoralert'	=> $investoralert,
			'breadcrumbs'	=> $breadcrumbs,
			'pageTitle'		=> $pageTitle
		));
	}

	public function frontAdditionallisting()
	{
		$page = Page::where('type','=','newscenter')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =Announcement::where('category','LIKE','%Additional Listing%')->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->where('active','=',1)->get();

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =Announcement::where('category','LIKE','%Additional Listing%')->where('created_at','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('created_at','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->where('active','=',1)->get();
		}
		else{
			$announcelists = Announcement::where('category','LIKE','%Additional Listing%')->where('status','=',1)->where('active','=',1)->get();

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "News Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Bursa Announcements",
				"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
			),
			4 => array
			(
				"title" => "Additional Listing Announcement",
				"url" => ""
			)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists
			)
		);
	}

	public function frontAdditionallistingdetail($listing_id){
		$page = Page::where('type','=','newscenter')->where('published','=',1)->get();
		$announcement = Announcement::where('id','=',$listing_id)->get();
		$pageTitle = "<h2>".$announcement[0]->title."</h2>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "News Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Bursa Announcements",
				"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
			),
			4 => array
			(
				"title" => $announcement[0]->category,
				"url" => "/investorrelations/frontadditionallisting"
			),
			5 => array
			(
				"title" => $announcement[0]->title,
				"url" => ""
			)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontbursaannouncement',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0]
			)
		);

		//return View::make('frontadditionallistingdetail');
	}

	public function frontlistingcircular()
	{
		$announcements = $this->getData('Listing Circular');
		$page = Page::where('type','=','circularreports')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Listing Circulars', 'url' => '/investorrelations/frontlistingcircular']
		];
		return View::make('frontlistingcircular', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontlistingcirculardetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','circularreports')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Listing Circulars', 'url' => '/investorrelations/frontlistingcircular'],
			['title' => $announcement->title, 'url' => '']
		];
		return View::make('frontlistingcirculardetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontTradingright()
	{
		$announcements = $this->getData('Trading Right');
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Trading of Rights Announcement', 'url' => '/investorrelations/fronttradingright'],
		];
		return View::make('frontTradingright', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontfinanciallisting()
	{
		$announcements = $this->getData('Financial Result');
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Financial Results', 'url' => '/investorrelations/frontfinanciallisting']
		];
		return View::make('frontfinanciallisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontfinanciallistingdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
			['title' => 'Financial Results', 'url' => '/investorrelations/frontfinanciallisting'],
			['title' => $announcement->title, 'url' => '']
		];
		return View::make('frontfinanciallistingdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontgeneralannouncementlisting()
	{
		$announcements = $this->getData('General Announcement');
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'General Announcement', 'url' => '/investorrelations/frontgeneralannouncementlisting']
			];
		return View::make('frontgeneralannouncementlisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontgeneralannouncementdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'General Announcement', 'url' => '/investorrelations/frontgeneralannouncementlisting'],
				['title' => $announcement->title, 'url' => '']
			];
		return View::make('frontgeneralannouncementdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontgeneralmeetinglisting()
	{
		$announcements = $this->getData('General Meeting');
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'General Meetings', 'url' => '/investorrelations/frontgeneralmeetinglisting']
			];
		return View::make('frontgeneralmeetinglisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontgeneralmeetingdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'General Meetings', 'url' => '/investorrelations/frontgeneralmeetinglisting'],
				['title' => $announcement->title, 'url' => '']
			];
		return View::make('frontgeneralmeetingdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontspecialannouncementlisting()
	{
		$announcements = $this->getData('Special announcement');
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Special Announcements', 'url' => '/investorrelations/frontspecialannouncementlisting']
			];
		return View::make('frontspecialannouncementlisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontspecialannouncementdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Special Announcements', 'url' => '/investorrelations/frontspecialannouncementlisting'],
				['title' => $announcement->title, 'url' => '']
			];
		return View::make('frontspecialannouncementdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontdirectorinterest()
	{
		$announcements = $this->getData("Changes in Director's Interest");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Director\'s Interest (S135)', 'url' => '/investorrelations/directorinterest']
			];
		return View::make('frontdirectorinterest', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontdirectorinterestdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Director\'s Interest (S135)', 'url' => '/investorrelations/directorinterest'],
				['title' => $announcement->title, 'url' => '']
			];
		return View::make('frontdirectorinterestdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontshareholderinterest()
	{
		$announcements = $this->getData("Changes in Substantial Shareholder's Interest");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Substantial Shareholder\'s Interest (29B)', 'url' => '/investorrelations/shareholderinterest'],
			];
		return View::make('frontshareholderinterest', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontshareholderdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Substantial Shareholder\'s Interest (29B)', 'url' => '/investorrelations/shareholderinterest'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('frontshareholderdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontinterestshareholderlist()
	{
		$announcements = $this->getData("Notice of Interest of Substantial Shareholder");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Interest Substantial Shareholder (29A)', 'url' => '/investorrelations/interestshareholderlist'],
			];
		return View::make('frontinterestshareholderlist', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function frontinterestshareholderdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Interest Substantial Shareholder (29A)', 'url' => '/investorrelations/interestshareholderlist'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('frontinterestshareholderdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function frontpersonceasing()
	{
		$announcements = $this->getData("Notice of Person Ceasing");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Person Ceasing (29C)', 'url' => '/investorrelations/personceasing']
			];
		return View::make('frontpersonceasing', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function auditcommittee()
	{
		$announcements = $this->getData("Change in Audit Committee");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Audit Committee', 'url' => '/investorrelations/auditcommittee']
			];
		return View::make('auditcommittee', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function auditcommitteedetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Changes in Audit Committee', 'url' => '/investorrelations/auditcommittee'],
				['title' => $announcement->title, 'url' => '']
			];
		return View::make('auditcommitteedetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function boardroom()
	{
		$announcements = $this->getData("Change in Boardroom");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change in Boardroom', 'url' => '/investorrelations/boardroom'],
			];
		return View::make('boardroom', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function boardroomdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change in Boardroom', 'url' => '/investorrelations/boardroom'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('boardroomdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function chiefexecutiveofficer()
	{
		$announcements = $this->getData("Change in Chief Executive Officer");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change in Chief Executive Officer', 'url' => '/investorrelations/chiefexecutiveofficer'],
			];
		return View::make('chiefexecutiveofficer', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function principalofficer()
	{
		$announcements = $this->getData("Change in Principal Officer");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change in Principal Officer', 'url' => '/investorrelations/principalofficer'],
			];
		return View::make('principalofficer', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function principalofficerdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change in Principal Officer', 'url' => '/investorrelations/principalofficer'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('principalofficerdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function addresslisting()
	{
		$announcements = $this->getData("Change of Address");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change of address', 'url' => '/investorrelations/addresslisting'],
			];
		return View::make('addresslisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function addressdetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change of address', 'url' => '/investorrelations/addresslisting'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('addressdetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function compsectretarylisting()
	{
		$announcements = $this->getData("Change of Company Secretary");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change of Company Secretary', 'url' => '/investorrelations/compsectretarylisting'],
			];
		return View::make('compsectretarylisting', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function registrarlist()
	{
		$announcements = $this->getData("Change of Registrar");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change of Registrar', 'url' => '/investorrelations/registrarlist'],
			];
		return View::make('registrarlist', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function registrardetail($id)
	{
		$announcement = Announcement::find($id);
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Change of Registrar', 'url' => '/investorrelations/registrarlist'],
				['title' => $announcement->title, 'url' => ''],
			];
		return View::make('registrardetail', compact('announcement', 'breadcrumbs', 'pageTitle'));
	}

	public function resale()
	{
		$announcements = $this->getData("Notice of Resale");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Resale/Cancellation of Treasury Share - Immediate Announcement', 'url' => '/investorrelations/resale'],
			];
		return View::make('resale', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function immediateannouncement()
	{
		$announcements = $this->getData("Notice of Shares Buy Back%Immediate Announcement");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Shares Buy Back - Immediate Announcement', 'url' => '/investorrelations/immediateannouncement'],
			];
		return View::make('immediateannouncement', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function companypursuant()
	{
		$announcements = $this->getData("Notice of Shares Buy Back%Form 28A");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Shares Buy Back by a Company Pursuant to Form 28A', 'url' => '/investorrelations/companypursuant'],
			];
		return View::make('companypursuant', compact('announcements', 'breadcrumbs', 'pageTitle'));
	}

	public function sharecompanypursuant()
	{
		$announcements = $this->getData("Notice of Shares Buy Back%Form 28B");
		$page = Page::where('type','=','newscenter')->where('published','=',1)->first();
		$pageTitle = $page->page_title;

		$breadcrumbs = $this->breadcrumbs + [
				['title' => 'Notice of Shares Buy Back by a Company Pursuant to Form 28B', 'url' => '/investorrelations/sharecompanypursuant'],
			];
		return View::make('sharecompanypursuant', compact('announcements', 'breadcrumbs', 'pageTitle'));
	} */

	public function frontIpoCompetitiveAdvantage() {

		$page = Page::where('type','=','ipocompetitive')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "Estate Information",
				"url" => ""
			),
			3 => array
			(
				"title" => "Estate Profile",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontcompetitiveadvantage',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	public function frontIpoRiskFactors() {

		$page = Page::where('type','=','iporiskfactors')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "IPO Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Risk Factors",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontiporiskfactors',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	public function frontIpoUtilisationProceeds() {

		$page = Page::where('type','=','ipoutilisationproceeds')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "IPO Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Utilisation of Proceeds",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontipoutilisationproceeds',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	public function frontIpoIndustryOverview() {

		$page = Page::where('type','=','ipoindustryoverview')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "IPO Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Industry Overview",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontipoindustryoverview',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	public function frontEntitlements() {

		$page = Page::where('type','=','entitlements')->where('published','=',1)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
			),
			2 => array
			(
				"title" => "IPO Centre",
				"url" => ""
			),
			3 => array
			(
				"title" => "Entitlements",
				"url" => ""
			)

		);
		$tagLine = "Oil Palm Plantation Investment Holdings";
		$mainMenuTitle = $page[0]->page_title;
		$metaTitle = $mainMenuTitle;
		return View::make('frontentitlements',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'metaTitle' => $metaTitle

			)
		);
	}

	/* End of Front Functions */



	/**********************Added By JP*************************  */

	/* Announcement Front Pages  */



	/**
	 * Entitlements
	 *
	 *   */
	public function frontEntitlement(){
		$base_category = 'Entitlement%';
		$page = Page::where('type','=','cat_entitlement')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists = CrawledAnnounce::where('category','LIKE',$base_category)->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists = CrawledAnnounce::where('category','LIKE',$base_category)->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE',$base_category)->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Entitlements Summary",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontentitlementdetail/"
		)
		);
	}

	public function frontEntitlementDetail($listing_id){
		$page = Page::where('type','=','cat_entitlement')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => ' Entitlements Listing',
						"url" => URL::to('/investorrelations/frontentitlement')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontentitlement"
		)
		);
	}






	/**
	 * Investor Alert Announcement
	 *
	 *   */

	public function frontInvestorAlert(){
		$page = Page::where('type','=','cat_investoralert')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Investor Alert Announcement')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Investor Alert Announcement')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Investor Alert Announcement')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Investor Alert",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontinvestoralertdetail/"
		)
		);
	}

	public function frontInvestorAlertDetail($listing_id){
		$page = Page::where('type','=','cat_investoralert')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => ' Investor Alert',
						"url" => URL::to('/investorrelations/frontinvestoralert')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontinvestoralert"
		)
		);
	}


	/**
	 * Additional Listing
	 *
	 *   */


	public function frontAdditionallisting(){

		$page = Page::where('type','=','cat_additionallisting')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Additional Listing%')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Additional Listing%')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Additional Listing%')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Additional Listing Announcement",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontadditionallistingdetail/"
		)
		);
	}
	public function frontAdditionallistingdetail($listing_id){
		$page = Page::where('type','=','cat_additionallisting')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => 'Additional Listing Announcement Listing',
						"url" => URL::to('/investorrelations/frontadditionallisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontadditionallisting"
		)
		);
	}

		/**
	 * Additional Listing / Subdivision of Shares
	 *
	 *   */


	public function frontAdditionallistingsubdivision(){

		$page = Page::where('type','=','cat_additionallistingsubdivision')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Additional Listing Announcement /Subdivision of Shares%')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Additional Listing Announcement /Subdivision of Shares%')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Additional Listing Announcement /Subdivision of Shares%')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Additional Listing Announcement /Subdivision of Shares",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontadditionallistingsubdivisiondetail/"
		)
		);
	}
	public function frontAdditionallistingsubdivisiondetail($listing_id){
		$page = Page::where('type','=','cat_additionallistingsubdivision')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => 'Additional Listing Announcement /Subdivision of Shares Listing',
						"url" => URL::to('/investorrelations/frontadditionallistingsubdivision')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontadditionallistingsubdivision"
		)
		);
	}

	/**
	 *  Listing Circular
	 *
	 *   */

	public function frontlistingcircular(){
		$page = Page::where('type','=','cat_listingcirculars')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Listing Circular')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Listing Circular')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Listing Circular')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Listing Circulars",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontlistingcirculardetail/"
		)
		);
	}
	public function frontlistingcirculardetail($listing_id){
		$page = Page::where('type','=','cat_listingcirculars')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Listing Circulars",
						"url" => URL::to('/investorrelations/frontlistingcircular')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontlistingcircular"
		)
		);
	}


	/**
	 * General Announcement
	 *
	 *   */
	public function frontgeneralannouncementlisting(){
		$base_category = 'General Announcement for PLC';
		$page = Page::where('type','=','cat_generalannouncement')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',$base_category)->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE',$base_category)->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE',$base_category)->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}

		// dd($announcelists[0]);
		// exit;

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "General Announcement",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontgeneralannouncementdetail/"
		)
		);
	}

	public function frontgeneralannouncementdetail($listing_id)
	{
		$page = Page::where('type','=','cat_generalannouncement')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "General Announcement",
						"url" => URL::to('/investorrelations/frontgeneralannouncementlisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontgeneralannouncementlisting"
		)
		);
	}


	/**
	 * Financial Results
	 *   */
	public function frontfinanciallisting(){
		$page = Page::where('type','=','cat_financialresults')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Financial Results')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Financial Results')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Financial Results')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Financial Results",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontfinanciallistingdetail/"
		)
		);
	}
	public function frontfinanciallistingdetail($listing_id){
		$page = Page::where('type','=','cat_financialresults')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Financial Results",
						"url" => URL::to('/investorrelations/frontfinanciallisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontfinanciallisting"
		)
		);
	}



	/**
	 * General Meetings
	 *   */
	public function frontgeneralmeetinglisting(){
		$page = Page::where('type','=','cat_generalmeetings')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','General Meetings')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','General Meetings')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','General Meetings')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "General Meetings",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontgeneralmeetingdetail/"
		)
		);
	}
	public function frontgeneralmeetingdetail($listing_id){
		$page = Page::where('type','=','cat_generalmeetings')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " General Meetings Listing",
						"url" => URL::to('/investorrelations/frontgeneralmeetinglisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontgeneralmeetinglisting"
		)
		);
	}


	/**
	 * Special Announcements
	 *   */
	public function frontspecialannouncementlisting(){
		$page = Page::where('type','=','cat_specialannouncement')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE','Special Announcements')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE','Special Announcements')->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE','Special Announcements')->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Special Announcements",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/frontspecialannouncementdetail/"
		)
		);
	}
	public function frontspecialannouncementdetail($listing_id){
		$page = Page::where('type','=','cat_specialannouncement')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Special Announcements Listing",
						"url" => URL::to('/investorrelations/frontspecialannouncementlisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/frontspecialannouncementlisting"
		)
		);
	}


	/**
	 * Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965
	 *   */
	public function frontdirectorinterest(){
		$page = Page::where('type','=','cat_directorinterest')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Changes in Director's Interest (S135)",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/directorinterestdetail/"
		)
		);
	}
	public function frontdirectorinterestdetail($listing_id){
		$page = Page::where('type','=','cat_directorinterest')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Changes in Director's Interest (S135) Listing",
						"url" => URL::to('/investorrelations/directorinterest')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/directorinterest"
		)
		);
	}


	/**
	 * Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965
	 *   */
	public function frontshareholderinterest(){
		$page = Page::where('type','=','cat_shareholderinterest')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Changes in Substantial Shareholder's Interest (29B)",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/shareholderdetail/"
		)
		);
	}
	public function frontshareholderdetail($listing_id){
		$page = Page::where('type','=','cat_shareholderinterest')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Changes in Substantial Shareholder's Interest (29B) Listing",
						"url" => URL::to('/investorrelations/shareholderinterest')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/shareholderinterest"
		)
		);
	}

		/**
	 * Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016
	 *   */
	public function frontinterestshareholderlistsection138(){
		$page = Page::where('type','=','cat_interestshareholder138')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/interestshareholdersection138detail/"
		)
		);
	}
	public function frontinterestshareholdersection138detail($listing_id){
		$page = Page::where('type','=','cat_interestshareholder138')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016",
						"url" => URL::to('/investorrelations/interestshareholderlistsection138')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/interestshareholderlistsection138"
		)
		);
	}


		/**
	 * Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016
	 *   */
	public function frontinterestshareholderlistsection137(){
		$page = Page::where('type','=','cat_interestshareholder137')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/interestshareholdersection137detail/"
		)
		);
	}
	public function frontinterestshareholdersection137detail($listing_id){
		$page = Page::where('type','=','cat_interestshareholder137')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016",
						"url" => URL::to('/investorrelations/interestshareholderlistsection137')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/interestshareholderlistsection137"
		)
		);
	}

	/**
	 * Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965
	 *   */
	public function frontinterestshareholderlist(){
		$page = Page::where('type','=','cat_interestshareholder')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "interestshareholderdetail",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/interestshareholderdetail/"
		)
		);
	}
	public function frontinterestshareholderdetail($listing_id){
		$page = Page::where('type','=','cat_interestshareholder')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Interest Substantial Shareholder (29A) Listing",
						"url" => URL::to('/investorrelations/interestshareholderlist')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/interestshareholderlist"
		)
		);
	}


	/**
	 * Notice of Person Ceasing (29C)
	 *   */
	public function frontpersonceasing(){
		$page = Page::where('type','=','cat_personceasing')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Person Ceasing (29C)")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Person Ceasing (29C)")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Person Ceasing (29C)")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Person Ceasing (29C)",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/personceasingdetail/"
		)
		);
	}
	public function frontpersonceasingdetail($listing_id){
		$page = Page::where('type','=','cat_personceasing')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Notice of Person Ceasing (29C) Listing",
						"url" => URL::to('/investorrelations/personceasing')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/personceasing"
		)
		);
	}



	/**
	 * Change in Audit Committee
	 *   */
	public function auditcommittee(){
		$page = Page::where('type','=','cat_auditcommittee')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Audit Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Audit Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Audit Committee")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Audit Committee",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/auditcommitteedetail/"
		)
		);
	}
	public function auditcommitteedetail($listing_id){
		$page = Page::where('type','=','cat_auditcommittee')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Audit Committee Listing",
						"url" => URL::to('/investorrelations/auditcommittee')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/auditcommittee"
		)
		);
	}

         /**
	 * Change in Risk Committee
	 *   */
	public function riskcommittee(){
		$page = Page::where('type','=','cat_riskcommittee')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Risk Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Risk Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Risk Committee")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Risk Committee",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/riskcommitteedetail/"
		)
		);
	}
	public function riskcommitteedetail($listing_id){
		$page = Page::where('type','=','cat_riskcommittee')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Risk Committee Listing",
						"url" => URL::to('/investorrelations/riskcommittee')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/riskcommittee"
		)
		);
	}

	/**
	 * Change in Nomination Committee list
	 *   */
	public function nominationcommittee(){
		$page = Page::where('type','=','cat_nominationcommittee')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Nomination Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Nomination Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Nomination Committee")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Nomination Committee",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/nominationcommitteedetail/"
		)
		);
	}

	/**
	* Change in Nomination Committee detail
	*/
	public function nominationcommitteedetail($listing_id){
		$page = Page::where('type','=','cat_auditcommittee')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Nomination Committee Listing",
						"url" => URL::to('/investorrelations/nominationcommittee')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/nominationcommittee"
		)
		);
	}
		/**
	 * Change in Remuneration Committee list
	 *   */
	public function remunerationcommittee(){
		$page = Page::where('type','=','cat_remunerationcommittee')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Remuneration Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Remuneration Committee")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Remuneration Committee")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Remuneration Committee",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/remunerationcommitteedetail/"
		)
		);
	}

	/**
	* Change in Remuneration Committee detail
	*/
	public function remunerationcommitteedetail($listing_id){
		$page = Page::where('type','=','cat_remunerationcommittee')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Remuneration Committee Listing",
						"url" => URL::to('/investorrelations/remunerationcommittee')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/remunerationcommittee"
		)
		);
	}
	/**
	 * Change in Boardroom
	 *   */
	public function boardroom(){
		$page = Page::where('type','=','cat_boardroom')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Boardroom")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Boardroom")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Boardroom")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Boardroom",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/boardroomdetail/"
		)
		);
	}
	public function boardroomdetail($listing_id){
		$page = Page::where('type','=','cat_boardroom')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Boardroom Listing",
						"url" => URL::to('/investorrelations/boardroom')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/boardroom"
		)
		);
	}

	/**
	 * Change in Chief Executive Officer
	 *   */
	public function chiefexecutiveofficer(){
		$page = Page::where('type','=','cat_chiefexecutiveofficer')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Chief Executive Officer")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Chief Executive Officer")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Chief Executive Officer")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => " Change in Chief Executive Officer",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/chiefexecutiveofficerdetail/"
		)
		);
	}
	public function chiefexecutiveofficerdetail($listing_id){
		$page = Page::where('type','=','cat_chiefexecutiveofficer')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Chief Executive Officer Listing",
						"url" => URL::to('/investorrelations/chiefexecutiveofficer')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/chiefexecutiveofficer"
		)
		);
	}

	/**
	 * Change in Principal Officer
	 *   */
	public function principalofficer(){
		$page = Page::where('type','=','cat_principalofficer')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change in Principal Officer")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change in Principal Officer")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change in Principal Officer")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Principal Officer",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/principalofficerdetail/"
		)
		);
	}
	public function principalofficerdetail($listing_id){
		$page = Page::where('type','=','cat_principalofficer')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change in Principal Officer Listing",
						"url" => URL::to('/investorrelations/principalofficer')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/principalofficer"
		)
		);
	}

	/**
	 * Change of Address
	 *   */
	public function addresslisting(){
		$page = Page::where('type','=','cat_addresslisting')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change of Address")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change of Address")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change of Address")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Address",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/addressdetail/"
		)
		);
	}
	public function addressdetail($listing_id){
		$page = Page::where('type','=','cat_addresslisting')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Address Listing",
						"url" => URL::to('/investorrelations/addresslisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/addresslisting"
		)
		);
	}

	/**
	 * Change of Company Secretary
	 *   */
	public function compsectretarylisting(){
		$page = Page::where('type','=','cat_compsectretarylisting')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change of Company Secretary")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change of Company Secretary")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change of Company Secretary")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Company Secretary",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/compsectretarydetail/"
		)
		);
	}
	public function compsectretarydetail($listing_id){
		$page = Page::where('type','=','cat_principalofficer')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Company Secretary Listing",
						"url" => URL::to('/investorrelations/compsectretarylisting')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/compsectretarylisting"
		)
		);
	}

	/**
	 * Change of Registrar
	 *   */
	public function registrarlist(){
		$page = Page::where('type','=','cat_registrarlist')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Change of Registrar")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Change of Registrar")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Change of Registrar")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Registrar",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/registrardetail/"
		)
		);
	}
	public function registrardetail($listing_id){
		$page = Page::where('type','=','cat_registrarlist')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Change of Registrar Listing",
						"url" => URL::to('/investorrelations/registrarlist')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/registrarlist"
		)
		);
	}

	/**
	 * Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement
	 *   */
	public function resale(){
		$page = Page::where('type','=','cat_resalelist')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/resaledetail/"
		)
		);
	}
	public function resaledetail($listing_id){
		$page = Page::where('type','=','cat_resalelist')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement Listing",
						"url" => URL::to('/investorrelations/resale')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/resale"
		)
		);
	}

	/**
	 * Notice of Shares Buy Back by a Company pursuant to Form 28A
	 *   */
	public function companypursuant(){
		$page = Page::where('type','=','cat_companypursuant')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Shares Buy Back by a Company pursuant to Form 28A")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back by a Company pursuant to Form 28A")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back by a Company pursuant to Form 28A")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back by a Company pursuant to Form 28A",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/companypursuantdetail/"
		)
		);
	}
	public function companypursuantdetail($listing_id){
		$page = Page::where('type','=','cat_companypursuant')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back by a Company pursuant to Form 28A Listing",
						"url" => URL::to('/investorrelations/companypursuant')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/companypursuant"
		)
		);
	}

	/**
	 * Notice of Shares Buy Back - Immediate Announcement
	 *   */
	public function immediateannouncement(){
		$page = Page::where('type','=','cat_immediateannouncement')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Shares Buy Back - Immediate Announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back - Immediate Announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back - Immediate Announcement")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back - Immediate Announcement",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/immediateannouncementdetail/"
		)
		);
	}
	public function immediateannouncementdetail($listing_id){
		$page = Page::where('type','=','cat_immediateannouncement')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back - Immediate Announcement Listing",
						"url" => URL::to('/investorrelations/immediateannouncement')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/immediateannouncement"
		)
		);
	}


	/**
	 * Notice of Shares Buy Back by a Company pursuant to Form 28B
	 *   */
	public function sharecompanypursuant(){
		$page = Page::where('type','=','cat_sharecompanypursuant')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Notice of Shares Buy Back by a Company pursuant to Form 28B")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back by a Company pursuant to Form 28B")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Notice of Shares Buy Back by a Company pursuant to Form 28B")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back by a Company pursuant to Form 28B",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/sharecompanypursuantdetail/"
		)
		);
	}
	public function sharecompanypursuantdetail($listing_id){
		$page = Page::where('type','=','cat_sharecompanypursuant')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Notice of Shares Buy Back by a Company pursuant to Form 28B Listing",
						"url" => URL::to('/investorrelations/sharecompanypursuant')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/sharecompanypursuant"
		)
		);
	}



	/**
	 * Trading of rights announcement
	 *   */
	public function frontTradingright(){
		$page = Page::where('type','=','cat_financialresult')->where('published','=',1)->get();
		if((!empty($_REQUEST['dDateFrom'])) && (!empty($_REQUEST['dDateTo']))){
			$announcelists =CrawledAnnounce::where('category','LIKE',"Trading of rights announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['dDateFrom'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['dDateTo'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}else if(!empty($_REQUEST['from_year'])){
			$announcelists =CrawledAnnounce::where('category','LIKE', "Trading of rights announcement")->where('date_of_publishing','>=',date('Y-m-d',strtotime($_REQUEST['from_year'])))->where('date_of_publishing','<=',date('Y-m-d',strtotime($_REQUEST['to_year'])))->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);
		}
		else{
			$announcelists = CrawledAnnounce::where('category','LIKE', "Trading of rights announcement")->where('status','=',1)->orderby('date_of_publishing', 'desc')->paginate(10);

		}

		$pageTitle = $page[0]->page_title;
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Trading of rights announcement",
						"url" => ""
				)

		);
		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;

		return View::make('frontadditionallisting',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcelists' => $announcelists,
				'detail_url' => "/investorrelations/fronttradingrightdetail/"
		)
		);
	}
	public function frontTradingrightDetail($listing_id){
		$page = Page::where('type','=','cat_financialresult')->where('published','=',1)->get();
		$announcement = CrawledAnnounce::where('id','=',$listing_id)->get();
		$pageTitle = "<h1>".$page[0]->page_title."</h1>";
		$masthead = url().'/images/banner_subpage/banner13.jpg';
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
				),
				2 => array
				(
						"title" => "News Centre",
						"url" => ""
				),
				3 => array
				(
						"title" => "Bursa Announcements",
						"url" => URL::to('/investorrelations/newscentre/bursaannouncements')
				),
				4 => array
				(
						"title" => "Trading of rights announcement Listing",
						"url" => URL::to('/investorrelations/fronttradingright')
				),
				5 => array
				(
						"title" => $announcement[0]->title,
						"url" => ""
				)

		);

		$tagLine = "";
		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontadditionallistingdetail',array(
				'page' => $page,
				'pageTitle' => $pageTitle,
				'masthead' => $masthead,
				'breadcrumbs' => $breadcrumbs,
				'tagLine' => $tagLine,
				'announcement' => $announcement[0],
				'back_url' => "/investorrelations/fronttradingright"
		)
		);
	}

}

