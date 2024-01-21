<?php

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
*/

// for dynamic banner
View::composer(array('layouts.front', 'layouts.front_without_banner','layouts.front1'), function($view)
{
	if( Request::segment(3)=='general')
	{
		$id= 20;
	}else if(Request::segment(3)=='directorprofile')
	{
		$id =21;
	}
	else if(Request::segment(3)=='keymanagemnet')
	{
		$id =22;
	}
	else if(Request::segment(3)=='ourproperties')
	{
		$id =23;
	}
	else if(Request::segment(3)=='oursubsidiaries')
	{
		$id =24;
	}
	else if(Request::segment(2)=='corporategovernance')
	{
		$id =26;
	}
	else if(Request::segment(3)=='ipostatistics')
	{
		$id =27;
	}
	else if(Request::segment(3)=='competitiveadvantages')
	{
		$id =28;
	}
	else if(Request::segment(3)=='riskfactors')
	{
		$id =29;
	}
	else if(Request::segment(3)=='utilizationproceeds')
	{
		$id =30;
	}
	else if(Request::segment(3)=='industryoverview')
	{
		$id =31;
	}

//share information
	else if(Request::segment(3)=='priceticker')
	{
		$id =32;
	}else if(Request::segment(3)=='pricevolume')
	{
		$id =34;
	}
	else if(Request::segment(3)=='shareholdingsanalysis')
	{
		$id =35;
	}

	else if(Request::segment(3)=='topshareholders')
	{
		$id =36;
	}
//end of share information
	else if(Request::segment(2)=='frontentitlement')
	{
		$id =37;
	}
	else if(Request::segment(3)=='financialhighlights')
	{
		$id =38;
	}
	else if(Request::segment(3)=='comprehensiveincome')
	{
		$id =39;
	}else if(Request::segment(3)=='financialposition')
	{
		$id =40;
	}
	else if(Request::segment(3)=='cashflowstatement')
	{
		$id =41;
	}




	else if(Request::segment(3)=='equitychanges')
	{
		$id =42;
	}
	else if(Request::segment(3)=='latestreport')
	{
		$id =43;
	}else if(Request::segment(3)=='segmentalanalysis')
	{
		$id =44;
	}
	else if(Request::segment(3)=='ratioanalysis')
	{
		$id =45;
	}


	else if(Request::segment(3)=='chairmanstatement')
	{
		$id =46;
	}
	else if(Request::segment(3)=='reviewoperations')
	{
		$id =47;
	}else if(Request::segment(3)=='pastperformance')
	{
		$id =48;
	}
	else if(Request::segment(3)=='bursaannouncements')
	{
		$id =49;
	}


	else if(Request::segment(3)=='annualreports')
	{
		$id =51;
	}
	else if(Request::segment(3)=='annualauditedaccounts')
	{
		$id =52;
	}else if(Request::segment(3)=='quarterlyreports')
	{
		$id =53;
	}
	else if(Request::segment(3)=='circulars')
	{
		$id =54;
	}
	else if(Request::segment(3)=='prospectus')
	{
		$id =55;
	}else if(Request::segment(3)=='analystreports')
	{
		$id =56;
	}


	else if(Request::segment(3)=='newsalerts')
	{
		$id =57;
	}

	else if(Request::segment(2)=='eventcalendar')
	{
		$id =58;
	}

	else if(Request::segment(1)=='regionaloffices')
	{
		$id =61;
	}

	else if(Request::segment(1)=='')
	{
		$id =62;
	}

	else if(Request::segment(1)=='contactus')
	{
		$id =100;
	}

//bursa sub pages
	else if(Request::segment(2)=='frontadditionallisting')
	{
		$id =105;
	}
	else if(Request::segment(2)=='frontadditionallistingdetail')
	{
		$id =106;
	}
	else if(Request::segment(2)=='frontentitlement')
	{
		$id =107;
	}
	else if(Request::segment(2)=='frontentitlementdetail')
	{
		$id =108;
	}
	else if(Request::segment(2)=='frontinvestoralert')
	{
		$id =109;
	}
	else if(Request::segment(2)=='frontinvestoralertdetail')
	{
		$id =110;
	}
	else if(Request::segment(2)=='frontlistingcircular')
	{
		$id =111;
	}
	else if(Request::segment(2)=='frontlistingcirculardetail')
	{
		$id =112;
	}


	else if(Request::segment(2)=='fronttradingright')
	{
		$id =113;
	}
	else if(Request::segment(2)=='fronttradingrightdetail')
	{
		$id =114;
	}
	else if(Request::segment(2)=='frontfinanciallisting')
	{
		$id =115;
	}
	else if(Request::segment(2)=='frontfinanciallistingdetail')
	{
		$id =116;
	}
	else if(Request::segment(2)=='frontgeneralannouncementlisting')
	{
		$id =117;
	}


	else if(Request::segment(2)=='frontgeneralannouncementdetail')
	{
		$id =118;
	}
	else if(Request::segment(2)=='frontgeneralmeetinglisting')
	{
		$id =119;
	}
	else if(Request::segment(2)=='frontgeneralmeetingdetail')
	{
		$id =120;
	}
	else if(Request::segment(2)=='frontspecialannouncementlisting')
	{
		$id =121;
	}
	else if(Request::segment(2)=='frontspecialannouncementdetail')
	{
		$id =122;
	}


	else if(Request::segment(2)=='directorinterest')//second part
	{
		$id =123;
	}
	else if(Request::segment(2)=='directorinterestdetail')
	{
		$id =124;
	}
	else if(Request::segment(2)=='shareholderinterest')
	{
		$id =125;
	}
	else if(Request::segment(2)=='shareholderdetail')
	{
		$id =126;
	}
	else if(Request::segment(2)=='interestshareholderlist')
	{
		$id =127;
	}


	else if(Request::segment(2)=='interestshareholderdetail')
	{
		$id =128;
	}
	else if(Request::segment(2)=='personceasing')
	{
		$id =129;
	}

	else if(Request::segment(2)=='personceasingdetail')//end second part
	{
		$id =130;
	}
	else if(Request::segment(2)=='auditcommittee')
	{
		$id =131;
	}
	else if(Request::segment(2)=='auditcommitteedetail')
	{
		$id =132;
	}
	else if(Request::segment(2)=='boardroom')
	{
		$id =133;
	}
	else if(Request::segment(2)=='boardroomdetail')
	{
		$id =134;
	}
	else if(Request::segment(2)=='chiefexecutiveofficer')
	{
		$id =135;
	}
	else if(Request::segment(2)=='chiefexecutiveofficerdetail')
	{
		$id =136;
	}
	else if(Request::segment(2)=='principalofficer')
	{
		$id =137;
	}


	else if(Request::segment(2)=='principalofficerdetail')
	{
		$id =138;
	}
	else if(Request::segment(2)=='addresslisting')
	{
		$id =139;
	}
	else if(Request::segment(2)=='addressdetail')
	{
		$id =140;
	}
	else if(Request::segment(2)=='compsectretarylisting')
	{
		$id =141;
	}
	else if(Request::segment(2)=='compsectretarydetail')
	{
		$id =142;
	}


	else if(Request::segment(2)=='registrarlist')
	{
		$id =143;
	}
	else if(Request::segment(2)=='registrardetail')
	{
		$id =144;
	}
	else if(Request::segment(2)=='nominationcommittee')
	{
		$id =145;
	}
	else if(Request::segment(2)=='nominationcommitteedetail')//third part end
	{
		$id =146;
	}
	else if(Request::segment(2)=='resale')
	{
		$id =147;
	}


	else if(Request::segment(2)=='resaledetail')
	{
		$id =148;
	}
	else if(Request::segment(2)=='immediateannouncement')
	{
		$id =149;
	}
	else if(Request::segment(2)=='immediateannouncementdetail')
	{
		$id =150;
	}
	else if(Request::segment(2)=='companypursuant')
	{
		$id =151;
	}
	else if(Request::segment(2)=='companypursuantdetail')
	{
		$id =152;
	}


	else if(Request::segment(2)=='sharecompanypursuant')
	{
		$id =153;
	}
	else if(Request::segment(2)=='sharecompanypursuantdetail')
	{
		$id =154;
	}


//bursa subpages end





	else
	{
		$id=108;
	}
	

	



	
		$banners=DB::connection('cms')->select('SELECT *,b.banner from page_banner as a left join banners as b on a.banner_id=b.id where a.page_id='.$id.' and status=1 order by a.id desc');

		//$banners=DB::select(DB::raw($raw));

		//dd($banners);
	if($banners)
	{
		$banner=$banners[0]->banner;
	}else{
		$banner='banner5.jpg';
		
	}

	$view->with('banner', $banner);




});
//end dynamic banner



