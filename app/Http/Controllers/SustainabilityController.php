<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Pdf;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SustainabilityController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Sustainability Palm Oil
	*/
	public function sust_palm_oil(Request $req) {
        $page = Page::where('type','=','sust_palm_oil')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_palm_oil')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_palm_oil')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_palm_oil',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


    /*
	|--------------------------------------------------------------------------
	| sust_protection_biological Palm Oil
	*/
	public function sust_protection_biological(Request $req) {
        $page = Page::where('type','=','sust_protection_biological')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_protection_biological')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_protection_biological')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_protection_biological',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }

        /*
	|--------------------------------------------------------------------------
	| sust_equality_gender Palm Oil
	*/
	public function sust_equality_gender(Request $req) {
        $page = Page::where('type','=','sust_equality_gender')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_equality_gender')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_equality_gender')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_equality_gender',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


            /*
	|--------------------------------------------------------------------------
	| sust_food_safety Palm Oil
	*/
	public function sust_food_safety(Request $req) {
        $page = Page::where('type','=','sust_food_safety')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_food_safety')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_food_safety')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_food_safety',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


    /*
	|--------------------------------------------------------------------------
	| sust_quality Palm Oil
	*/
	public function sust_quality(Request $req) {
        $page = Page::where('type','=','sust_quality')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_quality')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_quality')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_quality',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


    /*
	|--------------------------------------------------------------------------
	| sust_safety_health Palm Oil
	*/
	public function sust_safety_health(Request $req) {
        $page = Page::where('type','=','sust_safety_health')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_safety_health')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_safety_health')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_safety_health',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


        /*
	|--------------------------------------------------------------------------
	| sust_safety Palm Oil
	*/
	public function sust_safety(Request $req) {
        $page = Page::where('type','=','sust_safety')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_safety')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_safety')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_safety',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }

    /*
	|--------------------------------------------------------------------------
	| sust_slop_river Palm Oil
	*/
	public function sust_slop_river(Request $req) {
        $page = Page::where('type','=','sust_slop_river')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_slop_river')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_slop_river')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_slop_river',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


        /*
	|--------------------------------------------------------------------------
	| sust_certification Palm Oil
	*/
	public function sust_certification(Request $req) {
        $page = Page::where('type','=','sust_certification')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_certification')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_certification')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_certification',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }



                /*
	|--------------------------------------------------------------------------
	| sust_social Palm Oil
	*/
	public function sust_social(Request $req) {
        $page = Page::where('type','=','sust_social')->where('published','=',1)->get();
		$pgCount = Pdf::where('type','=','sust_social')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
           	$Profileslisting = Pdf::where('type','=','sust_social')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
	        return View::make('sustainability.sust_social',array(
               'page' => $page,
			   'profilelist'=>$Profileslisting,
			    'cntarray1' => $cntarray1
			     )
             );

        }


    /*
    |--------------------------------------------------------------------------
    | tor_board_nomination
    */
    public function tor_board_nomination(Request $req) {
        $page = Page::where('type','<>','tor_board_nomination')->where('published','=',1)->get();
        $pgCount = Pdf::where('type','=','tor_board_nomination')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
            $Profileslisting = Pdf::where('type','=','tor_board_nomination')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
            return View::make('sustainability.tor_board_nomination',array(
               'page' => $page,
               'profilelist'=>$Profileslisting,
                'cntarray1' => $cntarray1
                 )
             );

        }

        /*
        tor_risk_management
        */
        public function tor_risk_management(Request $req) {

            $page = Page::where('type','=','tor_risk_management')->where('published','=',1)->get();
            $pgCount = Pdf::where('type','=','tor_risk_management')->count();
                    for ($i = 1; $i <= $pgCount; $i++ )
                    {
                     if($i == 1){$cntArr[10] = 10;}

                     if($i == 11) {$cntArr[20] = 20; }

                     if($i == 21) {$cntArr[30] = 30;}

                     if($i == 31){ $cntArr[50] = 50;}

                     if($i == 51){$cntArr[100] = 100;
                     exit;}
                 }
                 if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
                 else { $noperpage = 10;}
                 /* End of Paginate Count Section */
                $Profileslisting = Pdf::where('type','=','tor_risk_management')->paginate($noperpage);
                if($pgCount > 0){$cntarray1 = $cntArr;}
               else {$cntarray1 = 0;}
                return View::make('sustainability.tor_risk_management',array(
                   'page' => $page,
                   'profilelist'=>$Profileslisting,
                    'cntarray1' => $cntarray1
                     )
                 );

            }


    /*
    |--------------------------------------------------------------------------
    | tor_audit_management
    */
    public function tor_audit_management(Request $req)
    {
        $page = Page::where('type','=','tor_audit_management')->where('published','=',1)->get();

        $pgCount = Pdf::where('type','=','tor_audit_management')->count();
                for ($i = 1; $i <= $pgCount; $i++ )
                {
                 if($i == 1){$cntArr[10] = 10;}

                 if($i == 11) {$cntArr[20] = 20; }

                 if($i == 21) {$cntArr[30] = 30;}

                 if($i == 31){ $cntArr[50] = 50;}

                 if($i == 51){$cntArr[100] = 100;
                 exit;}
             }
             if($req->input('noperpage2')){$noperpage = $req->input('noperpage2');  }
             else { $noperpage = 10;}
             /* End of Paginate Count Section */
            $Profileslisting = Pdf::where('type','=','tor_audit_management')->paginate($noperpage);
            if($pgCount > 0){$cntarray1 = $cntArr;}
           else {$cntarray1 = 0;}
            return View::make('sustainability.tor_audit_management',array(
               'page' => $page,
               'profilelist'=>$Profileslisting,
                'cntarray1' => $cntarray1
                 )
             );

        }





