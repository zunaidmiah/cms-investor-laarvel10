<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Route::get('/', function()
{
  return View::make('hello');
});
Route::get('grievancereportslisting',function(){
echo "hello world";
});
*/

Route::get('delete_multiple', 'App\Http\Controllers\HomeController@delete_multiple');
Route::get('testing_pdf', 'App\Http\Controllers\HomeController@testing_pdf');
Route::get('destory_session', 'App\Http\Controllers\HomeController@destory_session');
Route::get('admin/grienvance_procedure_delete/{id}', 'App\Http\Controllers\HomeController@del');

Route::get('admin/grienvance_procedure', 'App\Http\Controllers\HomeController@grienvance_procedure');
Route::get('grievancereportslisting', 'App\Http\Controllers\HomeController@grivance');
Route::get('grievanceform', 'App\Http\Controllers\HomeController@grivanceForm');

Route::post('save_gravience', 'App\Http\Controllers\HomeController@save_gravience');

// for dynamic banner
View::composer(array('layouts.front', 'layouts.front_without_banner', 'layouts.front1', 'layouts.front2', 'layouts.front3'), function ($view) {
  if (request()->segment(3) == 'general') {
    $id = 20;
  } else if (request()->segment(3) == 'directorprofile') {
    $id = 21;
  } else if (request()->segment(3) == 'keymanagemnet') {
    $id = 22;
  } else if (request()->segment(3) == 'oursubsidiaries') {
    $id = 24;
  } else if (request()->segment(2) == 'corporategovernance') {
    $id = 26;
  } else if (request()->segment(3) == 'ipostatistics') {
    $id = 27;
  } else if (request()->segment(3) == 'competitiveadvantages') {
    $id = 28;
  } else if (request()->segment(3) == 'riskfactors') {
    $id = 29;
  } else if (request()->segment(3) == 'utilizationproceeds') {
    $id = 30;
  } else if (request()->segment(3) == 'industryoverview') {
    $id = 31;
  }

  //share information
  else if (request()->segment(3) == 'priceticker') {
    $id = 32;
  } else if (request()->segment(3) == 'pricevolume') {
    $id = 34;
  } else if (request()->segment(3) == 'shareholdingsanalysis') {
    $id = 35;
  } else if (request()->segment(3) == 'topshareholders') {
    $id = 36;
  }
  //end of share information
  else if (request()->segment(2) == 'frontentitlement') {
    $id = 37;
  } else if (request()->segment(3) == 'financialhighlights') {
    $id = 38;
  } else if (request()->segment(3) == 'comprehensiveincome') {
    $id = 39;
  } else if (request()->segment(3) == 'financialposition') {
    $id = 40;
  } else if (request()->segment(3) == 'cashflowstatement') {
    $id = 160;
  } else if (request()->segment(3) == 'risk_management_committee') {
    $id = 161;
  } else if (request()->segment(3) == 'ourproperties') {
    $id = 162;
  } else if (request()->segment(3) == 'remuneration_committee') {
    $id = 163;
  } else if (request()->segment(3) == 'equitychanges') {
    $id = 42;
  } else if (request()->segment(3) == 'latestreport') {
    $id = 43;
  } else if (request()->segment(3) == 'segmentalanalysis') {
    $id = 44;
  } else if (request()->segment(3) == 'ratioanalysis') {
    $id = 45;
  } else if (request()->segment(3) == 'whistleblowerpolicy') {
    $id = 46;
  } else if (request()->segment(3) == 'reviewoperations') {
    $id = 47;
  } else if (request()->segment(3) == 'pastperformance') {
    $id = 48;
  } else if (request()->segment(3) == 'bursaannouncements') {

    $id = 49;
  } else if (request()->segment(3) == 'annualreports') {
    $id = 51;
  } else if (request()->segment(3) == 'annualauditedaccounts') {
    $id = 52;
  } else if (request()->segment(3) == 'quarterlyreports') {
    $id = 53;
  } else if (request()->segment(3) == 'circulars') {
    $id = 54;
  } else if (request()->segment(3) == 'prospectus') {
    $id = 55;
  } else if (request()->segment(3) == 'analystreports') {
    $id = 56;
  } else if (request()->segment(3) == 'newsalerts') {
    $id = 57;
  } else if (request()->segment(2) == 'eventcalendar') {
    $id = 58;
  } else if (request()->segment(1) == 'regionaloffices') {
    $id = 61;
  } else if (request()->segment(1) == '') {
    $id = 62;
  } else if (request()->segment(1) == 'contactus') {
    $id = 100;
  }

  //bursa sub pages
  else if (request()->segment(2) == 'frontadditionallisting') {
    $id = 105;
  } else if (request()->segment(2) == 'frontadditionallistingdetail') {
    $id = 106;
  } else if (request()->segment(2) == 'frontentitlement') {
    $id = 107;
  } else if (request()->segment(2) == 'frontentitlementdetail') {
    $id = 108;
  } else if (request()->segment(2) == 'frontinvestoralert') {
    $id = 109;
  } else if (request()->segment(2) == 'frontinvestoralertdetail') {
    $id = 110;
  } else if (request()->segment(2) == 'frontlistingcircular') {
    $id = 111;
  } else if (request()->segment(2) == 'frontlistingcirculardetail') {
    $id = 112;
  } else if (request()->segment(2) == 'fronttradingright') {
    $id = 113;
  } else if (request()->segment(2) == 'fronttradingrightdetail') {
    $id = 114;
  } else if (request()->segment(2) == 'frontfinanciallisting') {
    $id = 115;
  } else if (request()->segment(2) == 'frontfinanciallistingdetail') {
    $id = 116;
  } else if (request()->segment(2) == 'frontgeneralannouncementlisting') {
    $id = 117;
  } else if (request()->segment(2) == 'frontgeneralannouncementdetail') {
    $id = 118;
  } else if (request()->segment(2) == 'frontgeneralmeetinglisting') {
    $id = 119;
  } else if (request()->segment(2) == 'frontgeneralmeetingdetail') {
    $id = 120;
  } else if (request()->segment(2) == 'frontspecialannouncementlisting') {
    $id = 121;
  } else if (request()->segment(2) == 'frontspecialannouncementdetail') {
    $id = 122;
  } else if (request()->segment(2) == 'directorinterest') //second part
  {
    $id = 123;
  } else if (request()->segment(2) == 'directorinterestdetail') {
    $id = 124;
  } else if (request()->segment(2) == 'shareholderinterest') {
    $id = 125;
  } else if (request()->segment(2) == 'shareholderdetail') {
    $id = 126;
  } else if (request()->segment(2) == 'interestshareholderlist') {
    $id = 127;
  } else if (request()->segment(2) == 'interestshareholderdetail') {
    $id = 128;
  } else if (request()->segment(2) == 'interestshareholderlistsection137') {
    $id = 171;
  } else if (request()->segment(2) == 'interestshareholdersection137detail') {
    $id = 172;
  } else if (request()->segment(2) == 'interestshareholderlistsection138') {
    $id = 173;
  } else if (request()->segment(2) == 'interestshareholdersection138detail') {
    $id = 174;
  } else if (request()->segment(2) == 'frontadditionallistingsubdivision') {
    $id = 175;
  } else if (request()->segment(2) == 'frontadditionallistingsubdivisiondetail') {
    $id = 176;
  } else if (request()->segment(2) == 'personceasing') {
    $id = 129;
  } else if (request()->segment(2) == 'personceasingdetail') //end second part
  {
    $id = 130;
  } else if (request()->segment(2) == 'auditcommittee') {
    $id = 131;
  } else if (request()->segment(2) == 'auditcommitteedetail') {
    $id = 132;
  } else if (request()->segment(2) == 'boardroom') {
    $id = 133;
  } else if (request()->segment(2) == 'boardroomdetail') {
    $id = 134;
  } else if (request()->segment(2) == 'chiefexecutiveofficer') {
    $id = 135;
  } else if (request()->segment(2) == 'chiefexecutiveofficerdetail') {
    $id = 136;
  } else if (request()->segment(2) == 'principalofficer') {
    $id = 137;
  } else if (request()->segment(2) == 'principalofficerdetail') {
    $id = 138;
  } else if (request()->segment(2) == 'addresslisting') {
    $id = 139;
  } else if (request()->segment(2) == 'addressdetail') {
    $id = 140;
  } else if (request()->segment(2) == 'compsectretarylisting') {
    $id = 141;
  } else if (request()->segment(2) == 'compsectretarydetail') {
    $id = 142;
  } else if (request()->segment(2) == 'registrarlist') {
    $id = 143;
  } else if (request()->segment(2) == 'registrardetail') {
    $id = 144;
  } else if (request()->segment(2) == 'nominationcommittee') {
    $id = 145;
  } else if (request()->segment(2) == 'nominationcommitteedetail') //third part end
  {
    $id = 146;
  } else if (request()->segment(2) == 'resale') {
    $id = 147;
  } else if (request()->segment(2) == 'resaledetail') {
    $id = 148;
  } else if (request()->segment(2) == 'immediateannouncement') {
    $id = 149;
  } else if (request()->segment(2) == 'immediateannouncementdetail') {
    $id = 150;
  } else if (request()->segment(2) == 'companypursuant') {
    $id = 151;
  } else if (request()->segment(2) == 'companypursuantdetail') {
    $id = 152;
  } else if (request()->segment(2) == 'board-nomination-committe') {
    $id = 170;
  } else if (request()->segment(2) == 'sharecompanypursuant') {
    $id = 153;
  } else if (request()->segment(2) == 'sharecompanypursuantdetail') {
    $id = 154;
  } else if (request()->segment(2) == 'tor-audit-management-committee') {
    $id = 155;
  } else if (request()->segment(2) == 'tor-risk-management-committee') {
    $id = 156;
  } else if (request()->segment(3) == 'bursaannouncementsduplicate') {

    $id = 157;
  } else if (request()->segment(3) == 'directorsfitandproperpolicy') {
    $id = 158;
  } else if (request()->segment(3) == 'cbce') {
    $id = 159;
  } else if (request()->segment(3) == 'genderdiversitypolicy') {
    $id = 164;
  } else if (request()->segment(3) == 'remunerationpolicy') {
    $id = 165;
  } else if (request()->segment(3) == 'externalauditorsassessmentpolicy') {
    $id = 166;
  } else if (request()->segment(2) == 'remunernationcommittee') {
    $id = 167;
  } else if (request()->segment(2) == 'remunerationcommitteedetail') //third part end
  {
    $id = 168;
  }

  //bursa subpages end





  else {
    $id = 108;
  }





  $banners = DB::connection('cms')->select('SELECT *,b.banner from page_banner as a left join banners as b on a.banner_id=b.id where a.page_id=' . $id . ' and status=1 order by a.id desc');

  //$banners=DB::select(DB::raw($raw));

  //dd($banners);
  if ($banners) {
    $banner = $banners[0]->banner;
  } else {
    $banner = 'banner5.jpg';
  }

  $links = DB::connection("cms")->table("links")->get();

  $view->with('banner', $banner)->with("links", $links);
});
//end dynamic banner