Route::group(["before" => "auth"], function ()
{
Route::get('admin/userslist','UserController@listUsers',array('before' => 'auth'));

//Sustainability
Route::get('admin/sust_palm_oil', 'SustainabilityController@sust_palm_oil');
Route::get('admin/sust_protection_biological', 'SustainabilityController@sust_protection_biological');
Route::get('admin/sust_equality_gender', 'SustainabilityController@sust_equality_gender');
Route::get('admin/sust_food_safety', 'SustainabilityController@sust_food_safety');
Route::get('admin/sust_safety_health', 'SustainabilityController@sust_safety_health');
Route::get('admin/sust_quality', 'SustainabilityController@sust_quality');
Route::get('admin/sust_safety', 'SustainabilityController@sust_safety');
Route::get('admin/sust_certification', 'SustainabilityController@sust_certification');
Route::get('admin/sust_slop_river', 'SustainabilityController@sust_slop_river');
Route::get('admin/sust_social', 'SustainabilityController@sust_social');

Route::get('admin/tor_board_nomination', 'SustainabilityController@tor_board_nomination');
Route::get('admin/tor_audit_management', 'SustainabilityController@tor_audit_management');


//new routing for bursa project
Route::get('admin/general', 'CorporateController@General');
Route::get('admin/dirprofile', 'CorporateController@DirProfile');
Route::post('admin/dirprofileadd', 'CorporateController@DirProfileAdd');
Route::post('admin/dirprofiledelete', 'CorporateController@DirProfileDelete');
Route::post('admin/dirprofiledeleteall', 'CorporateController@DirProfileDeleteAll');
Route::post('admin/page/dirprodeletemultiple', 'PageController@DirProDeleteMultiple');
Route::post('admin/dirprofileedit', 'CorporateController@DirProfileEdit');
Route::get('admin/keymanagement', 'CorporateController@KeyManagemenProfile');
Route::get('admin/ourproperties', 'CorporateController@OurProperties');
Route::get('admin/oursubsidiaries', 'CorporateController@OurSubsidiaries');
Route::post('admin/oursubsidiariesadd', 'CorporateController@OurSubsidiariesAdd');
Route::post('admin/deleteallpdf', 'CorporateController@DeleteAllPdf');
Route::post('admin/pdfsingledelete', 'CorporateController@PdfSingleDelete');
Route::post('admin/pdfedit', 'CorporateController@PdfEdit');
Route::post('admin/page/pdfdeletemultiple', 'PageController@PdfDeleteMultiple');
Route::post('admin/page/reportsdeletemultiple', 'PageController@ReportsDeleteMultiple');
Route::post('admin/page/investoralertsdeletemultiple', 'CorporateController@CorporateDeleteMultiple');
Route::get('admin/corpgovernance', 'CorporateController@CorpGovernance');
Route::get('admin/ipostatistics', 'IpoController@IpoStatistics');
Route::get('admin/ipocompetitive', 'IpoController@IpoCompetitive');
Route::get('admin/iporiskfactors', 'IpoController@IpoRiskFactors');
Route::get('admin/ipoutilisationproceeds', 'IpoController@IpoUtilisationProceeds');
Route::get('admin/ipoindustryoverview', 'IpoController@IpoIndustryOverview');
Route::get('admin/entitlements', 'IpoController@Entitlements');
Route::get('admin/financialhighlights', 'CorporateController@FinancialHighlights');
Route::get('admin/financialcomprehensive', 'CorporateController@FinancialComprehensive');
Route::get('admin/financialposition', 'CorporateController@FinancialPosition');
Route::get('admin/flowstatements', 'CorporateController@FlowStatements');
Route::get('admin/equity', 'CorporateController@Equity');
Route::get('admin/financialquarterlyreport', 'CorporateController@FinancialQuarterlyReport');
Route::get('admin/financialinfosegmentalanalysis', 'CorporateController@FinancialInfoSegmentalAnalysis');
Route::get('admin/financialratioanalysis', 'CorporateController@FinancialRatioAnalysis');
Route::get('admin/managementchairmansstatement', 'CorporateController@ManagementChairmansStat');
Route::get('admin/managementreviewoperations', 'CorporateController@ManagementReviewOperations');
Route::get('admin/managementpastperformancereview', 'CorporateController@ManagementPastPerformanceReview');
Route::get('admin/newscenter', 'CorporateController@NewsCenter');
Route::get('admin/announcementlinks', 'CorporateController@AnnouncementLinks');


//Route::get('admin/entitlement', 'IpoController@Entitlement');
Route::get('admin/entitlement', 'CorporateController@Entitlement');
Route::get('admin/investoralert', 'CorporateController@InvestorAlert');
Route::get('admin/additionallisting', 'CorporateController@AdditionalListing');
Route::get('admin/listingcircular', 'CorporateController@ListingCircular');
Route::get('admin/financialresultlisting', 'CorporateController@FinancialResultlisting');
Route::get('admin/financialresult', 'CorporateController@FinancialResult');
Route::get('admin/generalannouncement', 'CorporateController@GeneralAnnouncement');
Route::get('admin/generalmeeting', 'CorporateController@GeneralMeeting');
Route::get('admin/specialannouncement', 'CorporateController@SpecialAnnouncement');
Route::get('admin/directorinterest', 'CorporateController@DirectorInterest');
Route::get('admin/shareholderinterest', 'CorporateController@ShareholderInterest');
Route::get('admin/interestsubstanial', 'CorporateController@InterestSubstanial');
Route::get('admin/personceasing', 'CorporateController@PersonCeasing');
Route::get('admin/auditcommittee', 'CorporateController@AuditCommittee');
Route::get('admin/boardroom', 'CorporateController@BoardRoom');
Route::get('admin/chiefexecutive', 'CorporateController@ChiefExecutive');
Route::get('admin/principalofficer', 'CorporateController@PrincipalOfficer');
Route::get('admin/address', 'CorporateController@Address');
Route::get('admin/companysecretary', 'CorporateController@CompanySecretary');
Route::get('admin/registrar', 'CorporateController@Registrar');
Route::get('admin/treasury', 'CorporateController@Treasury');
Route::get('admin/shareimmediate', 'CorporateController@ShareImmediate');
Route::get('admin/sharepursuant', 'CorporateController@SharePursuant');
Route::get('admin/sharecompanypursuant', 'CorporateController@ShareCompanypursuant');


Route::post('admin/inverstoralert/saveinverstor', 'CorporateController@saveInvestor');  
Route::post('admin/inverstoralert/saveAdditional', 'CorporateController@saveAdditional');  
Route::post('admin/inverstoralert/saveCircular', 'CorporateController@saveCircular');  
Route::post('admin/inverstoralert/saveFinancial', 'CorporateController@saveFinancial');  
Route::post('admin/inverstoralert/saveGeneralAnnouncement', 'CorporateController@saveGeneralAnnouncement');  
Route::get('admin/annualreports', 'ReportsController@AnnualReports'); 
Route::post('admin/add', 'ReportsController@Add');
Route::post('admin/edit', 'ReportsController@Edit');
Route::post('admin/editinvestoralert', 'CorporateController@Editinvestoralert');   
Route::post('admin/deleteall', 'ReportsController@DeleteAll');
Route::post('admin/deleteallinvestoralert', 'CorporateController@DeleteAllInvestor');
Route::post('admin/singledelete', 'ReportsController@SingleDelete');
Route::post('admin/singledeleteinvestor', 'CorporateController@SingleDeleteInvestor');
Route::get('admin/annualaudit', 'ReportsController@AnnualAudit');
Route::get('admin/quarterlyreports', 'ReportsController@QuarterlyReports');
Route::get('admin/circularreports', 'ReportsController@CircularReports');
Route::get('admin/prospectusarreports', 'ReportsController@ProspectusarReports');
Route::get('admin/analystreports', 'ReportsController@AnalystReports');
Route::get('admin/newsalert', 'ReportsController@NewsAlert');
Route::post('admin/addnewsalert', 'ReportsController@AddNewsAlert');
Route::post('admin/deleteallnewsalerts', 'ReportsController@DeleteAllNewsAlerts');
Route::post('admin/page/newsalertdeletemultiple', 'PageController@NewsAlertDeleteMultiple');
Route::post('admin/editnewsalert', 'ReportsController@EditNewsAlert');
Route::post('admin/newsalertsingledelete', 'ReportsController@NewsAlertSingleDelete');
Route::get('admin/evencalendar', 'EventsController@EventsHome');
Route::post('admin/eventadd', 'EventsController@Add');
Route::post('admin/eventedit', 'EventsController@Edit');
Route::post('admin/eventdeleteall', 'EventsController@DeleteAll');
Route::post('admin/eventsingledelete', 'EventsController@SingleDelete');
Route::post('admin/eventmultipledelete', 'PageController@EventsDeleteMultiple');
Route::get('admin/priceticker', 'StockController@PriceTicker');
Route::resource('admin/priceandvolume', 'StockController@PriceAndVolume');
Route::get('admin/shareholding', 'StockController@Shareholding');
Route::get('admin/shareholderslist', 'StockController@ShareholdersList');
Route::get('admin/topshareholders', 'StockController@TopShareholders');
Route::post('admin/addtopshareholders', 'StockController@AddTopShareholders');
Route::post('admin/edittopshareholders', 'StockController@EditTopShareholders');
Route::post('admin/deletealltopshareholders', 'StockController@DeleteAllTopShareholders');
Route::post('admin/singledeletetopshareholders', 'StockController@SingleDeleteTopShareholders');
Route::post('admin/page/shareholdersdeletemultiple', 'PageController@ShareHoldersDeleteMultiple');
/////////////////////////////////////////
Route::post('admin/deleteallusers','UserController@userDeleteAll');
Route::post('admin/deletesingleuser','UserController@adminDeleteUser');
Route::get('admin/dashboard','AdminController@dashboard');
Route::get('admin/index','AdminController@adminindex');
Route::get('admin/vaccancies', 'Career1Controller@vaccancyIndex');
Route::get('admin/applicants', 'Career1Controller@applicantsListing');
Route::get('admin/manufacturing/packaging/canpac','ManufacturingController@packagingCanpac');
Route::get('admin/manufacturing/packaging/southeast','ManufacturingController@packagingSoutheast');
Route::get('admin/manufacturing/palmoil/refinery','ManufacturingController@palmoilRefinery');
Route::get('admin/manufacturing/palmoil/mill','ManufacturingController@palmoilMill');
Route::get('admin/trading/yeelee', 'TradingController@tradingAdminYelee');
Route::post('admin/trading/admindeletebanner', 'TradingController@adminDeleteBanner');
Route::post('admin/trading/admindeletebrand', 'TradingController@adminDeleteBrand');
Route::post('admin/trading/admindeleteallbanner', 'TradingController@adminDeleteAllBanner');
Route::post('admin/trading/admindeleteallbrands', 'TradingController@adminDeleteAllBrands');
Route::get('admin/investor/pressrelease', 'PressreleaseController@adminPressrelease');
Route::post('admin/index/addbanner', 'AdminController@addBanner');
Route::post('admin/index/editbanner', 'AdminController@editBanner');
Route::post('admin/index/deletebanner', 'AdminController@deleteBanner');
Route::post('admin/index/addcorebusiness', 'AdminController@addCorebusiness');
Route::post('admin/index/editcorebusiness', 'AdminController@editCorebusiness');
Route::post('admin/index/deletecorebusiness', 'AdminController@deleteCorebusiness');
Route::post('admin/manufacturing/addslidingbanner', 'ManufacturingController@addSlidingBanner');
Route::post('admin/manufacturing/editslidingbanner', 'ManufacturingController@editSlidingBanner');

Route::post('admin/applicants/deleteapplication', 'Career1Controller@deleteApplication');
Route::post('admin/trading/addslidingbanner', 'TradingController@addSlidingBanner');
Route::post('admin/trading/editslidingbanner', 'TradingController@editSlidingBanner');
Route::post('admin/trading/addbrands', 'TradingController@addBrands');
Route::post('admin/trading/editbrands', 'TradingController@editBrands');

Route::post('admin/manufacturing/addprocesseslisting', 'ManufacturingController@addProcesssListings');
Route::post('admin/manufacturing/editprocesseslisting', 'ManufacturingController@editProcesssListings');
Route::post('admin/manufacturing/deleteprocesseslisting', 'ManufacturingController@deleteProcesslisting');
Route::post('admin/manufacturing/deleteslidingbanner', 'ManufacturingController@deleteSlidingbanner');
Route::post('admin/manufacturing/deleteallbanner', 'ManufacturingController@deleteAllBanner');
Route::post('admin/manufacturing/deleteallprocess', 'ManufacturingController@deleteAllProcess');

Route::post('admin/manufacturing/deleteallsoutheastbanner', 'ManufacturingController@deleteAllSoutheastBanner');
Route::post('admin/manufacturing/deleteallsoutheastprocess', 'ManufacturingController@deleteAllSoutheastProcess');

Route::post('admin/vaccancy/addvaccancy', 'Career1Controller@addVaccancy');
Route::post('admin/vaccancy/editvaccancy', 'Career1Controller@editVaccancy');
Route::post('admin/vaccancy/deletevaccancy', 'Career1Controller@deleteVaccancy');
Route::post('admin/page/savepage', 'PageController@savePage');

Route::post('admin/page/deletemultipleuserlist', 'PageController@adminDeleteMultipleUserlist');
Route::post('admin/page/deletemultiplefeedback', 'PageController@adminDeleteMultipleFeedback');
Route::post('admin/page/deletemultiplebrandlisting', 'PageController@adminDeleteMultipleBrandlisting');
Route::post('admin/page/deletemultipleannual', 'PageController@adminDeleteMultipleAnnual');
Route::post('admin/page/deletemultiplepressrelease', 'PageController@adminDeleteMultiplePressrelease');
Route::post('admin/page/deletemultipleapplicants', 'PageController@adminDeleteMultipleApplicants');
Route::post('admin/page/deletemultiplevaccancies', 'PageController@adminDeleteMultipleVaccancies');
Route::post('admin/page/deletemultiplecorebusinesses', 'PageController@adminDeleteMultipleIndexCorebusinesses');
Route::post('admin/page/deletemultipleindexbanner', 'PageController@adminDeleteMultipleIndexBanner');
Route::post('admin/page/deletemultiplebanner', 'PageController@adminDeleteMultipleBanner');
Route::post('admin/page/deletemultipleprocesses', 'PageController@adminDeleteMultipleProcesses');
Route::post('admin/investor/addpressrelease', 'PressreleaseController@addPressrelease');
Route::post('admin/investor/deletepressrelease', 'PressreleaseController@deletePressrelease');
Route::post('admin/investor/deleteallpressrelease', 'PressreleaseController@deleteAllPressrelease');
Route::post('admin/investor/editpressrelease', 'PressreleaseController@editPressrelease');
Route::post('admin/investor/editpage', 'PressreleaseController@editPage');
Route::get('admin/contacts/feedbacks', 'ContactController@adminFeedback');
Route::get('admin/contacts/contactus', 'ContactController@adminContactus');
Route::post('admin/contacts/deletefeedback', 'ContactController@adminDeleteFeedback');
Route::post('admin/contacts/deleteallfeedback', 'ContactController@adminDeleteAllFeedback');
Route::get('admin/plantation/sementra', 'PlantationController@adminSementra');
Route::post('admin/plantation/addsementra', 'PlantationController@adminAddSementra');
Route::post('admin/plantation/editsementra', 'PlantationController@adminEditSementra');
Route::post('admin/plantation/deletesementra', 'PlantationController@adminDeleteSementra');
Route::post('admin/plantation/deleteallsementra', 'PlantationController@adminDeleteAllSementra');
Route::post('admin/plantation/addprocesses', 'PlantationController@adminAddProcesses');
Route::post('admin/plantation/editprocesses', 'PlantationController@adminEditProcesses');
Route::post('admin/plantation/deleteprocesses', 'PlantationController@adminDeleteProcesses');
Route::post('admin/plantation/deleteallprocesses', 'PlantationController@adminDeleteAllProcesses');
Route::get('admin/teaplantation/teaplantation', 'TeaplantationController@adminTeaplantation');
Route::post('admin/teaplantation/addbanner', 'TeaplantationController@adminAddBanner');
Route::post('admin/teaplantation/editbanner', 'TeaplantationController@adminEditBanner');
Route::post('admin/teaplantation/deletebanner', 'TeaplantationController@adminDeleteBanner');
Route::post('admin/teaplantation/deleteallbanner', 'TeaplantationController@adminDeleteAllBanner');
Route::post('admin/teaplantation/addprocesses', 'TeaplantationController@adminAddProcesses');
Route::post('admin/teaplantation/editprocesses', 'TeaplantationController@adminEditProcesses');
Route::post('admin/teaplantation/deleteprocesses', 'TeaplantationController@adminDeleteProcesses');
Route::post('admin/teaplantation/deleteallprocesses', 'TeaplantationController@adminDeleteAllProcesses');

Route::get('admin/hospitality/hospitality', 'HospitalityController@adminHospitality');
Route::post('admin/hospitality/addbanner', 'HospitalityController@adminAddBanner');
Route::post('admin/hospitality/editbanner', 'HospitalityController@adminEditBanner');
Route::post('admin/hospitality/deletebanner', 'HospitalityController@adminDeleteBanner');
Route::post('admin/hospitality/deleteallbanner', 'HospitalityController@adminDeleteAllBanner');
Route::post('admin/hospitality/addprocesses', 'HospitalityController@adminAddProcesses');
Route::post('admin/hospitality/editprocesses', 'HospitalityController@adminEditProcesses');
Route::post('admin/hospitality/deleteprocesses', 'HospitalityController@adminDeleteProcesses');
Route::post('admin/hospitality/deleteallprocesses', 'HospitalityController@adminDeleteAllProcesses');

Route::get('admin/annual/reports', 'AnnualreportController@adminAnnualreport');

Route::post('admin/annual/addreports', 'AnnualreportController@adminAddReports');
Route::post('admin/annual/editreports', 'AnnualreportController@adminEditReports');
Route::post('admin/annual/deletereports', 'AnnualreportController@adminDeleteReports');
Route::post('admin/annual/deleteallreports', 'AnnualreportController@adminDeleteAllReports');
Route::get('admin/company/announcements', 'AnnouncementController@adminAnnouncement');


Route::post('admin/updatepriceticker', 'AdminController@updatePriceTicker');
Route::post('admin/updateorder', 'AdminController@updateOrder');
Route::resource('admin/irhome', 'AdminController@adminIRHome');

});


