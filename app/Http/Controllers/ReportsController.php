<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Report;
use App\Models\Alerts;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ReportsController extends BaseController {

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


         public function AnnualReports(Request $req) {

                $page = Page::where('type','=','annualreports')->where('published','=',1)->get();
		$pgCount = Report::where('type','=','annualreports')->count();
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
             }
             else {

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','annualreports')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('adminannualreports',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
		public function AnnualAudit(Request $req) {

                $page = Page::where('type','=','annualaudit')->where('published','=',1)->get();
		        $pgCount = Report::where('type','=','annualaudit')->count();
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

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','annualaudit')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('adminannualaudit',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
		public function QuarterlyReports(Request $req) {

                $page = Page::where('type','=','quarterlyreports')->where('published','=',1)->get();
		        $pgCount = Report::where('type','=','quarterlyreports')->count();
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

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','quarterlyreports')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('adminquarterlyreports',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
		public function CircularReports(Request $req) {

                $page = Page::where('type','=','circularreports')->where('published','=',1)->get();
		        $pgCount = Report::where('type','=','circularreports')->count();
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

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','circularreports')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('admincircularreports',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
		public function ProspectusarReports(Request $req) {

                $page = Page::where('type','=','prospectusarreports')->where('published','=',1)->get();
		        $pgCount = Report::where('type','=','prospectusarreports')->OrderBy('updated_at','DESC')->count();
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

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','prospectusarreports')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('adminprospectusarreports',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
		public function AnalystReports(Request $req) {

                $page = Page::where('type','=','analystreports')->where('published','=',1)->get();
		        $pgCount = Report::where('type','=','analystreports')->count();
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

                   $noperpage = 100;
               }
             /* End of Paginate Count Section */
           $Profileslisting = Report::where('type','=','analystreports')->OrderBy('updated_at','DESC')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
		        return View::make('adminanalystreports',array(
                                                   'page' => $page,
												   'profilelist'=>$Profileslisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

        }
       public function Add(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
            // print "<pre>";print_r($req->all());exit("checing..");
            $diradd = Report::create($req->all());
             if($diradd)
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
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
		  public function Edit(Request $req){
        // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

        $proid              = $req->input('id');
        $banner             = Report::find($proid);
        $banner->title      = $req->input('title');
        $banner->date       = $req->input('date');
		    $banner->content    = $req->input('content');
        $banner->active     = $req->input('active');
        $banner->pdf        = $req->file('pdf');
		    $banner->pdf2       = $req->file('pdf2');
		    $banner->pdf3       = $req->file('pdf3');
		    $banner->pdf4       = $req->file('pdf4');
        $banner->pdf5       = $req->file('pdf5');
        $banner->pdf6       = $req->file('pdf6');
        $banner->pdf7       = $req->file('pdf7');
        $banner->pdf8       = $req->file('pdf8');
        $banner->pdf9       = $req->file('pdf9');
        $banner->pdf10      = $req->file('pdf10');
        $pdf11_file = $req->file('pdf11');
        $pdf11_labelname = $req->input('pdf11_name');
        if(!empty($pdf11_file)){
          $banner->pdf11    = $req->file('pdf11');
          if(!empty($pdf11_labelname))
            $banner->pdf11_name = $pdf11_labelname;
        }
        $pdf12_file = $req->file('pdf12');
        $pdf12_labelname = $req->input('pdf12_name');
        if(!empty($pdf12_file)){
          $banner->pdf12      = $req->file('pdf12');
          if(!empty($pdf12_labelname))
            $banner->pdf12_name = $req->input('pdf12_name');
        }
        $pdf13_file = $req->file('pdf13');
        $pdf13_labelname = $req->input('pdf13_name');
        if(!empty($pdf13_file)){
          $banner->pdf13      = $req->file('pdf13');
          if(!empty($pdf13_labelname))
            $banner->pdf13_name = $req->input('pdf13_name');
        }
        $pdf14_file = $req->file('pdf14');
        $pdf14_labelname = $req->input('pdf14_name');
        if(!empty($pdf14_file)){
          $banner->pdf14      = $req->file('pdf14');
          if(!empty($pdf14_labelname))
            $banner->pdf14_name = $req->input('pdf14_name');
        }
		    $banner->image      = $req->file('image');

            if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
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

           public function DeleteMultipleReports(Request $req){
            $id = $req->input('deleteid');
            //  print_r($id);
            //  exit;

            $ids= explode(',',$id);
            $dirpro = Report::whereIn('id', $ids)->delete();
            if($dirpro)
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
                 <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                 <p>Something happened try again.</p>
               </div>');
            }
          }


		   public function DeleteAll(Request $req) {
		   $type = $req->input('type');
           $dirp = Report::where('type','=',$type)->delete();
		   if($dirp)
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
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
		public function SingleDelete(Request $req) {
		   $id = $req->input('dirid');
           $dirpro = Report::findOrFail($id);
		   $dirpro->delete();
		   if($dirpro)
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
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }


		public function NewsAlert(Request $req)
    {
      $page = Page::where('type','=','newsalerts')->where('published','=',1)->get();
      $pgCount = Alerts::count();
      for ($i = 1; $i <= $pgCount; $i++) {
        if($i == 1) {
          $cntArr[10] = 10;
        }

        if($i == 11) {
          $cntArr[20] = 20;
        }

        if($i == 21) {
          $cntArr[30] = 30;
        }

        if($i == 31) {
          $cntArr[50] = 50;
        }

        if($i == 51) {
          $cntArr[100] = 100;
        }
      }

      if($req->input('noperpage1')) {
        $noperpage = $req->input('noperpage1');
      }
      else {
        $noperpage = 100;
      }

      /* End of Paginate Count Section */
      $Profileslisting = Alerts::OrderBy('updated_at','DESC')->paginate($noperpage);
      if($pgCount > 0) {
        $cntarray1 = $cntArr;
      }
      else {
        $cntarray1 = 0;
      }
      return View::make('admininvestornewsalert',array(
        'page' => $page,
        'profilelist'=>$Profileslisting,
        'cntarray1' => $cntarray1
        )
      );
    }

     public function export_subscriber(){

      $table = Alerts::all();
    $filename = "subscribers.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('active', 'name', 'email'));

    foreach($table as $row) {
        fputcsv($handle, array($row['active'], $row['name'], $row['email']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    return Response::download($filename, 'subscribers.csv', $headers);

     }

		public function AddNewsAlert(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
            $diradd = Alerts::create($req->all());
             if($diradd)
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
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

	   /* Subscribe / Unsubscribe */
	   public function SubscribeNewsAlertSubmit(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
           $email = $req->input('email');
		   $alertcnt = Alerts::where('email' , '=', $email)->count();
		   if( $alertcnt == 0)
		   {
			   $diradd = Alerts::create($req->all());
			   if($diradd)
			  {
				  return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Success!</strong>
				  <p>News Alert Subscribed Successfully.</p>
				</div>');
			  }
			  else
			  {
				  return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Error!</strong>
				  <p>Something happened try again.</p>
				</div>');
			  }
		   }
		   else
		   {
			    return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Error!</strong>
				  <p>This email id already exists.</p>
				</div>');
		   }
          }

		 public function UnSubscribeNewsAlertSubmit(Request $req) {
		   $email = $req->input('email');
		   $alertcnt = Alerts::where('email' , '=', $email)->count();
		   if($alertcnt > 0)
		   {
			 $alert = Alerts::where('email' , '=', $email)->first();
			 $alert->delete();
			 if($alert)
			 {
				  return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Success!</strong>
				  <p>Unsubscribed Successfully.</p>
				</div>');
			 }
			 else
			 {
				 return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Error!</strong>
				  <p>Something happened try again.</p>
				</div>');
			 }
		   }
		   else
		   {
			    return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
				  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
				  <i class="fa fa-check-circle"></i> <strong>Error!</strong>
				  <p>This email ID has not subscribed to the News Alerts yet. Thank you.</p>
				</div>');
		   }

        }

	   /* End of Subscribe / Unsubscribe */
		  public function SingleNewsAlertsDelete(Request $req) {
		   $id = $req->input('dirid');
           $dirpro = Alerts::findOrFail($id);
		   $dirpro->delete();
		   if($dirpro)
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
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }

        public function DeleteMultipleNewsAlerts(Request $req){
          $id = $req->input('deleteid');
          //  print_r($id);
          //  exit;

          $ids= explode(',',$id);
          $dirpro = Alerts::whereIn('id', $ids)->delete();
          if($dirpro)
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
               <i class="fa fa-check-circle"></i> <strong>Error!</strong>
               <p>Something happened try again.</p>
             </div>');
          }
        }


		   public function DeleteAllNewsAlerts() {

           $dirp = Report::truncate();
		   if($dirp)
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
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }

		 public function EditNewsAlert(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

           $proid = $req->input('id');
           $banner = Alerts::find($proid);
           $banner->name = $req->input('name');
           $banner->email = $req->input('email');
           $banner->active = $req->input('active');
           if($banner->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
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

		  public function NewsAlertSingleDelete(Request $req) {
		   $id = $req->input('dirid');
           $dirpro = Alerts::findOrFail($id);
		   $dirpro->delete();
		   if($dirpro)
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
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
           }

        }
		 public function frontPriceGainCalculator() {

                $pageTitle = "Price Gain / Loss Calculator";
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
                                                   "title" => "Investor Tools",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Price Gain / Loss Calculator",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = "Price Gain / Loss Calculator";
                $metaTitle = $mainMenuTitle;
		return View::make('frontinvestortoolpricegaincalculator',array(
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine

                                                    )
                                 );
         }

		 public function frontNewsAlert() {

               $page = Page::where('type','=','newsalerts')->where('published','=',1)->get();
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
                                                   "title" => "Investor Tools",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "News Alert",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Property Development & Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle.":: Subscribe";

                   return View::make('frontinvestornewsalert',array(
                                                   'page' => $page,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'metaTitle' => $metaTitle


												     )
                                 );

        }

		public function frontNewsAlertUnsubscribe() {

               $page = Page::where('type','=','newsalerts')->where('published','=',1)->get();
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
                                                   "title" => "Investor Tools",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "News Alert",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Property Development & Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle.":: Unsubscribe";

                   return View::make('frontinvestornewsalertunsubscribe',array(
                                                   'page' => $page,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'metaTitle' => $metaTitle


												     )
                                 );

        }

        public function frontAnnualReports()
        {
                $page = Page::where('type','=','annualreports')->where('published','=',1)->get();
                $Reports = Report::where('type','=','annualreports')->where('active','=',1)->OrderBy('updated_at','DESC')->get();
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Annual Reports",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;

                   return View::make('frontannualreports',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'metaTitle' => $metaTitle


												     )
                                 );
        }

         public function frontAnnualAudit(Request $req)
        {
                $page = Page::where('type','=','annualaudit')->where('published','=',1)->get();
                $dateSort = Report::select(DB::raw('DISTINCT SUBSTRING(date, -4, 4) as year'))->where('type','=','annualaudit')->where('active','=','1')->get();
                $dateSorts = Array();
                $dateSorts['all'] = 'List all options here';
                foreach ($dateSort as $dateSort1)
                {
                    $dateSorts[$dateSort1->year] = $dateSort1->year;
                }
                arsort($dateSorts);

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'all')
                    {
                      $Reports = Report::where('type','=','annualaudit')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                      $Reports = Report::where('type','=','annualaudit')->where('active','=',1)->where(DB::raw('SUBSTRING(date, -4, 4)'),'=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $Reports = Report::where('type','=','annualaudit')->where('active','=',1)->OrderBy('updated_at','DESC')->get();
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Annual Audited Accounts",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;

                   return View::make('frontannualaudit',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'dateSorts' => $dateSorts,
                                                   'metaTitle' => $metaTitle


												     )
                                 );
        }

        public function frontQuarterlyReports() {

                $page = Page::where('type','=','quarterlyreports')->where('published','=',1)->get();
                $Reports = Report::where('type','=','quarterlyreports')->where('active','=','1')->get();

				// Sergey Vratenkov: reverse sort by year
        $reps_by_year = array();
				foreach ($Reports as $report) {
					$year = substr(trim($report->date), -4, 4);
					$reps_by_year[$year] = $report;
				}
				krsort($reps_by_year);
				$Reports = array_values($reps_by_year);

		/*$qrtlyData = Array();
                foreach ($yearArrs as $yearArr)
                {
                    $matchYear = $yearArr->year;

                    $reportDatas = Report::where('type','=','quarterlyreports')->where('active','=',1)->where(DB::raw('SUBSTRING(date, -4, 4)'),'=',$matchYear)->orderBy('updated_at','DESC')->get();
                    $qrtlyData[$matchYear] = array();

                       array_push($qrtlyData[$matchYear],$reportDatas);

                }
                 */
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Quarterly Reports",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;
                return View::make('frontquarterlyreports',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'metaTitle' => $metaTitle


												     )
                                 );


        }


         public function frontAnalystReports()
        {
                $page = Page::where('type','=','analystreports')->where('published','=',1)->get();
                $Reports = Report::where('type','=','analystreports')->OrderBy('updated_at','DESC')->get();
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Analyst Reports",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;

                   return View::make('frontanalystreports',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'metaTitle' => $metaTitle


												     )
                                 );
        }


        public function frontCircularReports(Request $req) {

                $page = Page::where('type','=','circularreports')->where('published','=',1)->get();
                $dateSort = Report::select(DB::raw('DISTINCT SUBSTRING(date, -4, 4) as year'))->where('type','=','circularreports')->where('active','=','1')->get();
                $dateSorts = Array();
                $dateSorts['all'] = 'List all options here';
                foreach ($dateSort as $dateSort1)
                {
                    $dateSorts[$dateSort1->year] = $dateSort1->year;
                }
                arsort($dateSorts);

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'all')
                    {
                      $Reports = Report::where('type','=','circularreports')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                      $Reports = Report::where('type','=','circularreports')->where('active','=',1)->where(DB::raw('SUBSTRING(date, -4, 4)'),'=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $Reports = Report::where('type','=','circularreports')->where('active','=',1)->OrderBy('updated_at','DESC')->get();
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "Circulars",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Oil Palm Plantation Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;

                   return View::make('frontcircularreports',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'dateSorts' => $dateSorts,
                                                   'metaTitle' => $metaTitle


												     )
                                 );
        }

        public function frontProspectusarReports(Request $req) {

                $page = Page::where('type','=','prospectusarreports')->where('published','=',1)->get();
                $dateSort = Report::select(DB::raw('DISTINCT SUBSTRING(date, -4, 4) as year'))->where('type','=','prospectusarreports')->where('active','=','1')->get();
                $dateSorts = Array();
                $dateSorts['all'] = 'List all options here';
                foreach ($dateSort as $dateSort1)
                {
                    $dateSorts[$dateSort1->year] = $dateSort1->year;
                }
                arsort($dateSorts);

                if ($req->has('datesort'))
                {
                    $dateSort = $req->input('datesort');
                    if($dateSort == 'all')
                    {
                      $Reports = Report::where('type','=','prospectusarreports')->where('active','=',1)->orderBy('updated_at','DESC')->get();
                    }
                    else
                    {
                      $Reports = Report::where('type','=','prospectusarreports')->where('active','=',1)->where(DB::raw('SUBSTRING(date, -4, 4)'),'=',$dateSort)->orderBy('updated_at','DESC')->get();
                    }
                }

                else {

                    $dateSort = '';
                    $Reports = Report::where('type','=','prospectusarreports')->where('active','=',1)->OrderBy('updated_at','DESC')->get();
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
                                                   "title" => "Reports",
                                                   "url" => ""
                                                ),
                                    3 => array
                                                (
                                                   "title" => "AGM/EGM/MSWG",
                                                   "url" => ""
                                                )

                                    );
                $tagLine = "Property Development & Investment Holdings";
                $mainMenuTitle = $page[0]->page_title;
                $metaTitle = $mainMenuTitle;

                   return View::make('frontprospectusareports',array(
                                                   'page' => $page,
                                                   'Reports' => $Reports,
                                                   'pageTitle' => $pageTitle,
                                                   'masthead' => $masthead,
                                                   'breadcrumbs' => $breadcrumbs,
                                                   'tagLine' => $tagLine,
                                                   'dateSorts' => $dateSorts,
                                                   'metaTitle' => $metaTitle


												     )
                                 );
        }

}