//Sustainable Fron function

        // front_sust_palm_oil PDF Viw
        public function front_sust_palm_oil(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_palm_oil')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_palm_oil')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_palm_oil')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_palm_oil')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_palm_oil')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Sustainable Palm Oil Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
				$tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_palm_oil';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

          // front_sust_protection_biological PDF Viw
        public function front_sust_protection_biological(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_protection_biological')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_protection_biological')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_protection_biological')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_protection_biological')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_protection_biological')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Environmental Protection & Biological Diversity Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
				$tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_protection_biological';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }


        // front_sust_equality_gender PDF Viw
        public function front_sust_equality_gender(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_equality_gender')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_equality_gender')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_equality_gender')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_equality_gender')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_equality_gender')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Policy of Equality &amp; Gender","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_equality_gender';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

          // front_sust_food_safety PDF Viw
        public function front_sust_food_safety(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_food_safety')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_food_safety')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_food_safety')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_food_safety')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_food_safety')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustanability","url" => ""),
                                    2 => array ("title" => "Food Safety Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_food_safety';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }


          // front_sust_quality PDF Viw
        public function front_sust_quality(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_quality')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_quality')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_quality')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_quality')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_quality')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Quality Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_quality';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

        // front_sust_safety_health PDF Viw
        public function front_sust_safety_health(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_safety_health')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_safety_health')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_safety_health')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_safety_health')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_safety_health')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Safety & Health Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_safety_health';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }


          // front_sust_safety PDF Viw
        public function front_sust_safety(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_safety')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_safety')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_safety')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_safety')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_safety')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Safety Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_safety';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }



            // front_sust_slop_river PDF Viw
        public function front_sust_slop_river(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_slop_river')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_slop_river')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_slop_river')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_slop_river')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_slop_river')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Slope & River Protection Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_slop_river';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

    // front_sust_certification PDF Viw
        public function front_sust_certification(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_certification')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_certification')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_certification')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date','title','id')->where('type','=','sust_certification')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->id] = $profileDate1->title;

                }

                $page = Page::where('type','=','sust_certification')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Certification","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_certification';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

          // front_sust_social PDF Viw
        public function front_sust_social(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','sust_social')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','sust_social')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','sust_social')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','sust_social')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','sust_social')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Sustainability","url" => ""),
                                    2 => array ("title" => "Social Policy","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'sust_social';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }

        // front_tor_board_nomination PDF Viw
        public function front_tor_board_nomination(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','tor_board_nomination')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','tor_board_nomination')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','tor_board_nomination')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','tor_board_nomination')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','tor_board_nomination')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Governance","url" => ""),
                                    2 => array ("title" => "Terms of Reference - Board Nomination Committee","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'tor_board_nomination';
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type
                      )
              );
          }


              // front_tor_risk_management PDF Viw
        public function front_tor_risk_management(Request $req) {

            if ($req->has('datesort'))
            {
                $dateSort = $req->input('datesort');
                if($dateSort == 'latest')
                {
                    $pdfs = Pdf::where('type','=','tor_risk_management')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                }
                else
                {
                    $pdfs = Pdf::where('type','=','tor_risk_management')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                }
            }

            else {

                $dateSort = '';
                $pdfs = Pdf::where('type','=','tor_risk_management')->orderBy('updated_at','DESC')->where('active','=',1)->get();
            }
           $profieDate = Pdf::select('date')->where('type','=','tor_risk_management')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

            $profieDates = Array();
            $profieDates['latest'] = 'Latest';
            foreach ($profieDate as $profileDate1)
            {
                $profieDates[$profileDate1->date] = $profileDate1->date;

            }

            $page = Page::where('type','=','tor_risk_management')->where('published','=',1)->get();
            $pageTitle = $page[0]->page_title;
            $masthead = url().'/images/banner_subpage/banner13.jpg';
            $breadcrumbs = array(
                                0 => array ("title" => "Home", "url" => ""),
                                 1 => array ("title" => "Governance","url" => ""),
                                2 => array ("title" => "Terms of Reference","url" => ""),
                                3 => array ("title" => "Risk Management Committee","url" => "")
                                //4 => array ("title" => "Sustainability","url" => "")
                            );

            //$tagLine = strip_tags($page[0]->page_title);
            $tagLine = "Oil Palm Plantation Investment Holdings";
            $mainMenuTitle = $page[0]->page_title;
            $metaTitle = $mainMenuTitle;
            $pdf_type = 'tor_risk_management';
            return View::make('sustainability.frontPDF',array(
                 'page' => $page,
                 'pageTitle' => $pageTitle,
                 'masthead' => $masthead,
                 'breadcrumbs' => $breadcrumbs,
                 'tagLine' => $tagLine,
                 'metaTitle' => $metaTitle,
                 'pdfs' => $pdfs,
                 'profieDates' => $profieDates,
                 'pdf_type' => $pdf_type
                  )
          );
      }



        // front_tor_audit_management PDF Viw
        public function front_tor_audit_management(Request $req) {

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=','tor_audit_management')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=','tor_audit_management')->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=','tor_audit_management')->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date')->where('type','=','tor_audit_management')->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                    $profieDates[$profileDate1->date] = $profileDate1->date;

                }

                $page = Page::where('type','=','tor_audit_management')->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Governance","url" => ""),
                                    2 => array ("title" => "Terms of Reference - Audit And Risk Management Committee","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                $pdf_type = 'tor_audit_management';
                $banner = DB::connection('cms')->table('page_banner')->select('banners.banner')->where('page_banner.page_id', 23)->where('banners.status', 1)->join('banners', 'page_banner.banner_id', '=', 'banners.id')->orderBy('banners.updated_at', 'desc')->first();
                return View::make('sustainability.frontPDF',array(
                     'page' => $page,
                     'pageTitle' => $pageTitle,
                     'masthead' => $masthead,
                     'breadcrumbs' => $breadcrumbs,
                     'tagLine' => $tagLine,
                     'metaTitle' => $metaTitle,
                     'pdfs' => $pdfs,
                     'profieDates' => $profieDates,
                     'pdf_type' => $pdf_type,
                     'banners' => $banner->banner
                      )
              );
          }