// Sustainable Routers
Route::get('/sustainability/palm-oil-policy','SustainabilityController@front_sust_palm_oil');
Route::get('/sustainability/Environmental-protection-biological-diversity-policy','SustainabilityController@front_sust_protection_biological');
Route::get('/sustainability/equality-gender-policy','SustainabilityController@front_sust_equality_gender');
Route::get('/sustainability/food-safety-policy','SustainabilityController@front_sust_food_safety');
Route::get('/sustainability/quality-policy','SustainabilityController@front_sust_quality');
Route::get('/sustainability/safety-health-policy','SustainabilityController@front_sust_safety_health');
Route::get('/sustainability/safety-policy','SustainabilityController@front_sust_safety');
Route::get('/sustainability/slope-river-protection-policy','SustainabilityController@front_sust_slop_river');
Route::get('/sustainability/certification-policy','SustainabilityController@front_sust_certification');
Route::get('/sustainability/social-policy','SustainabilityController@front_sust_social');
Route::get('/sustainability/board-nomination-committe','SustainabilityController@front_tor_board_nomination');
Route::get('/sustainability/audit-management-committee','SustainabilityController@front_tor_audit_management');

Route::post('/sustainability/frontCangingPDF','SustainabilityController@frontCangingPDF');




Route::get('/','HomeController@showIndex');
Route::get('admin/login','AdminController@showLogin');
Route::post('updatepricetickerfront', 'AdminController@updatePriceTicker');

