<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Profile;
use App\Models\Pdf;
use App\Models\AnnouncementLinks;
use App\Models\Page;
use App\Models\Announcement;
use App\Models\CrawledAnnounce;
use App\Models\AnnouncementTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;



class CorporateController extends BaseController
{

  /*
	|--------------------------------------------------------------------------
	| Default CorporateController
	|--------------------------------------------------------------------------
	|
	| You may wish to sue controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


  public function General()
  {

    $page = Page::where('type', '=', 'general')->where('published', '=', 1)->get();
    return View::make(
      'admincorporategeneral',
      array(
        'page' => $page
      )
    );
  }
  public function DirProfile(Request $req)
  {

    $page = Page::where('type', '=', 'dirprofile')->where('published', '=', 1)->get();
    $pgCount = Profile::where('type', '=', 'profile')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Profile::where('type', '=', 'profile')->orderBy('position')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admindirprofile',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function KeyManagemenProfile(Request $req)
  {

    $page = Page::where('type', '=', 'keymanagement')->where('published', '=', 1)->get();
    $pgCount = Profile::where('type', '=', 'keymanagement')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Profile::where('type', '=', 'keymanagement')->orderBy('position')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminkeymanagement',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function DirProfileAdd(Request $req)
  {
    // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).


    $diradd = Profile::create($req->all());
    if ($diradd) {
      if ($req->hasFile('image')) {
        $req->file('image')->move(public_path() . "/uploads/profiles/", $req->file('image')->getClientOriginalName());
        $diradd->image = $req->file('image')->getClientOriginalName();
        $diradd->save();
      }
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function DirProfileDelete(Request $req)
  {
    $id = $req->input('dirid');
    $dirpro = Profile::findOrFail($id);
    $dirpro->delete();
    if ($dirpro) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function DirProfileDeleteMultiple(Request $req)
  {
    $id = $req->input('deleteid');
    $ids = explode(',', $id);

    $dirpro = Profile::whereIn('id', $ids)->delete();

    if ($dirpro) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                 <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                 <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                 <p>Deleted Successfully.</p>
               </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                 <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                 <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                 <p>Something happened try again.</p>
               </div>');
    }
  }

  public function DirProfileDeleteAll(Request $req)
  {
    $type = $req->input('type');
    $dirp = Profile::where('type', '=', $type)->delete();
    if ($dirp) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function DirProfileEdit(Request $req)
  {
    // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

    $proid = $req->input('id');
    $banner = Profile::find($proid);
    $banner->name = $req->input('name');
    $banner->position = $req->input('position');
    $banner->date = $req->input('date');
    $banner->active = $req->input('active');
    $banner->content = $req->input('content');
    if ($req->hasFile('image')) {
        $req->file('image')->move(public_path() . "/uploads/profiles/", $req->file('image')->getClientOriginalName());
      $banner->image = $req->file('image')->getClientOriginalName();
    }
    if ($banner->save()) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  /* End of Front Controller Methods */
  public function OurProperties(Request $req)
  {

    $page = Page::where('type', '=', 'ourproperties ')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'ourproperties')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'ourproperties ')->orderBy('updated_at', 'DESC')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminourproperties',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function OurSubsidiaries(Request $req)
  {

    $page = Page::where('type', '=', 'oursubsidiaries ')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'oursubsidiaries')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'oursubsidiaries ')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminoursubsidiaries',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function CorpGovernance(Request $req)
  {

    $page = Page::where('type', '=', 'corpgovernance')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'corpgovernance')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'corpgovernance')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admincorpgovernance',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function SustainabilityPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'sustainabilitypolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'sustainabilitypolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'sustainabilitypolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminsustainabilitypolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }


  public function GenderDiversityPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'genderdiversitypolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'genderdiversitypolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'genderdiversitypolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admingenderdiversitypolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }


  public function ExternalAuditorsAssessmentPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'externalauditorsassessmentpolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'externalauditorsassessmentpolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'externalauditorsassessmentpolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminexternalauditorsassessmentpolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }


  public function DirectorsFitAndProperPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'directorsfitandproperpolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'directorsfitandproperpolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'directorsfitandproperpolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admindirectorsfitandproperpolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }



  public function RemunerationPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'remunerationpolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'remunerationpolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'remunerationpolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminremunerationpolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }


  public function Cbce(Request $req)
  {

    $page = Page::where('type', '=', 'cbce')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'cbce')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 100;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'cbce')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admincbce',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function FinancialHighlights()
  {

    $page = Page::where('type', '=', 'financialhighlights')->where('published', '=', 1)->get();
    return View::make(
      'adminfinancialhighlights',
      array(
        'page' => $page
      )
    );
  }
  public function FinancialComprehensive(Request $req)
  {

    $page = Page::where('type', '=', 'financialcomprehensive')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'financialcomprehensive')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'financialcomprehensive')->orderBy('updated_at', 'DESC')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminfinancialcomprehensive',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function FinancialPosition(Request $req)
  {

    $page = Page::where('type', '=', 'financialposition')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'financialposition')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'financialposition')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminfinancialposition',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function FlowStatements(Request $req)
  {

    $page = Page::where('type', '=', 'flowstatements')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'flowstatements')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'flowstatements')->orderBy('created_at', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminflowstatements',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function Remunerations(Request $req)
  {

    $page = Page::where('type', '=', 'remunerations')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'remunerations')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'remunerations')->orderBy('created_at', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminremunerations',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function RemunerationsAdd(Request $req)
  {
    $diradd = Pdf::create($req->all());
    if ($diradd) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function RemunerationsDeleteMultiple(Request $req)
  {
    $id = $req->input('deleteid');
    $ids = explode(',', $id[0]);
    $banner = Pdf::whereIn('id', $ids)->delete();
    if ($banner) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function BoardRemunationCommittee(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'remunerations')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'remunerations')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'remunerations')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'remunerations')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'remunerations')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Board Committees",
        "url" => ""
      ),
      3 => array(
        "title" => "Remuneration Committee",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontremunationcommittee',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function RiskManagementCommittee(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'risk_management')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'risk_management')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'risk_management')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'risk_management')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'risk_management')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Board Committees",
        "url" => ""
      ),
      3 => array(
        "title" => "Risk Management Committee",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontriskmanagementcommittee',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function RiskManagement(Request $req)
  {

    $page = Page::where('type', '=', 'risk_management')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'risk_management')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'risk_management')->orderBy('created_at', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminriskmanagement',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }

  public function RiskManagementAdd(Request $req)
  {
    $diradd = Pdf::create($req->all());
    if ($diradd) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function RiskManagementDeleteMultiple(Request $req)
  {
    $id = $req->input('deleteid');
    $ids = explode(',', $id[0]);
    $banner = Pdf::whereIn('id', $ids)->delete();
    if ($banner) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }


  public function Equity(Request $req)
  {

    $page = Page::where('type', '=', 'equity')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'equity')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'equity')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminequity',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function FinancialQuarterlyReport(Request $req)
  {

    $page = Page::where('type', '=', 'financialquarterlyreport')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'financialquarterlyreport')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'financialquarterlyreport')->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminfinancialquarterlyreport',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function FinancialInfoSegmentalAnalysis()
  {

    $page = Page::where('type', '=', 'financialinfosegmentalanalysis')->where('published', '=', 1)->get();
    return View::make(
      'adminfinancialinfosegmentalanalysis',
      array(
        'page' => $page
      )
    );
  }
  public function FinancialRatioAnalysis()
  {

    $page = Page::where('type', '=', 'financialratioanalysis')->where('published', '=', 1)->get();
    return View::make(
      'adminfinancialratioanalysis',
      array(
        'page' => $page
      )
    );
  }
  public function WhistleBlowerPolicy(Request $req)
  {

    $page = Page::where('type', '=', 'whistleblowerpolicy')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'whistleblowerpolicy')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'whistleblowerpolicy')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminwhistleblowerpolicy',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function ManagementReviewOperations(Request $req)
  {

    $page = Page::where('type', '=', 'managementreviewoperations')->where('published', '=', 1)->get();
    $pgCount = Pdf::where('type', '=', 'managementreviewoperations')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        exit;
      }
    }
    if ($req->input('noperpage2')) {
      $noperpage = $req->input('noperpage2');
    } else {

      $noperpage = 10;
    }
    /* End of Paginate Count Section */
    $Profileslisting = Pdf::where('type', '=', 'managementreviewoperations')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminmanagementreviewoperations',
      array(
        'page' => $page,
        'profilelist' => $Profileslisting,
        'cntarray1' => $cntarray1
      )
    );
  }
  public function ManagementPastPerformanceReview()
  {

    $page = Page::where('type', '=', 'managementpastperformancereview')->where('published', '=', 1)->get();
    return View::make(
      'adminmanagementpastperformancereview',
      array(
        'page' => $page
      )
    );
  }
  public function OurSubsidiariesAdd(Request $req)
  {
    // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
    $diradd = Pdf::create($req->all());
    if ($diradd) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function DeleteAllPdf(Request $req)
  {
    $type = $req->input('type');
    $dirp = Pdf::where('type', '=', $type)->delete();
    if ($dirp) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function PdfSingleDelete(Request $req)
  {
    $id = $req->input('dirid');
    $dirpro = Pdf::findOrFail($id);
    $dirpro->delete();
    if ($dirpro) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function PdfEdit(Request $req)
  {
    // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
    $proid = $req->input('id');
    $banner = Pdf::find($proid);
    $banner->title = $req->input('title');
    $banner->date = $req->input('date');
    $banner->active = $req->input('active');
    $banner->pdf = $req->file('pdf');
    if ($banner->save()) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function NewsCenter()
  {

    $page = Page::where('type', '=', 'newscenter')->where('published', '=', 1)->get();

    return View::make('adminnewscenter', array(
      'page' => $page,
    ));
  }

  public function AnnouncementLinks(Request $req)
  {
    $page = Page::where('type', '=', 'announcementlinks')->where('published', '=', 1)->get();

    $pgCount = AnnouncementLinks::where('status', 1)->count();

    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 10;
    }

    $announcementtypeLists = AnnouncementTypes::select('Title')->get();
    $i = 0;

    foreach ($announcementtypeLists as $types) {
      $name = DB::select(DB::raw(' select * from announcementlinks
                        where announcementtype = ' . "'$types->Title'" . ''));

      if (empty($name[0]->announcementname)) {
        unset($announcementtypeLists[$i]);
      } else {
        $types['names'] = $name;
      }

      $i++;
    }

    $AdditionalListing = AnnouncementLinks::where('status', 1)->orderBy('created_at', 'desc')->paginate($noperpage);

    $last_updated = AnnouncementLinks::orderBy('updated_at', 'desc')->first();

    if ($last_updated) {
      $last_updated = date('d M, Y @ g:ia', strtotime($last_updated->updated_at));
    } else {
      $last_updated = 'none';
    }


    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }

    return View::make('adminannouncementlinks', array(
      'page' => $page,
      'linklisting' => $AdditionalListing,
      'announcementtypelisting' => $announcementtypeLists,
      'cntarray1' => $cntarray1
    ))->with('last_updated', $last_updated);
  }

  // Front Functions
  public function frontGeneral()
  {

    $page = Page::where('type', '=', 'general')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Corporate Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Statutory Information",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;

    return View::make(
      'frontcorporategeneral',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine
      )
    );
  }

  public function frontDirProfile(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $profiles = Profile::where('type', '=', 'profile')->where('active', '=', 1)->orderBy('position')->get();
      } else {
        $profiles = Profile::where('type', '=', 'profile')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('position')->get();
      }
    } else {

      $dateSort = '';
      $profiles = Profile::where('type', '=', 'profile')->orderBy('position')->where('active', '=', 1)->get();
    }

    $page = Page::where('type', '=', 'dirprofile')->where('published', '=', 1)->get();


    $profieDate = Profile::select('date')->where('type', '=', 'profile')->where('active', '=', 1)->orderBy('position')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Corporate Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Board of Directors",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcorporatedirprofile',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'profieDates' => $profieDates,
        'profiles' => $profiles
      )
    );
  }

  public function frontKeyManagemenProfile()
  {

    $page = Page::where('type', '=', 'keymanagement')->where('published', '=', 1)->get();
    $profiles = Profile::where('type', '=', 'keymanagement')->orderBy('position')->where('active', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Corporate Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Management Team",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcorporatekeymanagement',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'profiles' => $profiles
      )
    );
  }

  public function frontOurProperties(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      $pdfs = Pdf::where('type', '=', 'ourproperties')->where('active', '=', 1)->where(DB::raw('SUBSTRING(date, -4, 4)'), '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'ourproperties')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select(DB::raw('DISTINCT SUBSTRING(date, -4, 4) as year'))->where('type', '=', 'ourproperties')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->year] = $profileDate1->year;
    }

    $page = Page::where('type', '=', 'ourproperties')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Board Committees",
        "url" => ""
      ),
      3 => array(
        "title" => "Audit Management Committee",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcorporateourproperties',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontOurSubsidiaries(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'oursubsidiaries')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'oursubsidiaries')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'oursubsidiaries')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'oursubsidiaries')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'oursubsidiaries')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Terms of Reference",
        "url" => ""
      ),
      3 => array(
        "title" => "Remuneration Committee",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcorporateoursubsidiaries',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontCorpGovernance(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'corpgovernance')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'corpgovernance')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'corpgovernance')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'corpgovernance')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'corpgovernance')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Governance",
        "url" => ""
      ),
      3 => array(
        "title" => "Corporate Governance",
        "url" => ""
      )


    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcorporategovernance',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }
  public function frontWhistleBlowerPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'whistleblowerpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'whistleblowerpolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'whistleblowerpolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'whistleblowerpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'whistleblowerpolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Whistle Blower Policy",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontwhistleblowerpolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }
  public function frontManagementReviewOperations(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'managementreviewoperations')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'managementreviewoperations')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'managementreviewoperations')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'managementreviewoperations')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'managementreviewoperations')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Governance",
        "url" => ""
      ),
      3 => array(
        "title" => "Board Charter",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontmanagementreviewoperations',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontSustainabilityPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'sustainabilitypolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'sustainabilitypolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'sustainabilitypolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'sustainabilitypolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'sustainabilitypolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Sustainability Policy",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontsustainabilitypolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontGenderDiversityPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'genderdiversitypolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'genderdiversitypolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'genderdiversitypolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'genderdiversitypolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'genderdiversitypolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Gender Diversity Policy",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontgenderdiversitypolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }



  public function frontExternalAuditorsAssessmentPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'externalauditorsassessmentpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'externalauditorsassessmentpolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'externalauditorsassessmentpolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'externalauditorsassessmentpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'externalauditorsassessmentpolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "External Auditors Assessment Policy",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontexternalauditorsassessmentpolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }


  public function frontDirectorsFitAndProperPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'directorsfitandproperpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'directorsfitandproperpolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'directorsfitandproperpolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'directorsfitandproperpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'directorsfitandproperpolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Directors’ Fit and Proper Policy",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontdirectorsfitandproperpolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }


  public function frontRemunerationPolicy(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'remunerationpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'remunerationpolicy')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'remunerationpolicy')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'remunerationpolicy')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'remunerationpolicy')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Remuneration Policy",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontremunerationpolicy',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }


  public function frontCbce(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'cbce')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'cbce')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'cbce')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'cbce')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'cbce')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Code of Business Conduct & Ethics",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontcbce',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontShareholdersvotingrights(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'summaryofshareholdersvotingrights')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'summaryofshareholdersvotingrights')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {
      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'summaryofshareholdersvotingrights')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }

    $profieDate = Pdf::select('date')->where('type', '=', 'summaryofshareholdersvotingrights')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'summaryofshareholdersvotingrights')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Summary of Shareholders' Voting Rights",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontsummaryofshareholdersvotingrights',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontEdividend(Request $req)
  {

    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'edividend')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'edividend')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {
      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'edividend')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }

    $profieDate = Pdf::select('date')->where('type', '=', 'edividend')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    //$profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }

    $page = Page::where('type', '=', 'edividend')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "eDividend",
        "url" => ""
      )

    );
    $tagLine = "Bursa Listed Company";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontedividend',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }
  public function frontManagementPastPerformanceReview()
  {


    $page = Page::where('type', '=', 'managementpastperformancereview')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Management Analysis",
        "url" => ""
      ),
      3 => array(
        "title" => "Past Performance Review",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    $metaTitle = $mainMenuTitle;
    return View::make(
      'frontmanagementpastperformancereview',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'metaTitle' => $metaTitle
      )
    );
  }


  public function frontFinancialHighlights()
  {

    $page = Page::where('type', '=', 'financialhighlights')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Financial Statistics",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontfinancialhighlights',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine
      )
    );
  }
  public function frontFinancialComprehensive(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'financialcomprehensive')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'financialcomprehensive')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'financialcomprehensive')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'financialcomprehensive')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'financialcomprehensive')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Comprehensive Income",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontfinancialcomprehensive',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }
  public function frontFinancialPosition(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'financialposition')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'financialposition')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'financialposition')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'financialposition')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'financialposition')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Financial Position",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontfinancialposition',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontFinancialFlowStatements(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'flowstatements')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'flowstatements')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'flowstatements')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'flowstatements')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'flowstatements')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Board Committees",
        "url" => ""
      ),
      3 => array(
        "title" => "Nomination Committee",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontflowstatements',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontFinancialEquity(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'equity')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'equity')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'equity')->orderBy('updated_at', 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'equity')->where('active', '=', 1)->orderBy('updated_at', 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'equity')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Governance",
        "url" => ""
      ),
      2 => array(
        "title" => "Policies",
        "url" => ""
      ),
      3 => array(
        "title" => "Anti-Bribery &amp; Anti-Corruption Policy",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontequity',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }


  public function frontLatestReport(Request $req)
  {
    if ($req->has('datesort')) {
      $dateSort = $req->input('datesort');
      if ($dateSort == 'latest') {
        $pdfs = Pdf::where('type', '=', 'financialquarterlyreport')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      } else {
        $pdfs = Pdf::where('type', '=', 'financialquarterlyreport')->where('active', '=', 1)->where('date', '=', $dateSort)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->get();
      }
    } else {

      $dateSort = '';
      $pdfs = Pdf::where('type', '=', 'financialquarterlyreport')->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->where('active', '=', 1)->get();
    }
    $profieDate = Pdf::select('date')->where('type', '=', 'financialquarterlyreport')->where('active', '=', 1)->orderBy(DB::raw("STR_TO_DATE(date,'%d/%m/%Y')"), 'DESC')->distinct()->get();

    $profieDates = array();
    $profieDates['latest'] = 'Latest';
    foreach ($profieDate as $profileDate1) {
      $profieDates[$profileDate1->date] = $profileDate1->date;
    }
    $page = Page::where('type', '=', 'financialquarterlyreport')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Key Audit Matters",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontquarterlyreportslatest',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'pdfs' => $pdfs,
        'Reports' => $pdfs,
        'profieDates' => $profieDates
      )
    );
  }

  public function frontFinancialSegmentalAnalysis()
  {

    $page = Page::where('type', '=', 'financialinfosegmentalanalysis')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Highlights",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontfinancialinfosegmentalanalysis',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine
      )
    );
  }

  public function frontFinancialRatioAnalysis()
  {

    $page = Page::where('type', '=', 'financialratioanalysis')->where('published', '=', 1)->get();
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "Financial Information",
        "url" => ""
      ),
      3 => array(
        "title" => "Production Statistics",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontfinancialratioanalysis',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine
      )
    );
  }

  public function frontBursaAnnounceListduplicate()
  {

    $page = Page::where('type', '=', 'newscenter')->where('published', '=', 1)->get();

    $announcementtypeLists = AnnouncementTypes::select('Title')->get();

    $i = 0;

    foreach ($announcementtypeLists as $types) {
      $name = DB::select(DB::raw(' select * from announcementlinks
                        where announcementtype = ' . "'$types->Title'" . ''));

      if (empty($name[0]->announcementname)) {
        unset($announcementtypeLists[$i]);
      } else {
        $types['names'] = $name;
      }

      $i++;
    }


    //$announcelists = Announcement::orderBy(DB::Raw("STR_TO_DATE( date_of_publishing,  '%d %M %Y' )"), 'DESC')->paginate(5);
    $announcelists = CrawledAnnounce::where('status', '=', 1)->orderBy('date_of_publishing', 'DESC')->paginate(5);

    $details_annc = [];
    $details_annc['Entitlement'] = 'investorrelations/frontentitlementdetail';
    $details_annc['Entitlement(Notice of Book Closure)'] = 'investorrelations/frontentitlementdetail'; //added
    $details_annc['Investor Alert Announcement'] = 'investorrelations/frontinvestoralertdetail';
    $details_annc['Investor Alert'] = 'investorrelations/frontinvestoralertdetail';
    $details_annc['Additional Listing Announcement (ALA)'] = 'investorrelations/frontadditionallistingdetail';
    $details_annc['Listing Circular'] = 'investorrelations/frontlistingcirculardetail';
    $details_annc['Trading of rights announcement'] = 'investorrelations/fronttradingrightdetail';
    $details_annc['Financial Results'] = 'investorrelations/frontfinanciallistingdetail';
    $details_annc['General Announcement'] = 'investorrelations/frontgeneralannouncementdetail';
    $details_annc['General Meeting'] = 'investorrelations/frontgeneralmeetingdetail';
    $details_annc['General Meetings'] = 'investorrelations/frontgeneralmeetingdetail';
    $details_annc['Special Announcements'] = 'investorrelations/frontspecialannouncementdetail';
    $details_annc["Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965"] = 'investorrelations/directorinterestdetail';
    $details_annc["Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965"] = 'investorrelations/shareholderdetail';
    $details_annc['Change in Substantial Shareholders Interest Pursuant to Form 29B'] = 'investorrelations/shareholderdetail';
    $details_annc["Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016"] = 'investorrelations/interestshareholdersection138detail';
    $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016"] = 'investorrelations/interestshareholdersection137detail';
    $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965"] = 'investorrelations/interestshareholderdetail';
    $details_annc["Notice of Person Ceasing (29C)"] = 'investorrelations/personceasingdetail';
    $details_annc['Change in Audit Committee'] = 'investorrelations/auditcommitteedetail';
    $details_annc['Change in Risk Committee'] = 'investorrelations/riskcommitteedetail';
    $details_annc['Change in Boardroom'] = 'investorrelations/boardroomdetail';
    $details_annc['Change in Chief Executive Officer'] = 'investorrelations/chiefexecutiveofficerdetail';
    $details_annc['Change in Principal Officer'] = 'investorrelations/principalofficerdetail';
    $details_annc['Change of Address'] = 'investorrelations/addressdetail';
    $details_annc['Change of Company Secretary'] = 'investorrelations/compsectretarydetail';
    $details_annc['Change of Registrar'] = 'investorrelations/registrardetail';
    $details_annc['Change in Nomination Committee'] = 'investorrelations/nominationcommitteedetail';
    $details_annc['Change in Remuneration Committee'] = 'investorrelations/remunerationcommitteedetail';
    $details_annc['Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement'] = 'investorrelations/resaledetail';
    $details_annc["Notice of Shares Buy Back by a Company pursuant to Form 28A"] = 'investorrelations/companypursuantdetail';
    $details_annc['Notice of Shares Buy Back by a Company pursuant to Form 28B'] = 'investorrelations/sharecompanypursuantdetail';
    $details_annc['Notice of Shares Buy Back - Immediate Announcement'] = 'investorrelations/immediateannouncementdetail';

    $details_annc['General Announcement for PLC'] = 'investorrelations/frontgeneralannouncementdetail';
    $details_annc['Additional Listing Announcement'] = 'investorrelations/frontadditionallistingdetail';
    $details_annc['Additional Listing Announcement /Subdivision of Shares'] = 'investorrelations/frontadditionallistingdetail';
    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "News Centre",
        "url" => ""
      ),
      3 => array(
        "title" => "Bursa Announcements",
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;


    return View::make(
      'frontbursaannouncelist1',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'announcelists' => $announcelists,
        'typelisting' => $announcementtypeLists,
        'details_annc' => $details_annc
      )
    );
  }


  public function frontBursaAnnounceList()
  {

    $page = Page::where('type', '=', 'newscenter')->where('published', '=', 1)->get();


    //$announcelists = Announcement::orderBy(DB::Raw("STR_TO_DATE( date_of_publishing,  '%d %M %Y' )"), 'DESC')->paginate(5);
    $announcelists = CrawledAnnounce::where('status', '=', 1)->orderBy('date_of_publishing', 'DESC')->paginate(5);
    //echo "<pre>";
    //print_r($announcelists);
    //die();

    $details_annc = [];
    $details_annc['Entitlement'] = 'investorrelations/frontentitlementdetail';
    $details_annc['Entitlement(Notice of Book Closure)'] = 'investorrelations/frontentitlementdetail'; //added
    $details_annc['Investor Alert Announcement'] = 'investorrelations/frontinvestoralertdetail';
    $details_annc['Investor Alert'] = 'investorrelations/frontinvestoralertdetail';
    $details_annc['Additional Listing Announcement (ALA)'] = 'investorrelations/frontadditionallistingdetail';
    $details_annc['Listing Circular'] = 'investorrelations/frontlistingcirculardetail';
    $details_annc['Document Submission'] = 'investorrelations/frontlistingcirculardetail';
    $details_annc['Trading of rights announcement'] = 'investorrelations/fronttradingrightdetail';
    $details_annc['Financial Results'] = 'investorrelations/frontfinanciallistingdetail';
    $details_annc['General Announcement'] = 'investorrelations/frontgeneralannouncementdetail';
    $details_annc['General Meeting'] = 'investorrelations/frontgeneralmeetingdetail';
    $details_annc['General Meetings'] = 'investorrelations/frontgeneralmeetingdetail';
    $details_annc['Special Announcements'] = 'investorrelations/frontspecialannouncementdetail';
    $details_annc["Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965"] = 'investorrelations/directorinterestdetail';
    $details_annc["Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965"] = 'investorrelations/shareholderdetail';
    $details_annc['Change in Substantial Shareholders Interest Pursuant to Form 29B'] = 'investorrelations/shareholderdetail';
    $details_annc["Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016"] = 'investorrelations/interestshareholdersection138detail';
    $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016"] = 'investorrelations/interestshareholdersection137detail';
    $details_annc["Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965"] = 'investorrelations/interestshareholderdetail';
    $details_annc["Notice of Person Ceasing (29C)"] = 'investorrelations/personceasingdetail';
    $details_annc['Change in Audit Committee'] = 'investorrelations/auditcommitteedetail';
    $details_annc['Change in Risk Committee'] = 'investorrelations/riskcommitteedetail';
    $details_annc['Change in Boardroom'] = 'investorrelations/boardroomdetail';
    $details_annc['Change in Chief Executive Officer'] = 'investorrelations/chiefexecutiveofficerdetail';
    $details_annc['Change in Principal Officer'] = 'investorrelations/principalofficerdetail';
    $details_annc['Change of Address'] = 'investorrelations/addressdetail';
    $details_annc['Change of Company Secretary'] = 'investorrelations/compsectretarydetail';
    $details_annc['Change of Registrar'] = 'investorrelations/registrardetail';
    $details_annc['Change in Nomination Committee'] = 'investorrelations/nominationcommitteedetail';
    $details_annc['Change in Remuneration Committee'] = 'investorrelations/remunerationcommitteedetail';
    $details_annc['Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement'] = 'investorrelations/resaledetail';
    $details_annc["Notice of Shares Buy Back by a Company pursuant to Form 28A"] = 'investorrelations/companypursuantdetail';
    $details_annc['Notice of Shares Buy Back by a Company pursuant to Form 28B'] = 'investorrelations/sharecompanypursuantdetail';
    $details_annc['Notice of Shares Buy Back - Immediate Announcement'] = 'investorrelations/immediateannouncementdetail';

    $details_annc['General Announcement for PLC'] = 'investorrelations/frontgeneralannouncementdetail';
    $details_annc['Additional Listing Announcement'] = 'investorrelations/frontadditionallistingdetail';
    $details_annc['Additional Listing Announcement /Subdivision of Shares'] = 'investorrelations/frontadditionallistingdetail';

    $pageTitle = $page[0]->page_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "News Centre",
        "url" => ""
      ),
      3 => array(
        "title" => "Bursa Announcements",
        "url" => ""
      )
    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;


    return View::make(
      'frontbursaannouncelist',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'announcelists' => $announcelists,
        // 'typelisting' => $announcementtypeLists,
        'details_annc' => $details_annc
      )
    );
  }

  public function frontBursaAnnouncement($announce_id = null)
  {

    //echo Request::segment(4);exit;
    $page = Page::where('type', '=', 'newscenter')->where('published', '=', 1)->get();
    if ($announce_id) {
      $announcement = Announcement::where('id', '=', $announce_id)->get();
    } else {
      $announcement = Announcement::get();
    }

    $pageTitle = "<h2>" . $announcement[0]->title . "</h2>";
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "News Centre",
        "url" => ""
      ),
      3 => array(
        "title" => "Bursa Announcements",
        "url" => URL::to('/investorrelations/newscentre/bursaannouncements')
      ),
      4 => array(
        "title" => $announcement[0]->category,
        "url" => ""
      ),
      5 => array(
        "title" => $announcement[0]->title,
        "url" => ""
      )

    );

    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $page[0]->page_title;
    return View::make(
      'frontbursaannouncement',
      array(
        'page' => $page,
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'announcement' => $announcement[0]
      )
    );
  }

  public function frontEntitlementDetail(Request $req)
  {

    $entitle_title = urldecode($req->input('title'));


    $entitlement = Announcement::where('title', 'LIKE', "%$entitle_title%")->get();

    $pageTitle = $entitle_title;
    $masthead = url() . '/images/banner_subpage/banner13.jpg';
    $breadcrumbs = array(
      0 => array(
        "title" => "Home",
        "url" => ""
      ),
      1 => array(
        "title" => "Investor Relations",
        "url" => ""
      ),
      2 => array(
        "title" => "News Centre",
        "url" => ""
      ),
      3 => array(
        "title" => "Bursa Announcements",
        "url" => ""
      ),
      4 => array(
        "title" => "Entitlements Listing",
        "url" => url() . "/investorrelations/entitlements"
      ),
      5 => array(
        "title" => $entitle_title,
        "url" => ""
      )

    );
    $tagLine = "Oil Palm Plantation Investment Holdings";
    $mainMenuTitle = $entitle_title;
    return View::make(
      'frontbursaentitlementdetail',
      array(
        'pageTitle' => $pageTitle,
        'masthead' => $masthead,
        'breadcrumbs' => $breadcrumbs,
        'tagLine' => $tagLine,
        'entitlement' => $entitlement[0]
      )
    );
  }
  public function saveInvestor(Request $req)
  {

    $title = $req->input('title');
    $category = $req->input('type');
    $date = $req->input('date');
    $reference_no = $req->input('textarea_reference');
    $short_description = $req->input('textarea_announcement_content');
    if (isset($_REQUEST['active']) && !empty($_REQUEST['active'])) {
      $active = $req->input('active');
    } else {
      $active = 0;
    }

    $company_name = $req->input('company');

    DB::insert('insert into announcements (title, category,date_of_publishing,reference_no,company_name,active,short_description) values (?, ?,?,?,?,?,?)', array($title, $category, $date, $reference_no, $company_name, $active, $short_description));
    return redirect()->back();
  }
  public function SingleDeleteInvestor(Request $req)
  {
    $id = $req->input('dirid');
    $dirpro = Announcement::findOrFail($id);
    $dirpro->delete();
    if ($dirpro) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function DeleteAllInvestor(Request $req)
  {
    $type = $req->input('type');
    $dirp = Announcement::where('category', '=', $type)->delete();
    if ($dirp) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }
  public function Editinvestoralert(Request $req)
  {

    $invid = $req->input('id');

    $announcement = array(
      'title' => $req->input('title'),
      'category' => $req->input('type'),
      'date_of_publishing' => $req->input('date'),
      'active' => $req->input('active'),
      'company_name' => $req->input('company'),
      'reference_no' => trim($req->input('textarea_reference')),
      'short_description' => trim($req->input('textarea_announcement_content')),
    );

    DB::table('announcements')
      ->where('id', $invid)
      ->update($announcement);

    return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
              </div>');
  }
  public function CorporateDeleteMultiple(Request $req)
  {
    $id = $req->input('deleteid');
    $ids = explode(',', $id[0]);
    $banner = Announcement::whereIn('id', $ids)->delete();
    //  $banner->delete();
    if ($banner) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  // dated 04-04-2015
  public function saveAdditional(Request $req)
  {
    // print_r($_REQUEST);
    // die;
    $title = $req->input('title');
    $category = $req->input('type');
    $date = $req->input('date');
    $reference_no = $req->input('textarea_reference');
    $short_description = $req->input('textarea_announcement_content');
    if (isset($_REQUEST['active']) && !empty($_REQUEST['active'])) {
      $active = $req->input('active');
    } else {
      $active = 0;
    }

    $company_name = $req->input('company');

    DB::insert('insert into announcements (title, category,date_of_publishing,reference_no,company_name,active,short_description) values (?, ?,?,?,?,?,?)', array($title, $category, $date, $reference_no, $company_name, $active, $short_description));
    return redirect()->back();
  }






  /* public function InvestorAlert() {

         $page = Page::where('type','=','inverstoralert')->where('published','=',1)->get();
				$pgCount = Announcement::where('category','=','Investor Alert')->count();
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

                   $noperpage = 10;
               }
			   $Announcementlisting = Announcement::where('category','=','Investor Alert')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
                $results = DB::select('select * from annc where category = ?', array('Investor Alert'));
				 return View::make('admininverstoralert',array(
                                                   'page' => $page,
												   'accountlisting'=>$Announcementlisting,
												    'cntarray1' => $cntarray1
												     )
                                 );
        }



        public function AdditionalListing() {
			  $page = Page::where('type','=','newscenter');
			  $pgCount = Announcement::where('category','=','Additional Listing')->count();
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

                   $noperpage = 100;
               }
			$AdditionalListing = Announcement::where('category','LIKE','%Additional Listing%')->paginate($noperpage);
            if($pgCount > 0)
           {
				$cntarray1 = $cntArr;
           }
           else {
				$cntarray1 = 0;
           }

		  $results = DB::select('select * from annc where category LIKE "%?%"', array('Additional Listing'));
				 return View::make('adminadditionallisting',array(
                                                   'page' => $page,
												   'accountlisting'=>$AdditionalListing,
												    'cntarray1' => $cntarray1
												     )
                                 );
            // return View::make('adminadditionallisting');
         }

		 // circular listing starts here

		 public function ListingCircular() {
			 $page = Page::where('type','=','adminlistingcircular');
			  $pgCount = Announcement::where('category','=','Listing Circular')->count();
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

                   $noperpage = 100;
               }
			$AdditionalListing = Announcement::where('category','=','Listing Circular')->paginate($noperpage);
            if($pgCount > 0)
           {
				$cntarray1 = $cntArr;
           }
           else {
				$cntarray1 = 0;
           }

		  $results = DB::select('select * from annc where category = ?', array('Listing Circular'));
				 return View::make('adminlistingcircular',array(
                                                   // 'page' => $page,
												   'accountlisting'=>$AdditionalListing,
												    'cntarray1' => $cntarray1
												     )
                                 );


            // return View::make('adminlistingcircular');
         }

	public function saveCircular() {

                $title=$req->input('title');
				$category=$req->input('type');
				$date=$req->input('date');
				$reference_no=$req->input('textarea_reference');
                 $short_description=$req->input('textarea_announcement_content');
				if(isset($_REQUEST['active']) && !empty($_REQUEST['active'])){
				$active=$req->input('active');}else{
				$active=0;
				}

				$company_name=$req->input('company');

		 DB::insert('insert into announcements (title, category,date_of_publishing,reference_no,company_name,active,short_description) values (?, ?,?,?,?,?,?)', array($title, $category,$date,$reference_no,$company_name,$active,$short_description));
                 return redirect()->back();
	}

		 // circular listing ends here

		 // financial result starts here
		 public function FinancialResult() {
			  $page = Page::where('type','=','adminfinancialresult');
			  $pgCount = Announcement::where('category','=','Financial Result')->count();
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

                   $noperpage = 100;
               }
			$AdditionalListing = Announcement::where('category','=','Financial Results')->paginate($noperpage);
            if($pgCount > 0)
           {
				$cntarray1 = $cntArr;
           }
           else {
				$cntarray1 = 0;
           }

		  $results = DB::select('select * from annc where category = ?', array('Financial Results'));
				 return View::make('adminfinancialresult',array(
                                                   'page' => $page,
												   'accountlisting'=>$AdditionalListing,
												    'cntarray1' => $cntarray1
												     )
                                 );




            // return View::make('adminfinancialresult');
         }

		 public function saveFinancial() {

                $title=$req->input('title');
				$category=$req->input('type');
				$date=$req->input('date');
				$reference_no=$req->input('textarea_reference');
                 $short_description=$req->input('textarea_announcement_content');
				if(isset($_REQUEST['active']) && !empty($_REQUEST['active'])){
				$active=$req->input('active');}else{
				$active=0;
				}

				$company_name=$req->input('company');

		 DB::insert('insert into announcements (title, category,date_of_publishing,reference_no,company_name,active,short_description) values (?, ?,?,?,?,?,?)', array($title, $category,$date,$reference_no,$company_name,$active,$short_description));
                 return redirect()->back();
	}

		 // financial result ends here

		 // general announcement starts here
		  public function GeneralAnnouncement() {
			   $page = Page::where('type','=','generalannouncement')->where('published','=',1)->get();
				$pgCount = Announcement::where('category','=','General Announcement')->count();
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
			$Announcementlisting = Announcement::where('category','=','General Announcement')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('General Announcement'));
				 return View::make('admingeneralannouncement',array(
                                                   'page' => $page,
												   'accountlisting'=>$Announcementlisting,
												    'cntarray1' => $cntarray1
												     )
                                 );

            // return View::make('admingeneralannouncement');
         }

		  public function saveGeneralAnnouncement() {

        $title=$req->input('title');
				$category=$req->input('type');
				$date=$req->input('date');
				$reference_no=$req->input('textarea_reference');
                 $short_description=$req->input('textarea_announcement_content');
				if(isset($_REQUEST['active']) && !empty($_REQUEST['active'])){
				$active=$req->input('active');}else{
				$active=0;
				}

				$company_name=$req->input('company');

		 DB::insert('insert into announcements (title, category,date_of_publishing,reference_no,company_name,active,short_description) values (?, ?,?,?,?,?,?)', array($title, $category,$date,$reference_no,$company_name,$active,$short_description));
                 return redirect()->back();
	}

		  // general announcement ends here
		 public function FinancialResultlisting() {
      $pgCount = Announcement::where('category','=','Trading of Rights Announcement')->count();
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
      $financialResult = Announcement::where('category','=','Trading of Rights Announcement')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Trading of Rights Announcement'));
         return View::make('adminfinancialresultlisting',array(
                           'financialResult'=>$financialResult,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminfinancialresultlisting');
         }
		 public function GeneralMeeting()
     {
        $pgCount = Announcement::where('category','=','General Meetings')->count();
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
      $Generalmeeting = Announcement::where('category','=','General Meetings')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('General Meetings'));
         return View::make('admingeneralmeeting',array(
                           'generalmeeting'=>$Generalmeeting,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('admingeneralmeeting');
      }
		 public function SpecialAnnouncement() {
      $pgCount = Announcement::where('category','=','Special Announcement')->count();
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
      $specialAnnouncement = Announcement::where('category','=','Special Announcement')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Special Announcement'));
         return View::make('adminspecialannouncement',array(
                           'specialAnnouncement'=>$specialAnnouncement,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminspecialannouncement');
         }
		 public function DirectorInterest() {
        $pgCount = Announcement::where('category','=',"Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965")->count();
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
      $directorInterest = Announcement::where('category','=',"Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965")->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array("Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965"));
         return View::make('admindirectorinterest',array(
                           'directorInterest'=>$directorInterest,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('admindirectorinterest');
         }
		 public function ShareholderInterest() {
      $pgCount = Announcement::where('category','=',"Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965")->count();
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
      $shareholderInterest = Announcement::where('category','=',"Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965")->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array("Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965"));
         return View::make('adminshareholderinterest',array(
                           'shareholderInterest'=>$shareholderInterest,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminshareholderinterest');
         }
		 public function InterestSubstanial() {
          $pgCount = Announcement::where('category','=',"Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965")->count();
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
      $interestSubstanial = Announcement::where('category','=',"Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965")->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array("Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965"));
         return View::make('admininterestsubstanial',array(
                           'interestSubstanial'=>$interestSubstanial,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('admininterestsubstanial');
         }
		 public function PersonCeasing() {
          $pgCount = Announcement::where('category','=','Notice of Person Ceasing (29C)')->count();
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
      $personCeasing = Announcement::where('category','=','Notice of Person Ceasing (29C)')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Notice of Person Ceasing (29C)'));
         return View::make('adminpersonceasing',array(
                           'personCeasing'=>$personCeasing,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminpersonceasing');
         }
		 public function AuditCommittee() {
      $pgCount = Announcement::where('category','=','Change in Audit Committee')->count();
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
      $auditComittee = Announcement::where('category','=','Change in Audit Committee')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change in Audit Committee'));
         return View::make('adminauditcommittee',array(
                           'auditComittee'=>$auditComittee,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminauditcommittee');
         }
		 public function BoardRoom() {
      $pgCount = Announcement::where('category','=','Change in Boardroom')->count();
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
      $broadroom = Announcement::where('category','=','Change in Boardroom')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change in Boardroom'));
         return View::make('adminboardroom',array(
                           'broadroom'=>$broadroom,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminboardroom');
         }
		 public function ChiefExecutive() {
      $pgCount = Announcement::where('category','=','Change in Chief Executive Officer')->count();
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
      $chiefExecutive = Announcement::where('category','=','Change in Chief Executive Officer')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change in Chief Executive Officer'));
         return View::make('adminchiefexecutive',array(
                           'chiefExecutive'=>$chiefExecutive,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminchiefexecutive');
         }
		 public function PrincipalOfficer() {
        $pgCount = Announcement::where('category','=','Change in Principal Officer')->count();
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
      $principalOfficer = Announcement::where('category','=','Change in Principal Officer')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change in Principal Officer'));
         return View::make('adminprincipalofficer',array(
                           'principalOfficer'=>$principalOfficer,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminprincipalofficer');
         }
		 public function Address() {
      $pgCount = Announcement::where('category','=','Change of Address')->count();
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
      $address = Announcement::where('category','=','Change of Address')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change of Address'));
         return View::make('adminaddress',array(
                           'address'=>$address,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminaddress');
         }
		 public function CompanySecretary() {
      $pgCount = Announcement::where('category','=','Change of Company Secretary')->count();
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
      $companySecretary = Announcement::where('category','=','Change of Company Secretary')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change of Company Secretary'));
         return View::make('admincompanysecretary',array(
                           'companySecretary'=>$companySecretary,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('admincompanysecretary');
         }
		 public function Registrar() {
          $pgCount = Announcement::where('category','=','Change of Registrar')->count();
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
      $registrar = Announcement::where('category','=','Change of Registrar')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Change of Registrar'));
         return View::make('adminregistrar',array(
                           'registrar'=>$registrar,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminregistrar');
         }
		 public function Treasury() {
       $pgCount = Announcement::where('category','=','Notice of Resale/Cancellation of Treasury Share - Immediate Announcement')->count();
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
      $treasury = Announcement::where('category','=','Notice of Resale/Cancellation of Treasury Share - Immediate Announcement')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Notice of Resale/Cancellation of Treasury Share - Immediate Announcement'));
         return View::make('admintreasury',array(
                           'treasury'=>$treasury,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('admintreasury');
         }
		 public function ShareImmediate() {
      $pgCount = Announcement::where('category','=','Notice of Shares Buy Back - Immediate Announcement')->count();
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
      $shareImmediate = Announcement::where('category','=','Notice of Shares Buy Back - Immediate Announcement')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Notice of Shares Buy Back - Immediate Announcement'));
         return View::make('adminshareimmediate',array(
                           'shareImmediate'=>$shareImmediate,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminshareimmediate');
         }
		 public function SharePursuant() {
      $pgCount = Announcement::where('category','=','Notice of Shares Buy Back by a Company Pursuant to Form 28A')->count();
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
      $sharePursuant = Announcement::where('category','=','Notice of Shares Buy Back by a Company Pursuant to Form 28A')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Notice of Shares Buy Back by a Company Pursuant to Form 28A'));
         return View::make('adminsharepursuant',array(
                           'sharePursuant'=>$sharePursuant,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminsharepursuant');
         }
		 public function ShareCompanypursuant() {
        $pgCount = Announcement::where('category','=','Notice of Shares Buy Back by a Company Pursuant to Form 28B')->count();
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
      $shareCompanyPursuant = Announcement::where('category','=','Notice of Shares Buy Back by a Company Pursuant to Form 28B')->paginate($noperpage);
            if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {

           $cntarray1 = 0;

           }
                $results = DB::select('select * from annc where category = ?', array('Notice of Shares Buy Back by a Company Pursuant to Form 28B'));
         return View::make('adminsharecompanypursuant',array(
                           'shareCompanyPursuant'=>$shareCompanyPursuant,
                            'cntarray1' => $cntarray1
                             )
                                 );
            // return View::make('adminsharecompanypursuant');
         } */





  // dated 11-05-2015 JP
  public function addAnnouncements(Request $req)
  {
    /* update requested data */
    $data = array();
    $data['reference_no'] = strip_tags($req->input('reference_no'));
    if (isset($_REQUEST['status']) && !empty($_REQUEST['status'])) {
      $data['status'] = $req->input('status');
    } else {
      $data['status'] = 0;
    }
    $data['date_of_publishing'] = date('Y-m-d', strtotime(str_replace("/", "-", $req->input('date_of_publishing'))));
    $data['html'] = $req->input('html');
    $data['title'] = $req->input('title');
    $data['company_name'] = $req->input('company_name');
    $data['category'] = $req->input('category');

    //dd($data);

    if (CrawledAnnounce::create($data)) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Announcement Added Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function editAnnouncements(Request $req)
  {

    /* update requested data */
    $data = array();
    $data['reference_no'] = $req->input('reference_no');
    if (isset($_REQUEST['status']) && !empty($_REQUEST['status'])) {
      $data['status'] = $req->input('status');
    } else {
      $data['status'] = 0;
    }
    $data['date_of_publishing'] = date('Y-m-d', strtotime(str_replace("/", "-", $req->input('date_of_publishing'))));
    $data['html'] = $req->input('html');
    $data['title'] = $req->input('title');
    $data['company_name'] = $req->input('company_name');

    if (CrawledAnnounce::where('id', $req->input('id'))->update($data)) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Announcement Edited Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function deleteAnnouncement(Request $req)
  {
    $id = $req->input('id');
    $dirpro = CrawledAnnounce::findOrFail($id);
    $dirpro->delete();
    if ($dirpro) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function deleteMultipleAnnouncement(Request $req)
  {
    $id = $req->input('deleteid');
    $ids = explode(',', $id);
    $banner = CrawledAnnounce::whereIn('id', $ids)->delete();
    if ($banner) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }

  public function deleteAllAnnouncement(Request $req)
  {
    $type = $req->input('type');

    $dirp = CrawledAnnounce::where('category', '=', $type)->delete();
    if ($dirp) {
      return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
    } else {
      return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Error!</strong>
                <p>Something happened try again.</p>
              </div>');
    }
  }


  public function Entitlement(Request $req)
  {

    $page = Page::where('type', '=', 'cat_entitlement')->where('published', '=', 1)->get();

    /* use category on entire page */
    $base_category = 'Entitlement%';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'DESC')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminentitlement',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  public function InvestorAlert(Request $req)
  {

    $page = Page::where('type', '=', 'cat_investoralert')->where('published', '=', 1)->get();

    /* use category on entire page */
    $base_category = 'Investor Alert Announcement';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admininverstoralert',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  // Additional Listing Announcement (ALA) starts here

  public function AdditionalListing(Request $req)
  {
    $page = Page::where('type', '=', 'cat_additionallisting')->where('published', '=', 1)->get();
    $pgCount = CrawledAnnounce::where('category', 'LIKE', 'Additional Listing%')->where('status', '=', 1)->orderby('date_of_publishing', 'desc')->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', 'Additional Listing%')->where('status', '=', 1)->orderby('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    $base_category = 'Additional Listing Announcement /Subdivision of Shares';
    $results = DB::select('select * from annc where category LIKE "%?%"', array('Additional Listing'));
    return View::make(
      'adminadditionallisting',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
    return View::make('adminadditionallisting', array(
      'page' => $page,
      'accountlisting' => $AdditionalListing,
      'cntarray1' => $cntarray1,
      'base_category' => $base_category
    ));
  }

  // Additional Listing Announcement /Subdivision of Shares starts here

  public function AdditionalListingSubdivision(Request $req)
  {
    $page = Page::where('type', '=', 'cat_additionallisting')->where('published', '=', 1)->get();

    /* use category on entire page */
    $base_category = 'Additional Listing Announcement /Subdivision of Shares';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminadditionallistingsubdivision',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  // circular listing starts here

  public function ListingCircular(Request $req)
  {
    $page = Page::where('type', '=', 'cat_listingcirculars')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'Listing Circular';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);


    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminlistingcircular',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }


  // circular listing ends here

  // financial result starts here
  public function FinancialResult(Request $req)
  {
    $page = Page::where('type', '=', 'cat_financialresults')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'Financial Results';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);

    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }

    return View::make(
      'adminfinancialresult',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  // financial result ends here

  // general announcement starts here
  public function GeneralAnnouncement(Request $req)
  {
    $page = Page::where('type', '=', 'cat_generalannouncement')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'General Announcement for PLC';
    /*$base_category = '%General Announcement%';*/

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make('admingeneralannouncement', array(
      'page' => $page,
      'accountlisting' => $AdditionalListing,
      'cntarray1' => $cntarray1,
      'base_category' => $base_category
    ));
  }


  public function FinancialResultlisting(Request $req)
  {
    $page = Page::where('type', '=', 'cat_financialresult')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'Trading of rights announcement';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminfinancialresultlisting',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }








  public function GeneralMeeting(Request $req)
  {
    $page = Page::where('type', '=', 'cat_generalmeetings')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'General Meetings';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admingeneralmeeting',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  public function SpecialAnnouncement(Request $req)
  {
    $page = Page::where('type', '=', 'cat_specialannouncement')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = 'Special Announcements';

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminspecialannouncement',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }

  public function DirectorInterest(Request $req)
  {
    $page = Page::where('type', '=', 'cat_directorinterest')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admindirectorinterest',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function ShareholderInterest(Request $req)
  {
    $page = Page::where('type', '=', 'cat_shareholderinterest')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminshareholderinterest',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function InterestSubstantialSection138(Request $req)
  {
    $page = Page::where('type', '=', 'cat_interestshareholder138')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admininterestsubstantialsection138',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function InterestSubstantialSection137(Request $req)
  {
    $page = Page::where('type', '=', 'cat_interestshareholder137')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admininterestsubstantialsection137',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function InterestSubstanial(Request $req)
  {
    $page = Page::where('type', '=', 'cat_interestshareholder')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admininterestsubstanial',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function PersonCeasing(Request $req)
  {
    $page = Page::where('type', '=', 'cat_personceasing')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Person Ceasing (29C)";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminpersonceasing',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function AuditCommittee(Request $req)
  {
    $page = Page::where('type', '=', 'cat_auditcommittee')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Audit Committee";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminauditcommittee',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function RemunerationCommittee(Request $req)
  {
    $page = Page::where('type', '=', 'cat_remunerationcommittee')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Remuneration Committee";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminremunerationcommittee',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function NominationCommittee(Request $req)
  {
    $page = Page::where('type', '=', 'cat_nominationcommittee')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Nomination Committee";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminnominationcommittee',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function RiskCommittee(Request $req)
  {
    $page = Page::where('type', '=', 'cat_riskcommittee')->where('published', '=', 1)->get();

    /* use category on entire page */
    $base_category = "Change in Risk Committee";


    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminriskcommittee',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function BoardRoom(Request $req)
  {
    $page = Page::where('type', '=', 'cat_boardroom')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Boardroom";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminboardroom',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function ChiefExecutive(Request $req)
  {
    $page = Page::where('type', '=', 'cat_chiefexecutiveofficer')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Chief Executive Officer";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminchiefexecutive',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function PrincipalOfficer(Request $req)
  {
    $page = Page::where('type', '=', 'cat_principalofficer')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change in Principal Officer";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminprincipalofficer',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function Address(Request $req)
  {
    $page = Page::where('type', '=', 'cat_addresslisting')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change of Address";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminaddress',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function CompanySecretary(Request $req)
  {
    $page = Page::where('type', '=', 'cat_compsectretarylisting')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change of Company Secretary";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admincompanysecretary',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function Registrar(Request $req)
  {
    $page = Page::where('type', '=', 'cat_registrarlist')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Change of Registrar";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminregistrar',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function Treasury(Request $req)
  {
    $page = Page::where('type', '=', 'cat_resalelist')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'admintreasury',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function ShareImmediate(Request $req)
  {
    $page = Page::where('type', '=', 'cat_immediateannouncement')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Shares Buy Back - Immediate Announcement";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminshareimmediate',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function SharePursuant(Request $req)
  {
    $page = Page::where('type', '=', 'cat_companypursuant')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Shares Buy Back by a Company pursuant to Form 28A";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminsharepursuant',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
  public function ShareCompanypursuant(Request $req)
  {
    $page = Page::where('type', '=', 'cat_sharecompanypursuant')->where('published', '=', 1)->get();
    /* use category on entire page */
    $base_category = "Notice of Shares Buy Back by a Company pursuant to Form 28B";

    $pgCount = CrawledAnnounce::where('category', 'LIKE', $base_category)->count();
    for ($i = 1; $i <= $pgCount; $i++) {
      if ($i == 1) {
        $cntArr[10] = 10;
      }

      if ($i == 11) {
        $cntArr[20] = 20;
      }

      if ($i == 21) {
        $cntArr[30] = 30;
      }

      if ($i == 31) {
        $cntArr[50] = 50;
      }

      if ($i == 51) {
        $cntArr[100] = 100;
        break;
      }
    }
    if ($req->input('noperpage1')) {
      $noperpage = $req->input('noperpage1');
    } else {

      $noperpage = 100;
    }
    $AdditionalListing = CrawledAnnounce::where('category', 'LIKE', $base_category)->orderBy('date_of_publishing', 'desc')->paginate($noperpage);
    if ($pgCount > 0) {
      $cntarray1 = $cntArr;
    } else {
      $cntarray1 = 0;
    }
    return View::make(
      'adminsharecompanypursuant',
      array(
        'page' => $page,
        'accountlisting' => $AdditionalListing,
        'cntarray1' => $cntarray1,
        'base_category' => $base_category
      )
    );
  }
}
