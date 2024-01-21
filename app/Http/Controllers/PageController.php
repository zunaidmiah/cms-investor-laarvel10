<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Profile;
use App\Models\Pdf;
use App\Models\Slidingbanner;
use App\Models\Page;
use App\Models\Processeslisting;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Corebusiness;
use App\Models\Application;
use App\Models\Pressrelease;
use App\Models\Annualreport;
use App\Models\Brandslisting;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Report;
use App\Models\Alerts;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Career Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

        public function savePage(Request $req)
        {
           $pageId = $req->input('pageid');
           $pageType = $req->input('type');
           DB::table('pages')->where('type', '=', $pageType)->delete();
           $page = Page::create($req->all());
          // $queries = DB::getQueryLog();
          //$last_query = end($queries);
          //echo '<pre>';
         // print_r($last_query);
         // exit;
           if($page)
           {

		    if ($req->input('preview'))
             {
			 $redirecturl= '/'.$req->input('preview');
			 return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Page Published Successfully.</p>
              </div><script type="text/javascript">
			  window.open("'.url().$redirecturl.'","_blank");
                </script>');
			 }
			 else
			 {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Page Published Successfully.</p>
              </div>');
			  }
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
        public function adminDeleteMultipleBanner(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Slidingbanner::whereIn('id', $ids)->delete();
		  // $banner->delete();
		   if($banner)
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
		  public function adminDeleteMultipleProcesses(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Processeslisting::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
 public function adminDeleteMultipleIndexBanner(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Banner::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
       public function adminDeleteMultipleIndexCorebusinesses(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Corebusiness::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleVaccancies(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Career::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleApplicants(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Application::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultiplePressrelease(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Pressrelease::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleAnnual(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Annualreport::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleBrandlisting(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Brandslisting::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleFeedback(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Feedback::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function adminDeleteMultipleUserlist(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = User::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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

		///DirProfileDelete

		public function DirProDeleteMultiple(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Profile::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function PdfDeleteMultiple(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id);
		   $banner = Pdf::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
			public function ReportsDeleteMultiple(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Report::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function NewsAlertDeleteMultiple(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Alerts::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
		public function EventsDeleteMultiple(Request $req) {
		   $id = $req->input('deleteid');
		  $ids= explode(',',$id[0]);
		   $banner = Events::whereIn('id', $ids)->delete();
		 //  $banner->delete();
		   if($banner)
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
}