Route::group(array('prefix' => 'cms'), function () {
  Route::get('/', function () {
    return redirect()->to(Config::get('app.cms'));
  });

  Route::get('/{param1}', function ($param1) {
    return redirect()->to(Config::get('app.cms') . $param1);
  });

  Route::get('/{param1}/{param2}', function ($param1, $param2) {
    return redirect()->to(Config::get('app.cms') . $param1 . "/" . $param2);
  });

  Route::get('/{param1}/{param2}/{param3}', function ($param1, $param2, $param3) {
    return redirect()->to(Config::get('app.cms') . $param1 . "/" . $param2 . "/" . $param3);
  });
});

Route::group(array('prefix' => 'charts'), function () {
  Route::get('/', function () {
    return redirect()->to(Config::get('app.charts'));
  });

  Route::get('/{param1}', function ($param1) {
    return redirect()->to(Config::get('app.charts') . $param1);
  });

  Route::get('/{param1}/{param2}', function ($param1, $param2) {
    return redirect()->to(Config::get('app.charts') . $param1 . "/" . $param2);
  });

  Route::get('/{param1}/{param2}/{param3}', function ($param1, $param2, $param3) {
    return redirect()->to(Config::get('app.charts') . $param1 . "/" . $param2 . "/" . $param3);
  });
});

Route::group(array('prefix' => 'media_news'), function () {
  Route::get('/', function () {
    return redirect()->to(Config::get('app.media_news'));
  });

  Route::get('/{param1}', function ($param1) {
    return redirect()->to(Config::get('app.media_news') . $param1);
  });

  Route::get('/{param1}/{param2}', function (Request $req, $param1, $param2) {
    $id = $req->input('show');
    return redirect()->to(Config::get('app.media_news') . $param1 . "/" . $param2 . "?show=" . $id);
  });

  Route::get('/{param1}/{param2}/{param3}', function ($param1, $param2, $param3) {
    return redirect()->to(Config::get('app.media_news') . $param1 . "/" . $param2 . "/" . $param3);
  });
});