Route::get('admin/logout','AdminController@handleLogout');
Route::post('admin/login', array('as' => 'login', 'uses' => 'AdminController@handleLogin'));
Route::get('/forgotpassword', 'AdminController@forgotPassword');
Route::post('user/store', 'UserController@store');
Route::post('user/update', 'UserController@update');
Route::post('admin/users/saveuser', 'UserController@saveUser');
Route::post('admin/users/updateuser', 'UserController@updateUser');
Route::post('admin/users/changepassword', 'UserController@changepassword');



Route::post('company/careers/submitapp', 'Career1Controller@submitApp');

Route::post('contacts/feedback/submitfeedback', 'ContactController@submitFeedback');

/* Front Routers */
Route::get('manufacturing/packaging/canpac','ManufacturingController@packagingFrontCanpac');
Route::get('manufacturing/packaging/southeast','ManufacturingController@packagingFrontSoutheast');
Route::get('manufacturing/palmoil/refinery','ManufacturingController@palmoilFrontRefinery');
Route::get('manufacturing/palmoil/mill','ManufacturingController@palmoilFrontMill');

Route::get('company/careers', 'Career1Controller@frontCareer');
Route::post('company/searchcareers', 'Career1Controller@frontsearchCareer');
Route::get('company/careers/apply/{vaccancy_id}', 'Career1Controller@showApplyForm');
Route::get('trading/tradingdivision/yelee', 'TradingController@tradingFrontYelee');
Route::get('contacts/feedback', 'ContactController@feedbackFront');
Route::get('contacts/contactus', 'ContactController@contactusFront');


