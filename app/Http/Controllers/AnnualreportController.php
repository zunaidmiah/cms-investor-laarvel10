<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Annualreport;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AnnualreportController extends BaseController {

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



        public function adminAnnualreport(Request $req)
        {
		  $page = Page::where('type','=','annualreport')->where('published','=',1)->get();
		  $pgCount = Annualreport::count();
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
         $annualreport = Annualreport::paginate($noperpage);
					 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }

		  return View::make('adminannualreport', array ( 'page' => $page, 'annualreports'=>$annualreport,'cntarray1' => $cntarray1));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }

        public function adminAddReports(Request $req) {
           $slidingbanners = Annualreport::create($req->all());
           if($slidingbanners)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Annual Report Added Successfully.</p>
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
public function adminEditReports(Request $req) {
           $sementrasbannerId = $req->input('sementrasbannerid');
           $banner = Annualreport::find($sementrasbannerId);
           $banner->image = $req->file('image');
		   $banner->pdf = $req->file('pdf');
           $banner->title = $req->input('title');
           $banner->date = $req->input('date');
		    $banner->short_description = $req->input('short_description');
           $banner->active = $req->input('active');
            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Annual Report Edited Successfully.</p>
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
        public function adminDeleteReports(Request $req) {
		   $id = $req->input('sementrasbannerid');
           $banner = Annualreport::findOrFail($id);
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
		public function adminDeleteAllReports() {

           $slidingbanners = Annualreport::truncate();
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

        public function frontAnnualreport()
        {
	      $page = Page::where('type','=','annualreport')->where('published','=',1)->get();
	      $annualreport = Annualreport::where('active','=',1)->orderBy(DB::raw("STR_TO_DATE(date, '%d/%m/%Y')"),'desc')->get();

              $pageTitle = $page[0]->left_block1_title;
              $masthead = url().'/images/banner_subpage/banner7.jpg';
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
                                                   "title" => "Annual Reports",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = $page[0]->page_title;
                return View::make('frontannualreport',array(
                                                       'page' => $page[0],
                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'pageTitle' => $pageTitle ,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead,
                                                       'annualreports'=>$annualreport

                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }


}

