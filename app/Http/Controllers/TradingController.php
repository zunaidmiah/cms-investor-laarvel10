<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Slidingbanner;
use App\Models\Brandslisting;
use App\Models\Page;
use Illuminate\Http\Request;

class TradingController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default TradingController
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/




          /* Front Controller Methods */
          public function tradingFrontYelee()
          {
                $slidingbanners = Slidingbanner::where('type','=','tdyelee')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $brandslistings = Brandslisting::where('type','=','tdyelee')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $page = Page::where('type','=','tdyelee')->where('published','=',1)->get();
                $masthead = url().'/images/banner_subpage/banner11.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Trading",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Trading Division",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "Yee Lee Trading Co. Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = $page[0]->page_title;

                $mainMenuTitle = $page[0]->left_block2_title;
                return View::make('trading',array(
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'page' => $page[0],
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'brandslistings' => $brandslistings

                                                    )
                                 );
          }


          /* End of Front Controller Methods */

          /* Admin Methd */
          public function tradingAdminYelee(Request $req)
          {
                $page = Page::where('type','=','tdyelee')->where('published','=',1)->get();

				/* Paginate Count Section */

             $pgCount = Slidingbanner::where('type','=','tdyelee')->count();
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
                $slidingbanners = Slidingbanner::where('type','=','tdyelee')->paginate($noperpage);
				 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }

				 /* Paginate Count Section */
             $pgCount = Brandslisting::where('type','=','tdyelee')->count();
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
				$corebusinesses = Brandslisting::where('type','=','tdyelee')->paginate($noperpage);
				  if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }
                return View::make('admintradingyelee',array(
                                                   'slidingbanners' => $slidingbanners,
												   'cntarray1' => $cntarray1,
                                                   'corebusinesses' => $corebusinesses,
												   'cntarray2' => $cntarray2,
                                                   'page' => $page[0]

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
        public function adminDeleteBanner(Request $req) {
		   $id = $req->input('bannerid');
           $pressrelease = Slidingbanner::findOrFail($id);
		   $pressrelease->delete();
		   if($pressrelease)
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
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
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
          public function adminDeleteAllBanner() {

           $slidingbanners = Slidingbanner::where('type','=','tdyelee')->delete();
		   if($slidingbanners)
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

        }

           public function addBrands(Request $req) {
           $brand = Brandslisting::create($req->all());
           if($brand)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Brand Added Successfully.</p>
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
	   public function adminDeleteBrand(Request $req) {
		   $id = $req->input('brandid');
           $pressrelease = Brandslisting::findOrFail($id);
		   $pressrelease->delete();
		   if($pressrelease)
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
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
        public function adminDeleteAllBrands() {

           $slidingbanners = Brandslisting::truncate();
		   if($slidingbanners)
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

        }
        public function editBrands(Request $req) {
           $brandId = $req->input('brandid');
           $brand = Brandslisting::find($brandId);
           $brand->bannerimage = $req->file('bannerimage');
           $brand->title = $req->input('title');
           $brand->short_description = $req->input('short_description');
           $brand->url = $req->input('url');
           $brand->display_order = $req->input('display_order');
           $brand->active = $req->input('active');
           $brand->type = $req->input('type');
            if($brand->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Brand Edited Successfully.</p>
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

          /* End of Admin Method */
}