/* End of Front Routers */
/* Investor Relations Front */
Route::get('regionaloffices', 'ContactController@regionaloffices');
Route::resource('contactsubmit', 'ContactController@contactsubmit');
Route::resource('contactus', 'ContactController@contactusFront');



Route::get('investorrelations/newscentre/bursaannouncementsduplicate', [
    'as'   => 'frontBursaAnnounceListduplicate',
    'uses' => 'CorporateController@frontBursaAnnounceListduplicate'
]);

Route::resource('investorrelations/newscentre/bursaannouncements', 'CorporateController@frontBursaAnnounceList');
Route::get('investorrelations/newscentre/bursaannouncements/{announce_id?}', 'CorporateController@frontBursaAnnouncement'); 
Route::resource('investorrelations/shareinformation/topshareholders', 'StockController@frontTopShareholders');
Route::get('investorrelations/shareinformation/shareholdingsanalysis', 'StockController@frontShareholding');
Route::resource('investorrelations/shareinformation/pricevolume', 'StockController@frontPriceAndVolume');
Route::get('investorrelations/shareinformation/priceticker', 'StockController@frontpriceticker');
Route::resource('investorrelations/reports/prospectus', 'ReportsController@frontProspectusarReports');
Route::resource('investorrelations/reports/circulars', 'ReportsController@frontCircularReports');
Route::get('investorrelations/reports/analystreports', 'ReportsController@frontAnalystReports');
Route::get('investorrelations/reports/quarterlyreports', 'ReportsController@frontQuarterlyReports');
Route::resource('investorrelations/reports/annualauditedaccounts', 'ReportsController@frontAnnualAudit');
Route::get('investorrelations/reports/annualreports', 'ReportsController@frontAnnualReports');
Route::resource('investorrelations/eventcalendar', 'EventsController@frontEventsHome');
Route::post('investorrelations/investortools/newsalertsunsubscribesubmit', 'ReportsController@UnSubscribeNewsAlertSubmit');
Route::post('investorrelations/investortools/newsalertssubscribesubmit', 'ReportsController@SubscribeNewsAlertSubmit');
Route::resource('investorrelations/investortools/newsalertsunsubscribe', 'ReportsController@frontNewsAlertUnsubscribe');
Route::resource('investorrelations/investortools/newsalerts', 'ReportsController@frontNewsAlert');
Route::resource('investorrelations/investortools/calculator', 'ReportsController@frontPriceGainCalculator');
Route::resource('investorrelations/managementanalysis/pastperformance', 'CorporateController@frontManagementPastPerformanceReview');
Route::resource('investorrelations/managementanalysis/reviewoperations', 'CorporateController@frontManagementReviewOperations');
Route::resource('investorrelations/managementanalysis/chairmanstatement', 'CorporateController@frontManagementChairmansStat');
Route::get('investorrelations/financialinformation/financialhighlights', 'CorporateController@frontFinancialHighlights');
Route::resource('investorrelations/financialinformation/comprehensiveincome', 'CorporateController@frontFinancialComprehensive');
Route::resource('investorrelations/financialinformation/financialposition', 'CorporateController@frontFinancialPosition');
Route::resource('investorrelations/financialinformation/cashflowstatement', 'CorporateController@frontFinancialFlowStatements');
Route::resource('investorrelations/financialinformation/equitychanges', 'CorporateController@frontFinancialEquity');
Route::resource('investorrelations/financialinformation/latestreport', 'CorporateController@frontLatestReport');
Route::resource('investorrelations/financialinformation/segmentalanalysis', 'CorporateController@frontFinancialSegmentalAnalysis');
Route::resource('investorrelations/financialinformation/ratioanalysis', 'CorporateController@frontFinancialRatioAnalysis');
Route::get('investorrelations/entitlementdetail', 'CorporateController@frontEntitlementDetail');
Route::get('investorrelations/entitlements', 'IpoController@frontEntitlements');



