<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Slidingbanner;
use App\Models\Processeslisting;
use App\Models\Page;
use Illuminate\Http\Request;

class ManufacturingController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default ManufacturingController
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


         public function packagingCanpac(Request $req) {

                $page = Page::where('type','=','pkcanpac')->where('published','=',1)->get();

			$pgCount = Slidingbanner::where('type','=','pkcanpac')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage1'))
             {
               $noperpage = $req->input('noperpage1');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
         $slidingbanners = Slidingbanner::where('type','=','pkcanpac')->paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }

				 /* Paginate Count Section */
             $pgCount = Processeslisting::where('type','=','pkcanpac')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage2'))
             {
               $noperpage = $req->input('noperpage2');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
           $processlistings = Processeslisting::where('type','=','pkcanpac')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }


                return View::make('adminpkcanpac',array(
                                                   'page' => $page,
												   'slidingbanners' => $slidingbanners,
												   'cntarray1' => $cntarray1,
                                                   'processlistings' => $processlistings,
												   'cntarray2' => $cntarray2

                                                    )
                                 );

        }

        public function packagingSoutheast(Request $req) {

                $page = Page::where('type','=','pksoutheast')->where('published','=',1)->get();
				$pgCount = Slidingbanner::where('type','=','pksoutheast')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage1'))
             {
               $noperpage = $req->input('noperpage1');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
           $slidingbanners = Slidingbanner::where('type','=','pksoutheast')->paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }

			    /* Paginate Count Section */
             $pgCount = Processeslisting::where('type','=','pksoutheast')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage2'))
             {
               $noperpage = $req->input('noperpage2');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
           $processlistings = Processeslisting::where('type','=','pksoutheast')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }

                return View::make('adminpksoutheast',array(
                                                   'page' => $page,
                                                   'slidingbanners' => $slidingbanners,
												   'cntarray1' => $cntarray1,
                                                   'processlistings' => $processlistings,
												    'cntarray2' => $cntarray2

                                                    )
                                 );

        }

        public function palmoilRefinery(Request $req) {

                $page = Page::where('type','=','pmrefinery')->where('published','=',1)->get();

			$pgCount = Slidingbanner::where('type','=','pmrefinery')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage1'))
             {
               $noperpage = $req->input('noperpage1');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
           $slidingbanners = Slidingbanner::where('type','=','pmrefinery')->paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }


				    /* Paginate Count Section */
             $pgCount = Processeslisting::where('type','=','pmrefinery')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage2'))
             {
               $noperpage = $req->input('noperpage2');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
             $processlistings = Processeslisting::where('type','=','pmrefinery')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }


                return View::make('adminpmrefinery',array(
                                                   'page' => $page,
                                                   'slidingbanners' => $slidingbanners,
												    'cntarray1' => $cntarray1,
                                                   'processlistings' => $processlistings,
												   'cntarray2' => $cntarray2

                                                    )
                                 );

        }

        public function deleteAllBanner() {

           $slidingbanner = Slidingbanner::where('type','=','pmrefinery')->delete();
		   if($slidingbanner)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
		 public function deleteAllProcess() {

           $Processes = Processeslisting::where('type','=','pmrefinery')->delete();
		   if($Processes)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
		 public function deleteAllSoutheastBanner() {

           $slidingbanner = Slidingbanner::where('type','=','pksoutheast')->delete();
		   if($slidingbanner)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
		 public function deleteAllSoutheastProcess() {

           $Processes = Processeslisting::where('type','=','pksoutheast')->delete();
		   if($Processes)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
        public function palmoilMill(Request $req) {

                $page = Page::where('type','=','pmmill')->where('published','=',1)->get();

				$pgCount = Slidingbanner::where('type','=','pmmill')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage1'))
             {
               $noperpage = $req->input('noperpage1');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
          $slidingbanners = Slidingbanner::where('type','=','pmmill')->paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }




			  	    /* Paginate Count Section */
             $pgCount = Processeslisting::where('type','=','pmmill')->count();
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
                 exit;
                 }
             }
             if($req->input('noperpage2'))
             {
               $noperpage = $req->input('noperpage2');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
               $processlistings = Processeslisting::where('type','=','pmmill')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }



                return View::make('adminpmmill',array(
                                                   'page' => $page,
                                                   'slidingbanners' => $slidingbanners,
												   'cntarray1' => $cntarray1,
                                                   'processlistings' => $processlistings,
												   'cntarray2' => $cntarray2


                                                    )
                                 );

        }

        public function addSlidingBanner(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
            $slidingbanner = Slidingbanner::create($req->all());
             if($slidingbanner)
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding Banner Added Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }
          }

       // Edit Sliding Banner
       public function editSlidingBanner(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

           $slidingbannerId = $req->input('bannerid');
           $banner = Slidingbanner::find($slidingbannerId);
           $banner->bannerimage = $req->file('bannerimage');
           $banner->title = $req->input('title');
           $banner->display_order = $req->input('display_order');
           $banner->active = $req->input('active');
           $banner->type = $req->input('type');
            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding Banner Edited Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }

          }


          /* Processes Listings */
       public function addProcesssListings(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
            $Processeslisting = Processeslisting::create($req->all());
             if($Processeslisting)
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Process Added Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }
          }

       // Edit Sliding Banner
       public function editProcesssListings(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

           $bannerId = $req->input('bannerid');
           $banner = Processeslisting::find($bannerId);
           $banner->bannerimage = $req->file('bannerimage');
           $banner->title = $req->input('title');
           $banner->short_description = $req->input('short_description');
           $banner->display_order = $req->input('display_order');
           $banner->active = $req->input('active');
           $banner->type = $req->input('type');
            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Process Edited Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }

          }
          /* End of Processes Listings */
		  public function deleteSlidingbanner(Request $req) {
		   $id = $req->input('slidingbannerid');
           $slidingbanner = Slidingbanner::findOrFail($id);
		   $slidingbanner->delete();
		   if($slidingbanner)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
            public function deleteProcesslisting(Request $req) {
		   $id = $req->input('processlistingid');
           $processeslistings = Processeslisting::findOrFail($id);
		   $processeslistings->delete();
		   if($processeslistings)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
          /* Front Controller Methods */
          public function packagingFrontCanpac()
          {
                $page = Page::where('type','=','pkcanpac')->where('published','=','1')->get();
                $slidingbanners = Slidingbanner::where('type','=','pkcanpac')->where('active','=','1')->orderBy('display_order', 'ASC')->get();;
                $processlistings = Processeslisting::where('type','=','pkcanpac')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $masthead = url().'/images/banner_subpage/banner15.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Manufacturing",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Packaging Division",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "Canpac Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = "PACKAGING DIVISION";
                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontpkcanpac',array(
                                                   'page' => $page[0],
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'processlistings' => $processlistings

                                                    )
                                 );
          }

           public function packagingFrontSoutheast()
          {
                $page = Page::where('type','=','pksoutheast')->where('published','=','1')->get();
                $slidingbanners = Slidingbanner::where('type','=','pksoutheast')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $processlistings = Processeslisting::where('type','=','pksoutheast')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $masthead = url().'/images/banner_subpage/banner16.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Manufacturing",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Packaging Division",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "South East Asia Paper Products Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = "PACKAGING DIVISION";
                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontpkcanpac',array(
                                                   'page' => $page[0],
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'processlistings' => $processlistings

                                                    )
                                 );
          }

           public function palmoilFrontRefinery()
          {
                $page = Page::where('type','=','pmrefinery')->where('published','=','1')->get();
                $slidingbanners = Slidingbanner::where('type','=','pmrefinery')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $processlistings = Processeslisting::where('type','=','pmrefinery')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $masthead = url().'/images/banner_subpage/banner12.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Manufacturing",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Palm Oil Refinery Division",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "Yee Lee Edible Oils Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = "PACKAGING DIVISION";
                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontpkcanpac',array(
                                                   'page' => $page[0],
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'processlistings' => $processlistings

                                                    )
                                 );
          }

           public function palmoilFrontMill()
          {
                $page = Page::where('type','=','pmmill')->where('published','=','1')->get();
                $slidingbanners = Slidingbanner::where('type','=','pmmill')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $processlistings = Processeslisting::where('type','=','pmmill')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $masthead = url().'/images/banner_subpage/banner4.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Manufacturing",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Palm Oil Mill Division",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "Yee Lee Palm Oil Industries Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = "PACKAGING DIVISION";
                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontpkcanpac',array(
                                                   'page' => $page[0],
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'processlistings' => $processlistings

                                                    )
                                 );
          }
          /* End of Front Controller Methods */
}