// Fron page changing front data
         public function frontCangingPDF(Request $req) {

                $pdf_type = $req->input('pdf_type');

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'latest')
                    {
                        $pdfs = Pdf::where('type','=',$pdf_type)->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    elseif($pdf_type == 'sust_certification'){
                        $pdfs = Pdf::where('type','=',$pdf_type)->where('active','=',1)->where('id','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                        $pdfs = Pdf::where('type','=',$pdf_type)->where('active','=',1)->where('date','=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $pdfs = Pdf::where('type','=',$pdf_type)->orderBy('updated_at','DESC')->where('active','=',1)->get();
                }
               $profieDate = Pdf::select('date','title','id')->where('type','=',$pdf_type)->where('active','=',1)->orderBy('updated_at','DESC')->distinct()->get();

                $profieDates = Array();
                $profieDates['latest'] = 'Latest';
                foreach ($profieDate as $profileDate1)
                {
                  if($pdf_type == 'sust_certification'){
                    $profieDates[$profileDate1->id] = $profileDate1->title;
                  }else{ $profieDates[$profileDate1->date] = $profileDate1->date; }

                }

                $page = Page::where('type','=',$pdf_type)->where('published','=',1)->get();
                $pageTitle = $page[0]->page_title;
                $masthead = url().'/images/banner_subpage/banner13.jpg';
                $breadcrumbs = array(
                                    0 => array ("title" => "Home", "url" => ""),
                                     1 => array ("title" => "Governance","url" => ""),
                                    2 => array ("title" => "Sustainability","url" => "")
                                    //3 => array ("title" => "Board Charter","url" => ""),
                                    //4 => array ("title" => "Sustainability","url" => "")
                                );

                //$tagLine = strip_tags($page[0]->page_title);
                $tagLine = "Oil Palm Plantation Investment Holdings";
				$mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
        return View::make('sustainability.frontPDF',array(
                   'page' => $page,
                   'pageTitle' => $pageTitle,
                   'masthead' => $masthead,
                   'breadcrumbs' => $breadcrumbs,
                   'tagLine' => $tagLine,
                   'metaTitle' => $metaTitle,
                   'pdfs' => $pdfs,
                   'profieDates' => $profieDates,
                   'pdf_type' => $pdf_type
                    )
                 );
         }


}// End Of Class Sustainability