/* Route::get('investorrelations/frontentitlement', 'IpoController@frontEntitlement');
Route::get('investorrelations/frontentitlementdetail', 'IpoController@frontEntitlementDetail');
Route::get('investorrelations/frontinvestoralert', 'IpoController@frontInvestorAlert');
Route::post('investorrelations/frontinvestoralert', 'IpoController@frontInvestorAlert');
Route::get('investorrelations/frontadditionallisting', 'IpoController@frontAdditionallisting');
Route::get('investorrelations/frontadditionallistingdetail/{listing_id}', 'IpoController@frontAdditionallistingdetail');
Route::get('investorrelations/auditcommittee', 'IpoController@auditcommittee');
Route::get('investorrelations/auditcommitteedetail', 'IpoController@auditcommitteedetail');
Route::get('investorrelations/boardroom', 'IpoController@boardroom');
Route::get('investorrelations/boardroomdetail', 'IpoController@boardroomdetail');
Route::get('investorrelations/chiefexecutiveofficer', 'IpoController@chiefexecutiveofficer');
Route::get('investorrelations/principalofficer', 'IpoController@principalofficer');
Route::get('investorrelations/principalofficerdetail', 'IpoController@principalofficerdetail');
Route::get('investorrelations/addresslisting', 'IpoController@addresslisting');
Route::get('investorrelations/addressdetail', 'IpoController@addressdetail');
Route::get('investorrelations/compsectretarylisting', 'IpoController@compsectretarylisting');
Route::get('investorrelations/registrarlist', 'IpoController@registrarlist');
Route::get('investorrelations/registrardetail', 'IpoController@registrardetail');
Route::get('investorrelations/resale', 'IpoController@resale');
Route::get('investorrelations/immediateannouncement', 'IpoController@immediateannouncement');
Route::get('investorrelations/companypursuant', 'IpoController@companypursuant');
Route::get('investorrelations/sharecompanypursuant', 'IpoController@sharecompanypursuant');

Route::get('investorrelations/frontlistingcircular', 'IpoController@frontlistingcircular');
Route::get('investorrelations/frontlistingcirculardetail', 'IpoController@frontlistingcirculardetail');
Route::get('investorrelations/fronttradingright', 'IpoController@frontTradingright');
Route::get('investorrelations/frontfinanciallisting', 'IpoController@frontfinanciallisting');
Route::get('investorrelations/frontfinanciallistingdetail', 'IpoController@frontfinanciallistingdetail');
Route::get('investorrelations/frontgeneralannouncementlisting', 'IpoController@frontgeneralannouncementlisting');
Route::get('investorrelations/frontgeneralannouncementdetail', 'IpoController@frontgeneralannouncementdetail');
Route::get('investorrelations/frontgeneralmeetinglisting', 'IpoController@frontgeneralmeetinglisting');
Route::get('investorrelations/frontgeneralmeetingdetail', 'IpoController@frontgeneralmeetingdetail');
Route::get('investorrelations/frontspecialannouncementlisting', 'IpoController@frontspecialannouncementlisting');
Route::get('investorrelations/frontspecialannouncementdetail', 'IpoController@frontspecialannouncementdetail');
Route::get('investorrelations/directorinterestdetail', 'IpoController@frontdirectorinterestdetail');
Route::get('investorrelations/directorinterest', 'IpoController@frontdirectorinterest');
Route::get('investorrelations/shareholderinterest', 'IpoController@frontshareholderinterest');
Route::get('investorrelations/shareholderdetail', 'IpoController@frontshareholderdetail');
Route::get('investorrelations/interestshareholderlist', 'IpoController@frontinterestshareholderlist');
Route::get('investorrelations/interestshareholderdetail', 'IpoController@frontinterestshareholderdetail');
Route::get('investorrelations/personceasing', 'IpoController@frontpersonceasing'); */