Route::group(["before" => "auth"], function () {
  Route::get('admin/userslist', 'App\Http\Controllers\App\Http\Controllers\UserController@listUsers', array('before' => 'auth'));

  //Sustainability
  Route::get('admin/sust_palm_oil', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_palm_oil');
  Route::get('admin/sust_protection_biological', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_protection_biological');
  Route::get('admin/sust_equality_gender', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_equality_gender');
  Route::get('admin/sust_food_safety', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_food_safety');
  Route::get('admin/sust_safety_health', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_safety_health');
  Route::get('admin/sust_quality', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_quality');
  Route::get('admin/sust_safety', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_safety');
  Route::get('admin/sust_certification', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_certification');
  Route::get('admin/sust_slop_river', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_slop_river');
  Route::get('admin/sust_social', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@sust_social');

  Route::get('admin/tor_board_nomination', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@tor_board_nomination');
  Route::get('admin/tor_audit_management_committee', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@tor_audit_management');
  Route::get('admin/tor_risk_management_committee', 'App\Http\Controllers\App\Http\Controllers\SustainabilityController@tor_risk_management');


  //new routing for bursa project
  Route::get('admin/general', 'App\Http\Controllers\CorporateController@General');
  Route::get('admin/dirprofile', 'App\Http\Controllers\CorporateController@DirProfile');
  Route::post('admin/dirprofileadd', 'App\Http\Controllers\CorporateController@DirProfileAdd');
  Route::post('admin/dirprofiledelete', 'App\Http\Controllers\CorporateController@DirProfileDelete');
  Route::post('admin/dirProfileDeleteMultiple', 'App\Http\Controllers\CorporateController@DirProfileDeleteMultiple');
  Route::post('admin/dirprofiledeleteall', 'App\Http\Controllers\CorporateController@DirProfileDeleteAll');
  Route::post('admin/page/dirprodeletemultiple', 'App\Http\Controllers\App\Http\Controllers\PageController@DirProDeleteMultiple');
  Route::post('admin/dirprofileedit', 'App\Http\Controllers\CorporateController@DirProfileEdit');
  Route::get('admin/keymanagement', 'App\Http\Controllers\CorporateController@KeyManagemenProfile');
  Route::get('admin/ourproperties', 'App\Http\Controllers\CorporateController@OurProperties');
  Route::get('admin/oursubsidiaries', 'App\Http\Controllers\CorporateController@OurSubsidiaries');
  Route::post('admin/oursubsidiariesadd', 'App\Http\Controllers\CorporateController@OurSubsidiariesAdd');
  Route::post('admin/deleteallpdf', 'App\Http\Controllers\CorporateController@DeleteAllPdf');
  Route::post('admin/pdfsingledelete', 'App\Http\Controllers\CorporateController@PdfSingleDelete');
  Route::post('admin/pdfedit', 'App\Http\Controllers\CorporateController@PdfEdit');
  Route::post('admin/page/pdfdeletemultiple', 'App\Http\Controllers\App\Http\Controllers\PageController@PdfDeleteMultiple');
  Route::post('admin/page/reportsdeletemultiple', 'App\Http\Controllers\App\Http\Controllers\PageController@ReportsDeleteMultiple');
  Route::post('admin/page/investoralertsdeletemultiple', 'App\Http\Controllers\CorporateController@CorporateDeleteMultiple');
  Route::get('admin/corpgovernance', 'App\Http\Controllers\CorporateController@CorpGovernance');
  Route::get('admin/ipostatistics', 'App\Http\Controllers\App\Http\Controllers\IpoController@IpoStatistics');
  Route::get('admin/ipocompetitive', 'App\Http\Controllers\App\Http\Controllers\IpoController@IpoCompetitive');
  Route::get('admin/iporiskfactors', 'App\Http\Controllers\App\Http\Controllers\IpoController@IpoRiskFactors');
  Route::get('admin/ipoutilisationproceeds', 'App\Http\Controllers\App\Http\Controllers\IpoController@IpoUtilisationProceeds');
  Route::get('admin/ipoindustryoverview', 'App\Http\Controllers\App\Http\Controllers\IpoController@IpoIndustryOverview');
  Route::get('admin/entitlements', 'App\Http\Controllers\App\Http\Controllers\IpoController@Entitlements');
  Route::get('admin/financialhighlights', 'App\Http\Controllers\CorporateController@FinancialHighlights');
  Route::get('admin/financialcomprehensive', 'App\Http\Controllers\CorporateController@FinancialComprehensive');
  Route::get('admin/financialposition', 'App\Http\Controllers\CorporateController@FinancialPosition');
  Route::get('admin/flowstatements', 'App\Http\Controllers\CorporateController@FlowStatements');
  Route::get('admin/remunerations', 'App\Http\Controllers\CorporateController@Remunerations');
  Route::post('admin/remunerationsadd', 'App\Http\Controllers\CorporateController@RemunerationsAdd');
  Route::post('admin/remunerationsdeletemultiple', 'App\Http\Controllers\CorporateController@RemunerationsDeleteMultiple');
  Route::get('admin/riskmanagement', 'App\Http\Controllers\CorporateController@RiskManagement');
  Route::post('admin/riskmanagementadd', 'App\Http\Controllers\CorporateController@RiskManagementAdd');
  Route::post('admin/riskmanagementdeletemultiple', 'App\Http\Controllers\CorporateController@RiskManagementDeleteMultiple');

  Route::get('admin/equity', 'App\Http\Controllers\CorporateController@Equity');
  Route::get('admin/financialquarterlyreport', 'App\Http\Controllers\CorporateController@FinancialQuarterlyReport');
  Route::get('admin/financialinfosegmentalanalysis', 'App\Http\Controllers\CorporateController@FinancialInfoSegmentalAnalysis');
  Route::get('admin/financialratioanalysis', 'App\Http\Controllers\CorporateController@FinancialRatioAnalysis');
  Route::get('admin/whistleblowerpolicy', 'App\Http\Controllers\CorporateController@WhistleBlowerPolicy');
  Route::get('admin/directorsfitandproperpolicy', 'App\Http\Controllers\CorporateController@DirectorsFitAndProperPolicy');
  Route::get('admin/genderdiversitypolicy', 'App\Http\Controllers\CorporateController@GenderDiversityPolicy');
  Route::get('admin/externalauditorsassessmentpolicy', 'App\Http\Controllers\CorporateController@ExternalAuditorsAssessmentPolicy');
  Route::get('admin/remunerationpolicy', 'App\Http\Controllers\CorporateController@RemunerationPolicy');
  Route::get('admin/cbce', 'App\Http\Controllers\CorporateController@Cbce');
  Route::get('admin/managementreviewoperations', 'App\Http\Controllers\CorporateController@ManagementReviewOperations');
  Route::get('admin/managementpastperformancereview', 'App\Http\Controllers\CorporateController@ManagementPastPerformanceReview');
  Route::get('admin/newscenter', 'App\Http\Controllers\CorporateController@NewsCenter');
  Route::get('admin/announcementlinks', 'App\Http\Controllers\CorporateController@AnnouncementLinks');

  //Route::get('admin/entitlement', 'App\Http\Controllers\IpoController@Entitlement');
  Route::get('admin/entitlement', 'App\Http\Controllers\CorporateController@Entitlement');
  Route::get('admin/investoralert', 'App\Http\Controllers\CorporateController@InvestorAlert');
  Route::get('admin/additionallisting', 'App\Http\Controllers\CorporateController@AdditionalListing');
  Route::get('admin/listingcircular', 'App\Http\Controllers\CorporateController@ListingCircular');
  Route::get('admin/financialresultlisting', 'App\Http\Controllers\CorporateController@FinancialResultlisting');
  Route::get('admin/financialresult', 'App\Http\Controllers\CorporateController@FinancialResult');
  Route::get('admin/generalannouncement', 'App\Http\Controllers\CorporateController@GeneralAnnouncement');
  Route::get('admin/generalmeeting', 'App\Http\Controllers\CorporateController@GeneralMeeting');
  Route::get('admin/specialannouncement', 'App\Http\Controllers\CorporateController@SpecialAnnouncement');
  Route::get('admin/directorinterest', 'App\Http\Controllers\CorporateController@DirectorInterest');
  Route::get('admin/shareholderinterest', 'App\Http\Controllers\CorporateController@ShareholderInterest');
  Route::get('admin/interestsubstanial', 'App\Http\Controllers\CorporateController@InterestSubstanial');
  Route::get('admin/personceasing', 'App\Http\Controllers\CorporateController@PersonCeasing');
  Route::get('admin/auditcommittee', 'App\Http\Controllers\CorporateController@AuditCommittee');
  Route::get('admin/nominationcommittee', 'App\Http\Controllers\CorporateController@NominationCommittee');
  Route::get('admin/remunerationcommittee', 'App\Http\Controllers\CorporateController@RemunerationCommittee');
  Route::get('admin/riskcommittee', 'App\Http\Controllers\CorporateController@RiskCommittee');
  Route::get('admin/boardroom', 'App\Http\Controllers\CorporateController@BoardRoom');
  Route::get('admin/chiefexecutive', 'App\Http\Controllers\CorporateController@ChiefExecutive');
  Route::get('admin/principalofficer', 'App\Http\Controllers\CorporateController@PrincipalOfficer');
  Route::get('admin/address', 'App\Http\Controllers\CorporateController@Address');
  Route::get('admin/companysecretary', 'App\Http\Controllers\CorporateController@CompanySecretary');
  Route::get('admin/registrar', 'App\Http\Controllers\CorporateController@Registrar');
  Route::get('admin/treasury', 'App\Http\Controllers\CorporateController@Treasury');
  Route::get('admin/shareimmediate', 'App\Http\Controllers\CorporateController@ShareImmediate');
  Route::get('admin/sharepursuant', 'App\Http\Controllers\CorporateController@SharePursuant');
  Route::get('admin/sharecompanypursuant', 'App\Http\Controllers\CorporateController@ShareCompanypursuant');


  Route::post('admin/inverstoralert/saveinverstor', 'App\Http\Controllers\CorporateController@saveInvestor');
  Route::post('admin/inverstoralert/saveAdditional', 'App\Http\Controllers\CorporateController@saveAdditional');
  Route::post('admin/inverstoralert/saveCircular', 'App\Http\Controllers\CorporateController@saveCircular');
  Route::post('admin/inverstoralert/saveFinancial', 'App\Http\Controllers\CorporateController@saveFinancial');
  Route::post('admin/inverstoralert/saveGeneralAnnouncement', 'App\Http\Controllers\CorporateController@saveGeneralAnnouncement');
  Route::get('admin/annualreports', 'App\Http\Controllers\ReportsController@AnnualReports');
  Route::post('admin/add', 'App\Http\Controllers\ReportsController@Add');
  Route::post('admin/edit', 'App\Http\Controllers\ReportsController@Edit');
  Route::post('admin/editinvestoralert', 'App\Http\Controllers\CorporateController@Editinvestoralert');
  Route::post('admin/deleteMultipleReports', 'App\Http\Controllers\ReportsController@DeleteMultipleReports');
  Route::post('admin/deleteall', 'App\Http\Controllers\ReportsController@DeleteAll');
  Route::post('admin/deleteallinvestoralert', 'App\Http\Controllers\CorporateController@DeleteAllInvestor');
  Route::post('admin/singledelete', 'App\Http\Controllers\ReportsController@SingleDelete');
  Route::post('admin/singledeleteinvestor', 'App\Http\Controllers\CorporateController@SingleDeleteInvestor');
  Route::get('admin/annualaudit', 'App\Http\Controllers\ReportsController@AnnualAudit');
  Route::get('admin/quarterlyreports', 'App\Http\Controllers\ReportsController@QuarterlyReports');
  Route::get('admin/circularreports', 'App\Http\Controllers\ReportsController@CircularReports');
  Route::get('admin/prospectusarreports', 'App\Http\Controllers\ReportsController@ProspectusarReports');
  Route::get('admin/analystreports', 'App\Http\Controllers\ReportsController@AnalystReports');
  Route::get('admin/newsalert', 'App\Http\Controllers\ReportsController@NewsAlert');

  Route::get('admin/exportsubscriver', 'App\Http\Controllers\ReportsController@export_subscriber');

  Route::post('admin/addnewsalert', 'App\Http\Controllers\ReportsController@AddNewsAlert');
  Route::post('admin/deleteMultipleNewsAlerts', 'App\Http\Controllers\ReportsController@DeleteMultipleNewsAlerts');
  Route::post('admin/deleteallnewsalerts', 'App\Http\Controllers\ReportsController@DeleteAllNewsAlerts');
  Route::post('admin/page/newsalertdeletemultiple', 'App\Http\Controllers\PageController@NewsAlertDeleteMultiple');
  Route::post('admin/editnewsalert', 'App\Http\Controllers\ReportsController@EditNewsAlert');
  Route::post('admin/newsalertsingledelete', 'App\Http\Controllers\ReportsController@NewsAlertSingleDelete');
  Route::get('admin/evencalendar', 'App\Http\Controllers\EventsController@EventsHome');
  Route::post('admin/eventadd', 'App\Http\Controllers\EventsController@Add');
  Route::post('admin/eventedit', 'App\Http\Controllers\EventsController@Edit');
  Route::post('admin/eventdeleteall', 'App\Http\Controllers\EventsController@DeleteAll');
  Route::post('admin/eventsingledelete', 'App\Http\Controllers\EventsController@SingleDelete');
  Route::post('admin/eventmultipledelete', 'App\Http\Controllers\PageController@EventsDeleteMultiple');
  Route::get('admin/priceticker', 'App\Http\Controllers\StockController@PriceTicker');
  Route::resource('admin/priceandvolume', 'App\Http\Controllers\StockController@PriceAndVolume');
  Route::get('admin/shareholding', 'App\Http\Controllers\StockController@Shareholding');
  Route::get('admin/shareholderslist', 'App\Http\Controllers\StockController@ShareholdersList');
  Route::get('admin/topshareholders', 'App\Http\Controllers\StockController@TopShareholders');
  Route::post('admin/addtopshareholders', 'App\Http\Controllers\StockController@AddTopShareholders');
  Route::post('admin/edittopshareholders', 'App\Http\Controllers\StockController@EditTopShareholders');
  Route::post('admin/deletealltopshareholders', 'App\Http\Controllers\StockController@DeleteAllTopShareholders');
  Route::post('admin/singledeletetopshareholders', 'App\Http\Controllers\StockController@SingleDeleteTopShareholders');
  Route::post('admin/page/shareholdersdeletemultiple', 'App\Http\Controllers\PageController@ShareHoldersDeleteMultiple');
  /////////////////////////////////////////
  Route::post('admin/deleteallusers', 'App\Http\Controllers\UserController@userDeleteAll');
  Route::post('admin/deletesingleuser', 'App\Http\Controllers\UserController@adminDeleteUser');
  Route::get('admin/dashboard', 'App\Http\Controllers\AdminController@dashboard');
  Route::get('admin/index', 'App\Http\Controllers\AdminController@adminindex');
  Route::get('admin/vaccancies', 'App\Http\Controllers\Career1Controller@vaccancyIndex');
  Route::get('admin/applicants', 'App\Http\Controllers\Career1Controller@applicantsListing');
  Route::get('admin/manufacturing/packaging/canpac', 'App\Http\Controllers\ManufacturingController@packagingCanpac');
  Route::get('admin/manufacturing/packaging/southeast', 'App\Http\Controllers\ManufacturingController@packagingSoutheast');
  Route::get('admin/manufacturing/palmoil/refinery', 'App\Http\Controllers\ManufacturingController@palmoilRefinery');
  Route::get('admin/manufacturing/palmoil/mill', 'App\Http\Controllers\ManufacturingController@palmoilMill');
  Route::get('admin/trading/yeelee', 'App\Http\Controllers\TradingController@tradingAdminYelee');
  Route::post('admin/trading/admindeletebanner', 'App\Http\Controllers\TradingController@adminDeleteBanner');
  Route::post('admin/trading/admindeletebrand', 'App\Http\Controllers\TradingController@adminDeleteBrand');
  Route::post('admin/trading/admindeleteallbanner', 'App\Http\Controllers\TradingController@adminDeleteAllBanner');
  Route::post('admin/trading/admindeleteallbrands', 'App\Http\Controllers\TradingController@adminDeleteAllBrands');
  Route::get('admin/investor/pressrelease', 'App\Http\Controllers\PressreleaseController@adminPressrelease');
  Route::post('admin/index/addbanner', 'App\Http\Controllers\AdminController@addBanner');
  Route::post('admin/index/editbanner', 'App\Http\Controllers\AdminController@editBanner');
  Route::post('admin/index/deletebanner', 'App\Http\Controllers\AdminController@deleteBanner');
  Route::post('admin/index/addcorebusiness', 'App\Http\Controllers\AdminController@addCorebusiness');
  Route::post('admin/index/editcorebusiness', 'App\Http\Controllers\AdminController@editCorebusiness');
  Route::post('admin/index/deletecorebusiness', 'App\Http\Controllers\AdminController@deleteCorebusiness');
  Route::post('admin/manufacturing/addslidingbanner', 'App\Http\Controllers\ManufacturingController@addSlidingBanner');
  Route::post('admin/manufacturing/editslidingbanner', 'App\Http\Controllers\ManufacturingController@editSlidingBanner');

  Route::post('admin/applicants/deleteapplication', 'App\Http\Controllers\Career1Controller@deleteApplication');
  Route::post('admin/trading/addslidingbanner', 'App\Http\Controllers\TradingController@addSlidingBanner');
  Route::post('admin/trading/editslidingbanner', 'App\Http\Controllers\TradingController@editSlidingBanner');
  Route::post('admin/trading/addbrands', 'App\Http\Controllers\TradingController@addBrands');
  Route::post('admin/trading/editbrands', 'App\Http\Controllers\TradingController@editBrands');

  Route::post('admin/manufacturing/addprocesseslisting', 'App\Http\Controllers\ManufacturingController@addProcesssListings');
  Route::post('admin/manufacturing/editprocesseslisting', 'App\Http\Controllers\ManufacturingController@editProcesssListings');
  Route::post('admin/manufacturing/deleteprocesseslisting', 'App\Http\Controllers\ManufacturingController@deleteProcesslisting');
  Route::post('admin/manufacturing/deleteslidingbanner', 'App\Http\Controllers\ManufacturingController@deleteSlidingbanner');
  Route::post('admin/manufacturing/deleteallbanner', 'App\Http\Controllers\ManufacturingController@deleteAllBanner');
  Route::post('admin/manufacturing/deleteallprocess', 'App\Http\Controllers\ManufacturingController@deleteAllProcess');

  Route::post('admin/manufacturing/deleteallsoutheastbanner', 'App\Http\Controllers\ManufacturingController@deleteAllSoutheastBanner');
  Route::post('admin/manufacturing/deleteallsoutheastprocess', 'App\Http\Controllers\ManufacturingController@deleteAllSoutheastProcess');

  Route::post('admin/vaccancy/addvaccancy', 'App\Http\Controllers\Career1Controller@addVaccancy');
  Route::post('admin/vaccancy/editvaccancy', 'App\Http\Controllers\Career1Controller@editVaccancy');
  Route::post('admin/vaccancy/deletevaccancy', 'App\Http\Controllers\Career1Controller@deleteVaccancy');
  Route::post('admin/page/savepage', 'App\Http\Controllers\PageController@savePage');

  Route::post('admin/page/deletemultipleuserlist', 'App\Http\Controllers\PageController@adminDeleteMultipleUserlist');
  Route::post('admin/page/deletemultiplefeedback', 'App\Http\Controllers\PageController@adminDeleteMultipleFeedback');
  Route::post('admin/page/deletemultiplebrandlisting', 'App\Http\Controllers\PageController@adminDeleteMultipleBrandlisting');
  Route::post('admin/page/deletemultipleannual', 'App\Http\Controllers\PageController@adminDeleteMultipleAnnual');
  Route::post('admin/page/deletemultiplepressrelease', 'App\Http\Controllers\PageController@adminDeleteMultiplePressrelease');
  Route::post('admin/page/deletemultipleapplicants', 'App\Http\Controllers\PageController@adminDeleteMultipleApplicants');
  Route::post('admin/page/deletemultiplevaccancies', 'App\Http\Controllers\PageController@adminDeleteMultipleVaccancies');
  Route::post('admin/page/deletemultiplecorebusinesses', 'App\Http\Controllers\PageController@adminDeleteMultipleIndexCorebusinesses');
  Route::post('admin/page/deletemultipleindexbanner', 'App\Http\Controllers\PageController@adminDeleteMultipleIndexBanner');
  Route::post('admin/page/deletemultiplebanner', 'App\Http\Controllers\PageController@adminDeleteMultipleBanner');
  Route::post('admin/page/deletemultipleprocesses', 'App\Http\Controllers\PageController@adminDeleteMultipleProcesses');
  Route::post('admin/investor/addpressrelease', 'App\Http\Controllers\PressreleaseController@addPressrelease');
  Route::post('admin/investor/deletepressrelease', 'App\Http\Controllers\PressreleaseController@deletePressrelease');
  Route::post('admin/investor/deleteallpressrelease', 'App\Http\Controllers\PressreleaseController@deleteAllPressrelease');
  Route::post('admin/investor/editpressrelease', 'App\Http\Controllers\PressreleaseController@editPressrelease');
  Route::post('admin/investor/editpage', 'App\Http\Controllers\PressreleaseController@editPage');
  Route::get('admin/contacts/feedbacks', 'App\Http\Controllers\ContactController@adminFeedback');
  Route::get('admin/contacts/contactus', 'App\Http\Controllers\ContactController@adminContactus');
  Route::post('admin/contacts/deletefeedback', 'App\Http\Controllers\ContactController@adminDeleteFeedback');
  Route::post('admin/contacts/deleteallfeedback', 'App\Http\Controllers\ContactController@adminDeleteAllFeedback');
  // enquiry category set up
  Route::get('admin/enquiry_category', 'App\Http\Controllers\EnquirycategoryController@listing');
  Route::post('admin/enquiry_category/addcategory', 'App\Http\Controllers\EnquirycategoryController@addEnquirycategory');
  Route::post('admin/enquiry_category/addsubcategory', 'App\Http\Controllers\EnquirycategoryController@addEnquirysubcategory');
  Route::post('admin/enquiry_category/editcategory', 'App\Http\Controllers\EnquirycategoryController@editEnquirycategory');
  Route::post('admin/enquiry_category/editsubcategory', 'App\Http\Controllers\EnquirycategoryController@editEnquirysubcategory');
  Route::post('admin/enquiry_category/deletecategory', 'App\Http\Controllers\EnquirycategoryController@deleteEnquirycategory');
  Route::post('admin/enquiry_category/deletesubcategory', 'App\Http\Controllers\EnquirycategoryController@deleteEnquirysubcategory');

  // enquiry email setup
  Route::get('admin/enquiry_email', 'App\Http\Controllers\EnquiryemailController@listing');
  Route::post('admin/enquiry_email/addemail', 'App\Http\Controllers\EnquiryemailController@addEnquiryemail');
  Route::get('admin/enquiry_email/getsubcategory/{id}', 'App\Http\Controllers\EnquiryemailController@getSubcategory');
  Route::post('admin/enquiry_email/editemail', 'App\Http\Controllers\EnquiryemailController@editEnquiryemail');
  Route::post('admin/enquiry_email/deleteemail', 'App\Http\Controllers\EnquiryemailController@deleteEnquiryemail');
  Route::get('admin/plantation/sementra', 'App\Http\Controllers\PlantationController@adminSementra');
  Route::post('admin/plantation/addsementra', 'App\Http\Controllers\PlantationController@adminAddSementra');
  Route::post('admin/plantation/editsementra', 'App\Http\Controllers\PlantationController@adminEditSementra');
  Route::post('admin/plantation/deletesementra', 'App\Http\Controllers\PlantationController@adminDeleteSementra');
  Route::post('admin/plantation/deleteallsementra', 'App\Http\Controllers\PlantationController@adminDeleteAllSementra');
  Route::post('admin/plantation/addprocesses', 'App\Http\Controllers\PlantationController@adminAddProcesses');
  Route::post('admin/plantation/editprocesses', 'App\Http\Controllers\PlantationController@adminEditProcesses');
  Route::post('admin/plantation/deleteprocesses', 'App\Http\Controllers\PlantationController@adminDeleteProcesses');
  Route::post('admin/plantation/deleteallprocesses', 'App\Http\Controllers\PlantationController@adminDeleteAllProcesses');
  Route::get('admin/teaplantation/teaplantation', 'App\Http\Controllers\TeaplantationController@adminTeaplantation');
  Route::post('admin/teaplantation/addbanner', 'App\Http\Controllers\TeaplantationController@adminAddBanner');
  Route::post('admin/teaplantation/editbanner', 'App\Http\Controllers\TeaplantationController@adminEditBanner');
  Route::post('admin/teaplantation/deletebanner', 'App\Http\Controllers\TeaplantationController@adminDeleteBanner');
  Route::post('admin/teaplantation/deleteallbanner', 'App\Http\Controllers\TeaplantationController@adminDeleteAllBanner');
  Route::post('admin/teaplantation/addprocesses', 'App\Http\Controllers\TeaplantationController@adminAddProcesses');
  Route::post('admin/teaplantation/editprocesses', 'App\Http\Controllers\TeaplantationController@adminEditProcesses');
  Route::post('admin/teaplantation/deleteprocesses', 'App\Http\Controllers\TeaplantationController@adminDeleteProcesses');
  Route::post('admin/teaplantation/deleteallprocesses', 'App\Http\Controllers\TeaplantationController@adminDeleteAllProcesses');

  Route::get('admin/hospitality/hospitality', 'App\Http\Controllers\HospitalityController@adminHospitality');
  Route::post('admin/hospitality/addbanner', 'App\Http\Controllers\HospitalityController@adminAddBanner');
  Route::post('admin/hospitality/editbanner', 'App\Http\Controllers\HospitalityController@adminEditBanner');
  Route::post('admin/hospitality/deletebanner', 'App\Http\Controllers\HospitalityController@adminDeleteBanner');
  Route::post('admin/hospitality/deleteallbanner', 'App\Http\Controllers\HospitalityController@adminDeleteAllBanner');
  Route::post('admin/hospitality/addprocesses', 'App\Http\Controllers\HospitalityController@adminAddProcesses');
  Route::post('admin/hospitality/editprocesses', 'App\Http\Controllers\HospitalityController@adminEditProcesses');
  Route::post('admin/hospitality/deleteprocesses', 'App\Http\Controllers\HospitalityController@adminDeleteProcesses');
  Route::post('admin/hospitality/deleteallprocesses', 'App\Http\Controllers\HospitalityController@adminDeleteAllProcesses');

  Route::get('admin/annual/reports', 'App\Http\Controllers\AnnualreportController@adminAnnualreport');

  Route::post('admin/annual/addreports', 'App\Http\Controllers\AnnualreportController@adminAddReports');
  Route::post('admin/annual/editreports', 'App\Http\Controllers\AnnualreportController@adminEditReports');
  Route::post('admin/annual/deletereports', 'App\Http\Controllers\AnnualreportController@adminDeleteReports');
  Route::post('admin/annual/deleteallreports', 'App\Http\Controllers\AnnualreportController@adminDeleteAllReports');
  Route::get('admin/company/announcements', 'App\Http\Controllers\AnnouncementController@adminAnnouncement');


  Route::post('admin/updatepriceticker', 'App\Http\Controllers\AdminController@updatePriceTicker');
  Route::post('admin/updateorder', 'App\Http\Controllers\AdminController@updateOrder');
  Route::resource('admin/irhome', 'App\Http\Controllers\AdminController@adminIRHome');
});


// Sustainable Routers
Route::get('/sustainability/palm-oil-policy', 'App\Http\Controllers\SustainabilityController@front_sust_palm_oil');
Route::get('/sustainability/Environmental-protection-biological-diversity-policy', 'App\Http\Controllers\SustainabilityController@front_sust_protection_biological');
Route::get('/sustainability/equality-gender-policy', 'App\Http\Controllers\SustainabilityController@front_sust_equality_gender');
Route::get('/sustainability/food-safety-policy', 'App\Http\Controllers\SustainabilityController@front_sust_food_safety');
Route::get('/sustainability/quality-policy', 'App\Http\Controllers\SustainabilityController@front_sust_quality');
Route::get('/sustainability/safety-health-policy', 'App\Http\Controllers\SustainabilityController@front_sust_safety_health');
Route::get('/sustainability/safety-policy', 'App\Http\Controllers\SustainabilityController@front_sust_safety');
Route::get('/sustainability/slope-river-protection-policy', 'App\Http\Controllers\SustainabilityController@front_sust_slop_river');
Route::get('/sustainability/certification-policy', 'App\Http\Controllers\SustainabilityController@front_sust_certification');
Route::get('/sustainability/social-policy', 'App\Http\Controllers\SustainabilityController@front_sust_social');
Route::resource('/sustainability/board-nomination-committe', 'App\Http\Controllers\SustainabilityController@front_tor_board_nomination');
Route::resource('/sustainability/tor-audit-management-committee', 'App\Http\Controllers\SustainabilityController@front_tor_audit_management');
Route::resource('/sustainability/tor-risk-management-committee', 'App\Http\Controllers\SustainabilityController@front_tor_risk_management');


Route::post('/sustainability/frontCangingPDF', 'App\Http\Controllers\SustainabilityController@frontCangingPDF');




Route::get('/', 'App\Http\Controllers\HomeController@showIndex');
Route::get('admin/login', 'App\Http\Controllers\AdminController@showLogin');
Route::post('updatepricetickerfront', 'App\Http\Controllers\AdminController@updatePriceTicker');

Route::get('admin/logout', 'App\Http\Controllers\AdminController@handleLogout');
Route::post('admin/login', array('as' => 'login', 'uses' => 'App\Http\Controllers\AdminController@handleLogin'));
Route::get('/forgotpassword', 'App\Http\Controllers\AdminController@forgotPassword');
Route::post('user/store', 'App\Http\Controllers\UserController@store');
Route::post('user/update', 'App\Http\Controllers\UserController@update');
Route::post('admin/users/saveuser', 'App\Http\Controllers\UserController@saveUser');
Route::post('admin/users/updateuser', 'App\Http\Controllers\UserController@updateUser');
Route::post('admin/users/changepassword', 'App\Http\Controllers\UserController@changepassword');



Route::post('company/careers/submitapp', 'App\Http\Controllers\Career1Controller@submitApp');

Route::post('contacts/feedback/submitfeedback', 'App\Http\Controllers\ContactController@submitFeedback');
Route::get('contacts/getsubcategory/{id}', 'App\Http\Controllers\ContactController@getSubcategory');

/* Front Routers */
Route::get('manufacturing/packaging/canpac', 'App\Http\Controllers\ManufacturingController@packagingFrontCanpac');
Route::get('manufacturing/packaging/southeast', 'App\Http\Controllers\ManufacturingController@packagingFrontSoutheast');
Route::get('manufacturing/palmoil/refinery', 'App\Http\Controllers\ManufacturingController@palmoilFrontRefinery');
Route::get('manufacturing/palmoil/mill', 'App\Http\Controllers\ManufacturingController@palmoilFrontMill');

Route::get('company/careers', 'App\Http\Controllers\Career1Controller@frontCareer');
Route::post('company/searchcareers', 'App\Http\Controllers\Career1Controller@frontsearchCareer');
Route::get('company/careers/apply/{vaccancy_id}', 'App\Http\Controllers\Career1Controller@showApplyForm');
Route::get('trading/tradingdivision/yelee', 'App\Http\Controllers\TradingController@tradingFrontYelee');
Route::get('contacts/feedback', 'App\Http\Controllers\ContactController@feedbackFront');
Route::get('contacts/contactus', 'App\Http\Controllers\ContactController@contactusFront');


/* End of Front Routers */
/* Investor Relations Front */
Route::get('regionaloffices', 'App\Http\Controllers\ContactController@regionaloffices');
Route::resource('contactsubmit', 'App\Http\Controllers\ContactController@contactsubmit'); //addToFeedbackList
Route::resource('contactus', 'App\Http\Controllers\ContactController@contactusFront');

Route::get('investorrelations/newscentre/bursaannouncementsduplicate', [
  'as'   => 'frontBursaAnnounceListduplicate',
  'uses' => 'App\Http\Controllers\CorporateController@frontBursaAnnounceListduplicate'
]);

Route::resource('investorrelations/newscentre/bursaannouncements', 'App\Http\Controllers\CorporateController@frontBursaAnnounceList');
Route::get('investorrelations/newscentre/bursaannouncements/{announce_id?}', 'App\Http\Controllers\CorporateController@frontBursaAnnouncement');
Route::resource('investorrelations/shareinformation/topshareholders', 'App\Http\Controllers\StockController@frontTopShareholders');
Route::get('investorrelations/shareinformation/shareholdingsanalysis', 'App\Http\Controllers\StockController@frontShareholding');
Route::resource('investorrelations/shareinformation/pricevolume', 'App\Http\Controllers\StockController@frontPriceAndVolume');
Route::get('investorrelations/shareinformation/priceticker', 'App\Http\Controllers\StockController@frontpriceticker');
Route::resource('investorrelations/reports/prospectus', 'App\Http\Controllers\ReportsController@frontProspectusarReports');
Route::resource('investorrelations/reports/circulars', 'App\Http\Controllers\ReportsController@frontCircularReports');
Route::get('investorrelations/reports/analystreports', 'App\Http\Controllers\ReportsController@frontAnalystReports');
Route::get('investorrelations/reports/quarterlyreports', 'App\Http\Controllers\ReportsController@frontQuarterlyReports');
Route::resource('investorrelations/reports/annualauditedaccounts', 'App\Http\Controllers\ReportsController@frontAnnualAudit');
Route::get('investorrelations/reports/annualreports', 'App\Http\Controllers\ReportsController@frontAnnualReports');
Route::resource('investorrelations/eventcalendar', 'App\Http\Controllers\EventsController@frontEventsHome');
Route::post('investorrelations/investortools/newsalertsunsubscribesubmit', 'App\Http\Controllers\ReportsController@UnSubscribeNewsAlertSubmit');
Route::post('investorrelations/investortools/newsalertssubscribesubmit', 'App\Http\Controllers\ReportsController@SubscribeNewsAlertSubmit');
Route::resource('investorrelations/investortools/newsalertsunsubscribe', 'App\Http\Controllers\ReportsController@frontNewsAlertUnsubscribe');
Route::resource('investorrelations/investortools/newsalerts', 'App\Http\Controllers\ReportsController@frontNewsAlert');
Route::resource('investorrelations/investortools/calculator', 'App\Http\Controllers\ReportsController@frontPriceGainCalculator');
Route::resource('investorrelations/managementanalysis/pastperformance', 'App\Http\Controllers\CorporateController@frontManagementPastPerformanceReview');
Route::resource('investorrelations/managementanalysis/reviewoperations', 'App\Http\Controllers\CorporateController@frontManagementReviewOperations');
Route::resource('investorrelations/managementanalysis/whistleblowerpolicy', 'App\Http\Controllers\CorporateController@frontWhistleBlowerPolicy');
Route::resource('investorrelations/managementanalysis/directorsfitandproperpolicy', 'App\Http\Controllers\CorporateController@frontDirectorsFitAndProperPolicy');
Route::resource('investorrelations/managementanalysis/genderdiversitypolicy', 'App\Http\Controllers\CorporateController@frontGenderDiversityPolicy');
Route::resource('investorrelations/managementanalysis/remunerationpolicy', 'App\Http\Controllers\CorporateController@frontRemunerationPolicy');
Route::resource('investorrelations/managementanalysis/externalauditorsassessmentpolicy', 'App\Http\Controllers\CorporateController@frontExternalAuditorsAssessmentPolicy');
Route::resource('investorrelations/managementanalysis/cbce', 'App\Http\Controllers\CorporateController@frontCbce');

Route::get('investorrelations/financialinformation/financialhighlights', 'App\Http\Controllers\CorporateController@frontFinancialHighlights');
Route::resource('investorrelations/financialinformation/comprehensiveincome', 'App\Http\Controllers\CorporateController@frontFinancialComprehensive');
Route::resource('investorrelations/financialinformation/financialposition', 'App\Http\Controllers\CorporateController@frontFinancialPosition');
Route::resource('investorrelations/financialinformation/cashflowstatement', 'App\Http\Controllers\CorporateController@frontFinancialFlowStatements');
Route::resource('investorrelations/financialinformation/equitychanges', 'App\Http\Controllers\CorporateController@frontFinancialEquity');
Route::resource('investorrelations/financialinformation/latestreport', 'App\Http\Controllers\CorporateController@frontLatestReport');
Route::resource('investorrelations/financialinformation/segmentalanalysis', 'App\Http\Controllers\CorporateController@frontFinancialSegmentalAnalysis');
Route::resource('investorrelations/financialinformation/ratioanalysis', 'App\Http\Controllers\CorporateController@frontFinancialRatioAnalysis');
Route::get('investorrelations/entitlementdetail', 'App\Http\Controllers\CorporateController@frontEntitlementDetail');
Route::get('investorrelations/entitlements', 'App\Http\Controllers\IpoController@frontEntitlements');
Route::resource('investorrelations/financialinformation/remuneration_committee', 'App\Http\Controllers\CorporateController@BoardRemunationCommittee');
Route::resource('investorrelations/financialinformation/risk_management_committee', 'App\Http\Controllers\CorporateController@RiskManagementCommittee');


/* Route::get('investorrelations/frontentitlement', 'App\Http\Controllers\IpoController@frontEntitlement');
Route::get('investorrelations/frontentitlementdetail', 'App\Http\Controllers\IpoController@frontEntitlementDetail');
Route::get('investorrelations/frontinvestoralert', 'App\Http\Controllers\IpoController@frontInvestorAlert');
Route::post('investorrelations/frontinvestoralert', 'App\Http\Controllers\IpoController@frontInvestorAlert');
Route::get('investorrelations/frontadditionallisting', 'App\Http\Controllers\IpoController@frontAdditionallisting');
Route::get('investorrelations/frontadditionallistingdetail/{listing_id}', 'App\Http\Controllers\IpoController@frontAdditionallistingdetail');
Route::get('investorrelations/auditcommittee', 'App\Http\Controllers\IpoController@auditcommittee');
Route::get('investorrelations/auditcommitteedetail', 'App\Http\Controllers\IpoController@auditcommitteedetail');
Route::get('investorrelations/boardroom', 'App\Http\Controllers\IpoController@boardroom');
Route::get('investorrelations/boardroomdetail', 'App\Http\Controllers\IpoController@boardroomdetail');
Route::get('investorrelations/chiefexecutiveofficer', 'App\Http\Controllers\IpoController@chiefexecutiveofficer');
Route::get('investorrelations/principalofficer', 'App\Http\Controllers\IpoController@principalofficer');
Route::get('investorrelations/principalofficerdetail', 'App\Http\Controllers\IpoController@principalofficerdetail');
Route::get('investorrelations/addresslisting', 'App\Http\Controllers\IpoController@addresslisting');
Route::get('investorrelations/addressdetail', 'App\Http\Controllers\IpoController@addressdetail');
Route::get('investorrelations/compsectretarylisting', 'App\Http\Controllers\IpoController@compsectretarylisting');
Route::get('investorrelations/registrarlist', 'App\Http\Controllers\IpoController@registrarlist');
Route::get('investorrelations/registrardetail', 'App\Http\Controllers\IpoController@registrardetail');
Route::get('investorrelations/resale', 'App\Http\Controllers\IpoController@resale');
Route::get('investorrelations/immediateannouncement', 'App\Http\Controllers\IpoController@immediateannouncement');
Route::get('investorrelations/companypursuant', 'App\Http\Controllers\IpoController@companypursuant');
Route::get('investorrelations/sharecompanypursuant', 'App\Http\Controllers\IpoController@sharecompanypursuant');

Route::get('investorrelations/frontlistingcircular', 'App\Http\Controllers\IpoController@frontlistingcircular');
Route::get('investorrelations/frontlistingcirculardetail', 'App\Http\Controllers\IpoController@frontlistingcirculardetail');
Route::get('investorrelations/fronttradingright', 'App\Http\Controllers\IpoController@frontTradingright');
Route::get('investorrelations/frontfinanciallisting', 'App\Http\Controllers\IpoController@frontfinanciallisting');
Route::get('investorrelations/frontfinanciallistingdetail', 'App\Http\Controllers\IpoController@frontfinanciallistingdetail');
Route::get('investorrelations/frontgeneralannouncementlisting', 'App\Http\Controllers\IpoController@frontgeneralannouncementlisting');
Route::get('investorrelations/frontgeneralannouncementdetail', 'App\Http\Controllers\IpoController@frontgeneralannouncementdetail');
Route::get('investorrelations/frontgeneralmeetinglisting', 'App\Http\Controllers\IpoController@frontgeneralmeetinglisting');
Route::get('investorrelations/frontgeneralmeetingdetail', 'App\Http\Controllers\IpoController@frontgeneralmeetingdetail');
Route::get('investorrelations/frontspecialannouncementlisting', 'App\Http\Controllers\IpoController@frontspecialannouncementlisting');
Route::get('investorrelations/frontspecialannouncementdetail', 'App\Http\Controllers\IpoController@frontspecialannouncementdetail');
Route::get('investorrelations/directorinterestdetail', 'App\Http\Controllers\IpoController@frontdirectorinterestdetail');
Route::get('investorrelations/directorinterest', 'App\Http\Controllers\IpoController@frontdirectorinterest');
Route::get('investorrelations/shareholderinterest', 'App\Http\Controllers\IpoController@frontshareholderinterest');
Route::get('investorrelations/shareholderdetail', 'App\Http\Controllers\IpoController@frontshareholderdetail');
Route::get('investorrelations/interestshareholderlist', 'App\Http\Controllers\IpoController@frontinterestshareholderlist');
Route::get('investorrelations/interestshareholderdetail', 'App\Http\Controllers\IpoController@frontinterestshareholderdetail');
Route::get('investorrelations/personceasing', 'App\Http\Controllers\IpoController@frontpersonceasing'); */


Route::get('investorrelations/chiefexecutiveofficer', 'App\Http\Controllers\IpoController@chiefexecutiveofficer');
Route::get('investorrelations/chiefexecutiveofficerdetail/{announce_id}', 'App\Http\Controllers\IpoController@chiefexecutiveofficerdetail');
Route::get('investorrelations/principalofficer', 'App\Http\Controllers\IpoController@principalofficer');
Route::get('investorrelations/principalofficerdetail/{announce_id}', 'App\Http\Controllers\IpoController@principalofficerdetail');
Route::get('investorrelations/frontentitlement', 'App\Http\Controllers\IpoController@frontEntitlement');
Route::get('investorrelations/frontentitlementdetail/{listing_id}', 'App\Http\Controllers\IpoController@frontEntitlementDetail');
Route::get('investorrelations/frontinvestoralert', 'App\Http\Controllers\IpoController@frontInvestorAlert');
Route::get('investorrelations/frontinvestoralertdetail/{listing_id}', 'App\Http\Controllers\IpoController@frontInvestorAlertDetail');
Route::get('investorrelations/frontadditionallisting', 'App\Http\Controllers\IpoController@frontAdditionallisting');
Route::get('investorrelations/frontadditionallistingdetail/{listing_id}', 'App\Http\Controllers\IpoController@frontAdditionallistingdetail');
//Route::get('investorrelations/frontadditionallistingsubdivision', 'App\Http\Controllers\IpoController@frontAdditionallistingsubdivision');
//Route::get('investorrelations/frontadditionallistingsubdivisiondetail/{listing_id}', 'App\Http\Controllers\IpoController@frontAdditionallistingsubdivisiondetail');
Route::get('investorrelations/auditcommittee', 'App\Http\Controllers\IpoController@auditcommittee');
Route::get('investorrelations/auditcommitteedetail/{announce_id}', 'App\Http\Controllers\IpoController@auditcommitteedetail');

Route::get('investorrelations/riskcommittee', 'App\Http\Controllers\IpoController@riskcommittee');
Route::get('investorrelations/riskcommitteedetail/{announce_id}', 'App\Http\Controllers\IpoController@riskcommitteedetail');
Route::get('investorrelations/remunerationcommittee', 'App\Http\Controllers\IpoController@remunerationcommittee');
Route::get('investorrelations/remunerationcommitteedetail/{announce_id}', 'App\Http\Controllers\IpoController@remunerationcommitteedetail');

Route::get('investorrelations/nominationcommittee', 'App\Http\Controllers\IpoController@nominationcommittee');
Route::get('investorrelations/nominationcommitteedetail/{announce_id}', 'App\Http\Controllers\IpoController@nominationcommitteedetail');
Route::get('investorrelations/boardroom', 'App\Http\Controllers\IpoController@boardroom');
Route::get('investorrelations/boardroomdetail/{announce_id}', 'App\Http\Controllers\IpoController@boardroomdetail');
Route::get('investorrelations/compsectretarylisting', 'App\Http\Controllers\IpoController@compsectretarylisting');
Route::get('investorrelations/compsectretarydetail/{announce_id}', 'App\Http\Controllers\IpoController@compsectretarydetail');
Route::get('investorrelations/registrarlist', 'App\Http\Controllers\IpoController@registrarlist');
Route::get('investorrelations/registrardetail/{announce_id}', 'App\Http\Controllers\IpoController@registrardetail');
Route::get('investorrelations/resale', 'App\Http\Controllers\IpoController@resale');
Route::get('investorrelations/resaledetail/{announce_id}', 'App\Http\Controllers\IpoController@resaledetail');
Route::get('investorrelations/immediateannouncement', 'App\Http\Controllers\IpoController@immediateannouncement');
Route::get('investorrelations/immediateannouncementdetail/{announce_id}', 'App\Http\Controllers\IpoController@immediateannouncementdetail');
Route::get('investorrelations/companypursuant', 'App\Http\Controllers\IpoController@companypursuant');
Route::get('investorrelations/companypursuantdetail/{announce_id}', 'App\Http\Controllers\IpoController@companypursuantdetail');
Route::get('investorrelations/sharecompanypursuant', 'App\Http\Controllers\IpoController@sharecompanypursuant');
Route::get('investorrelations/sharecompanypursuantdetail/{announce_id}', 'App\Http\Controllers\IpoController@sharecompanypursuantdetail');
Route::get('investorrelations/frontlistingcircular', 'App\Http\Controllers\IpoController@frontlistingcircular');
Route::get('investorrelations/frontlistingcirculardetail/{announce_id}', 'App\Http\Controllers\IpoController@frontlistingcirculardetail');
Route::get('investorrelations/fronttradingright', 'App\Http\Controllers\IpoController@frontTradingright');
Route::get('investorrelations/fronttradingrightdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontTradingrightDetail');
Route::get('investorrelations/frontfinanciallisting', 'App\Http\Controllers\IpoController@frontfinanciallisting');
Route::get('investorrelations/frontfinanciallistingdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontfinanciallistingdetail');
Route::get('investorrelations/frontgeneralannouncementlisting', 'App\Http\Controllers\IpoController@frontgeneralannouncementlisting');
Route::get('investorrelations/frontgeneralannouncementdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontgeneralannouncementdetail');
Route::get('investorrelations/frontgeneralmeetinglisting', 'App\Http\Controllers\IpoController@frontgeneralmeetinglisting');
Route::get('investorrelations/frontgeneralmeetingdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontgeneralmeetingdetail');
Route::get('investorrelations/frontspecialannouncementlisting', 'App\Http\Controllers\IpoController@frontspecialannouncementlisting');
Route::get('investorrelations/frontspecialannouncementdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontspecialannouncementdetail');
Route::get('investorrelations/directorinterestdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontdirectorinterestdetail');
Route::get('investorrelations/directorinterest', 'App\Http\Controllers\IpoController@frontdirectorinterest');
Route::get('investorrelations/shareholderinterest', 'App\Http\Controllers\IpoController@frontshareholderinterest');
Route::get('investorrelations/shareholderdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontshareholderdetail');
Route::get('investorrelations/interestshareholderlist', 'App\Http\Controllers\IpoController@frontinterestshareholderlist');
Route::get('investorrelations/interestshareholderdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontinterestshareholderdetail');
Route::get('investorrelations/interestshareholderlistsection138', 'App\Http\Controllers\IpoController@frontinterestshareholderlistsection138');
Route::get('investorrelations/interestshareholdersection138detail/{announce_id}', 'App\Http\Controllers\IpoController@frontinterestshareholdersection138detail');
Route::get('investorrelations/interestshareholderlistsection137', 'App\Http\Controllers\IpoController@frontinterestshareholderlistsection137');
Route::get('investorrelations/interestshareholdersection137detail/{announce_id}', 'App\Http\Controllers\IpoController@frontinterestshareholdersection137detail');
Route::get('investorrelations/personceasing', 'App\Http\Controllers\IpoController@frontpersonceasing');
Route::get('investorrelations/personceasingdetail/{announce_id}', 'App\Http\Controllers\IpoController@frontpersonceasingdetail');
Route::get('investorrelations/addresslisting', 'App\Http\Controllers\IpoController@addresslisting');
Route::get('investorrelations/addressdetail/{announce_id}', 'App\Http\Controllers\IpoController@addressdetail');


Route::get('cron/crawlAnnouncement', 'App\Http\Controllers\AnnouncementController@crawlAnnouncement');

/* Announcements */
Route::post('admin/newscenter/saveannouncements', 'App\Http\Controllers\CorporateController@addAnnouncements');
Route::post('admin/newscenter/editannouncements', 'App\Http\Controllers\CorporateController@editAnnouncements');
Route::post('admin/newscenter/deleteannouncement', 'App\Http\Controllers\CorporateController@deleteAnnouncement');
Route::post('admin/newscenter/deletemultipleannouncement', 'App\Http\Controllers\CorporateController@deleteMultipleAnnouncement');
Route::post('admin/newscenter/deleteallannouncement', 'App\Http\Controllers\CorporateController@deleteAllAnnouncement');



/* Announcements Links */
Route::post('admin/newscenter/saveannouncementlink', 'App\Http\Controllers\AnnouncementLinkController@addAnnouncementLink');
Route::post('admin/newscenter/editannouncementlink', 'App\Http\Controllers\AnnouncementLinkController@updateAnnouncementLink');
Route::post('admin/newscenter/deletelink', 'App\Http\Controllers\AnnouncementLinkController@deleteAnnouncementLink');
Route::post('admin/newscenter/deletemultiplelink', 'App\Http\Controllers\AnnouncementLinkController@deleteMultipleAnnouncementLinks');
Route::post('admin/newscenter/deleteallannouncementlinks', 'App\Http\Controllers\AnnouncementLinkController@deleteAllAnnouncementlinks');

Route::get('investorrelations/ipocentre/industryoverview', 'App\Http\Controllers\IpoController@frontIpoIndustryOverview');
Route::get('investorrelations/ipocentre/utilizationproceeds', 'App\Http\Controllers\IpoController@frontIpoUtilisationProceeds');
Route::get('investorrelations/ipocentre/riskfactors', 'App\Http\Controllers\IpoController@frontIpoRiskFactors');
Route::get('investorrelations/ipocentre/competitiveadvantages', 'App\Http\Controllers\IpoController@frontIpoCompetitiveAdvantage');
Route::get('investorrelations/ipocentre/ipostatistics', 'App\Http\Controllers\IpoController@frontIpoStatistics');
Route::resource('investorrelations/corporategovernance', 'App\Http\Controllers\CorporateController@frontCorpGovernance');
Route::resource('investorrelations/corporateinformation/oursubsidiaries', 'App\Http\Controllers\CorporateController@frontOurSubsidiaries');
Route::resource('investorrelations/corporateinformation/ourproperties', 'App\Http\Controllers\CorporateController@frontOurProperties');
Route::get('investorrelations/corporateinformation/keymanagemnet', 'App\Http\Controllers\CorporateController@frontKeyManagemenProfile');
Route::resource('investorrelations/corporateinformation/directorprofile', 'App\Http\Controllers\CorporateController@frontDirProfile');
Route::get('investorrelations/corporateinformation/general', 'App\Http\Controllers\CorporateController@frontGeneral');
/* End of Investor Relations Front */

Route::get('investorrelations/announcements', 'App\Http\Controllers\AnnouncementController@frontAnnouncement');
Route::get('plantation/oilpalmestate', 'App\Http\Controllers\PlantationController@oilplantationFront');
Route::get('plantation/teaplantation', 'App\Http\Controllers\TeaplantationController@teaplantationFront');
Route::get('hospitality/hospitalitydivision', 'App\Http\Controllers\HospitalityController@hospitalityFront');


/* Company Controllers */
Route::get('company/companyhistory', 'App\Http\Controllers\CompanyController@frontCompanyhistory');
Route::get('company/corporateinformation', 'App\Http\Controllers\CompanyController@frontcorporateinfo');
Route::get('company/corporatestructure', 'App\Http\Controllers\CompanyController@frontcorporatestructure');
Route::get('company/corporatephilosophy', 'App\Http\Controllers\CompanyController@frontcorporatephilo');
Route::get('company/corporatevision', 'App\Http\Controllers\CompanyController@frontcorporatevision');
Route::get('company/corporatesocialresponsibility', 'App\Http\Controllers\CompanyController@frontcorporatesocialresp');

Route::controller('password', 'RemindersController'); // Password Reminder

Route::resource('investorrelations/managementanalysis/edividend', 'App\Http\Controllers\CorporateController@frontEdividend');
Route::resource('investorrelations/managementanalysis/summaryofshareholdersvotingrights', 'App\Http\Controllers\CorporateController@frontShareholdersvotingrights');
