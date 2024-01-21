<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Slidingbanner;
use App\Models\Processeslisting;
use App\Models\Page;
use Illuminate\Http\Request;


class PlantationController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Contact Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



        public function adminSementra(Request $req)
        {
		  $page = Page::where('type','=','sementra')->where('published','=',1)->get();

		  $pgCount = Slidingbanner::where('type','=','sementrabanner')->count();
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
           $sementrasbanner = Slidingbanner::where('type','=','sementrabanner')->paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }


		    /* Paginate Count Section */
             $pgCount = Processeslisting::where('type','=','plantationprocesses')->count();
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
            $processeslisting = Processeslisting::where('type','=','plantationprocesses')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray2 = $cntArr;
           }
           else {
           $cntarray2 = 0;
           }


          return View::make('adminsementra', array ( 'page' => $page, 'sementrasbanners'=>$sementrasbanner, 'processeslistings'=>$processeslisting,'cntarray1' => $cntarray1 , 'cntarray2' => $cntarray2 ));

        }
        public function oilplantationFront()
          {
                $slidingbanners = Slidingbanner::where('type','=','sementrabanner')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $processeslisting = Processeslisting::where('type','=','plantationprocesses')->where('active','=','1')->orderBy('display_order', 'ASC')->get();
                $page = Page::where('type','=','sementra')->where('published','=',1)->get();
                $masthead = url().'/images/banner_subpage/banner3.jpg';
                $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Plantation",
                                                   "url" => ""
                                                ),
                                     2 => array
                                                (
                                                   "title" => "Oil Palm Estate",
                                                   "url" => ""
                                                ),
                                     3 => array
                                                (
                                                   "title" => "Sementra Plantations Sdn Bhd",
                                                   "url" => ""
                                                )
                                    );
                $pageTitle = $page[0]->left_block1_title;
                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontplantation',array(
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'page' => $page[0],
                                                   'pageTitle' => $pageTitle,
                                                   'mainMenuTitle' => $mainMenuTitle,
                                                   'slidingbanners' => $slidingbanners,
                                                   'brandslistings' => $processeslisting

                                                    )
                                 );
          }

        public function adminAddSementra(Request $req) {
           $slidingbanners = Slidingbanner::create($req->all());
           if($slidingbanners)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding Banner Added Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
       }
public function adminEditSementra(Request $req) {
           $sementrasbannerId = $req->input('sementrasbannerid');
           $banner = Slidingbanner::find($sementrasbannerId);
           $banner->bannerimage = $req->file('bannerimage');
           $banner->title = $req->input('title');
           $banner->display_order = $req->input('display_order');
           $banner->active = $req->input('active');
            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding banner Edited Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }
       }
        public function adminDeleteSementra(Request $req) {
		   $id = $req->input('sementrasbannerid');
           $banner = Slidingbanner::findOrFail($id);
		   $banner->delete();
		   if($banner)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
		public function adminDeleteAllSementra() {

           $slidingbanners = Slidingbanner::where('type','=','sementrabanner')->delete();
		   if($slidingbanners)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }


		///processes
		public function adminAddProcesses(Request $req) {
           $processeslisting = Processeslisting::create($req->all());
           if($processeslisting)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding Banner Added Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
           }
       }
public function adminEditProcesses(Request $req) {
           $processesId = $req->input('processesid');
           $banner = Processeslisting::find($processesId);
           $banner->bannerimage = $req->file('bannerimage');
           $banner->title = $req->input('title');
           $banner->display_order = $req->input('display_order');
		   $banner->short_description = $req->input('short_description');
           $banner->active = $req->input('active');
            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Sliding banner Edited Successfully.</p>
              </div>');
            }
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
            }
       }
        public function adminDeleteProcesses(Request $req) {
		   $id = $req->input('processesid');
           $processes = Processeslisting::findOrFail($id);
		   $processes->delete();
		   if($processes)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
		public function adminDeleteAllProcesses() {

           $processes = Processeslisting::where('type','=','plantationprocesses')->delete();
		   if($processes)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
           }
           else
           {
               return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
}