Route::get('investorrelations/chiefexecutiveofficer', 'IpoController@chiefexecutiveofficer');
Route::get('investorrelations/chiefexecutiveofficerdetail/{announce_id}', 'IpoController@chiefexecutiveofficerdetail');
Route::get('investorrelations/principalofficer', 'IpoController@principalofficer');
Route::get('investorrelations/principalofficerdetail/{announce_id}', 'IpoController@principalofficerdetail');
Route::get('investorrelations/frontentitlement', 'IpoController@frontEntitlement');
Route::get('investorrelations/frontentitlementdetail/{listing_id}', 'IpoController@frontEntitlementDetail');
Route::get('investorrelations/frontinvestoralert', 'IpoController@frontInvestorAlert');
Route::get('investorrelations/frontinvestoralertdetail/{listing_id}', 'IpoController@frontInvestorAlertDetail');
Route::get('investorrelations/frontadditionallisting', 'IpoController@frontAdditionallisting');
Route::get('investorrelations/frontadditionallistingdetail/{listing_id}', 'IpoController@frontAdditionallistingdetail');
Route::get('investorrelations/auditcommittee', 'IpoController@auditcommittee');
Route::get('investorrelations/auditcommitteedetail/{announce_id}', 'IpoController@auditcommitteedetail');
Route::get('investorrelations/nominationcommittee', 'IpoController@nominationcommittee');
Route::get('investorrelations/nominationcommitteedetail/{announce_id}', 'IpoController@nominationcommitteedetail');
Route::get('investorrelations/boardroom', 'IpoController@boardroom');
Route::get('investorrelations/boardroomdetail/{announce_id}', 'IpoController@boardroomdetail');
Route::get('investorrelations/compsectretarylisting', 'IpoController@compsectretarylisting');
Route::get('investorrelations/compsectretarydetail/{announce_id}', 'IpoController@compsectretarydetail');
Route::get('investorrelations/registrarlist', 'IpoController@registrarlist');
Route::get('investorrelations/registrardetail/{announce_id}', 'IpoController@registrardetail');
Route::get('investorrelations/resale', 'IpoController@resale');
Route::get('investorrelations/resaledetail/{announce_id}', 'IpoController@resaledetail');
Route::get('investorrelations/immediateannouncement', 'IpoController@immediateannouncement');
Route::get('investorrelations/immediateannouncementdetail/{announce_id}', 'IpoController@immediateannouncementdetail');
Route::get('investorrelations/companypursuant', 'IpoController@companypursuant');
Route::get('investorrelations/companypursuantdetail/{announce_id}', 'IpoController@companypursuantdetail');
Route::get('investorrelations/sharecompanypursuant', 'IpoController@sharecompanypursuant');
Route::get('investorrelations/sharecompanypursuantdetail/{announce_id}', 'IpoController@sharecompanypursuantdetail');
Route::get('investorrelations/frontlistingcircular', 'IpoController@frontlistingcircular');
Route::get('investorrelations/frontlistingcirculardetail/{announce_id}', 'IpoController@frontlistingcirculardetail');
Route::get('investorrelations/fronttradingright', 'IpoController@frontTradingright');
Route::get('investorrelations/fronttradingrightdetail/{announce_id}', 'IpoController@frontTradingrightDetail');
Route::get('investorrelations/frontfinanciallisting', 'IpoController@frontfinanciallisting');
Route::get('investorrelations/frontfinanciallistingdetail/{announce_id}', 'IpoController@frontfinanciallistingdetail');
Route::get('investorrelations/frontgeneralannouncementlisting', 'IpoController@frontgeneralannouncementlisting');
Route::get('investorrelations/frontgeneralannouncementdetail/{announce_id}', 'IpoController@frontgeneralannouncementdetail');
Route::get('investorrelations/frontgeneralmeetinglisting', 'IpoController@frontgeneralmeetinglisting');
Route::get('investorrelations/frontgeneralmeetingdetail/{announce_id}', 'IpoController@frontgeneralmeetingdetail');
Route::get('investorrelations/frontspecialannouncementlisting', 'IpoController@frontspecialannouncementlisting');
Route::get('investorrelations/frontspecialannouncementdetail/{announce_id}', 'IpoController@frontspecialannouncementdetail');
Route::get('investorrelations/directorinterestdetail/{announce_id}', 'IpoController@frontdirectorinterestdetail');
Route::get('investorrelations/directorinterest', 'IpoController@frontdirectorinterest');
Route::get('investorrelations/shareholderinterest', 'IpoController@frontshareholderinterest');
Route::get('investorrelations/shareholderdetail/{announce_id}', 'IpoController@frontshareholderdetail');
Route::get('investorrelations/interestshareholderlist', 'IpoController@frontinterestshareholderlist');
Route::get('investorrelations/interestshareholderdetail/{announce_id}', 'IpoController@frontinterestshareholderdetail');
Route::get('investorrelations/personceasing', 'IpoController@frontpersonceasing');
Route::get('investorrelations/personceasingdetail/{announce_id}', 'IpoController@frontpersonceasingdetail');
Route::get('investorrelations/addresslisting', 'IpoController@addresslisting');
Route::get('investorrelations/addressdetail/{announce_id}', 'IpoController@addressdetail');


Route::get('cron/crawlAnnouncement', 'AnnouncementController@crawlAnnouncement');

/* Announcements */
Route::post('admin/newscenter/saveannouncements', 'CorporateController@addAnnouncements');
Route::post('admin/newscenter/editannouncements', 'CorporateController@editAnnouncements');
Route::post('admin/newscenter/deleteannouncement', 'CorporateController@deleteAnnouncement');
Route::post('admin/newscenter/deletemultipleannouncement', 'CorporateController@deleteMultipleAnnouncement');
Route::post('admin/newscenter/deleteallannouncement', 'CorporateController@deleteAllAnnouncement');


/* Announcements Links */
Route::post('admin/newscenter/saveannouncementlink', 'AnnouncementLinkController@addAnnouncementLink');
Route::post('admin/newscenter/editannouncementlink', 'AnnouncementLinkController@updateAnnouncementLink');
Route::post('admin/newscenter/deletelink', 'AnnouncementLinkController@deleteAnnouncementLink');
Route::post('admin/newscenter/deletemultiplelink', 'AnnouncementLinkController@deleteMultipleAnnouncementLinks');
Route::post('admin/newscenter/deleteallannouncementlinks', 'AnnouncementLinkController@deleteAllAnnouncementlinks');







Route::get('investorrelations/ipocentre/industryoverview', 'IpoController@frontIpoIndustryOverview');
Route::get('investorrelations/ipocentre/utilizationproceeds', 'IpoController@frontIpoUtilisationProceeds');
Route::get('investorrelations/ipocentre/riskfactors', 'IpoController@frontIpoRiskFactors');
Route::get('investorrelations/ipocentre/competitiveadvantages', 'IpoController@frontIpoCompetitiveAdvantage');
Route::get('investorrelations/ipocentre/ipostatistics', 'IpoController@frontIpoStatistics');
Route::resource('investorrelations/corporategovernance', 'CorporateController@frontCorpGovernance');
Route::resource('investorrelations/corporateinformation/oursubsidiaries', 'CorporateController@frontOurSubsidiaries');
Route::resource('investorrelations/corporateinformation/ourproperties', 'CorporateController@frontOurProperties');
Route::get('investorrelations/corporateinformation/keymanagemnet', 'CorporateController@frontKeyManagemenProfile');
Route::resource('investorrelations/corporateinformation/directorprofile', 'CorporateController@frontDirProfile');
Route::get('investorrelations/corporateinformation/general', 'CorporateController@frontGeneral');
/* End of Investor Relations Front */

Route::get('investorrelations/announcements', 'AnnouncementController@frontAnnouncement');
Route::get('plantation/oilpalmestate', 'PlantationController@oilplantationFront');
Route::get('plantation/teaplantation', 'TeaplantationController@teaplantationFront');
Route::get('hospitality/hospitalitydivision', 'HospitalityController@hospitalityFront');


/* Company Controllers */
Route::get('company/companyhistory', 'CompanyController@frontCompanyhistory');
Route::get('company/corporateinformation', 'CompanyController@frontcorporateinfo');
Route::get('company/corporatestructure', 'CompanyController@frontcorporatestructure');
Route::get('company/corporatephilosophy', 'CompanyController@frontcorporatephilo');
Route::get('company/corporatevision', 'CompanyController@frontcorporatevision');
Route::get('company/corporatesocialresponsibility', 'CompanyController@frontcorporatesocialresp');

Route::controller('password', 'RemindersController'); // Password Reminder



