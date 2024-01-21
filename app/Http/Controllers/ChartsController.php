<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Chart;
use App\Models\Ohlcv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Class ChartsController extends BaseController{

    /*
    |--------------------------------------------------------------------------
    | Default Chart Controller
    |--------------------------------------------------------------------------
    |
    |	Route::get('/', 'ChartController@index');
    |
    */

    public function __construct(){

        //contruct ccde Here. Eg; Checking the admin login


    }

    public function index(){
		$charts= Chart::all();
        return View::make('charts.index',['charts' => $charts]);
    }

    public function edit($id){
		$charts= Chart::find($id);
$dt=Ohlcv::orderBy('updated_at', 'desc')->first();
        return View::make('charts.edit',['chart' => $charts,'dt'=>$dt->updated_at]);
    }

    public function data(){
$data = Ohlcv::orderBy('date')->get();

        return $data;
    }
    public function updt(Request $req){
      $v=explode('_',$req->input('id'));
	  $affectedRows = Ohlcv::where('id', '=', $v[1])->update(array($v[0] => $req->input('value')));
	  return $req->input('value');

    }
    public function title(Request $req){
	  $affectedRows = Chart::where('id', '=',$req->input('id'))->update(array('title' => $req->input('value')));
	  return $req->input('value');

    }
    public function publish($id,$p){
	  $affectedRows = Chart::where('id', '=',$id)->update(array('published' => $p));
return redirect()->back();

    }
    public function addnew(Request $req){
$ch=new Ohlcv;
$ch->open=$req->input('open');
$ch->close=$req->input('close');
$ch->low=$req->input('low');
$ch->high=$req->input('high');
$ch->volume=$req->input('volume');
$ch->adjustment=$req->input('adjustment');
$a = strptime($req->input('date'), '%d-%m-%Y');
$tm= ($a['tm_year']+1900).'-'.( $a['tm_mon']+1).'-'. $a['tm_mday'].' 00:00:00';// mktime(0, 0, 0, $a['tm_mon']+1, $a['tm_mday'], $a['tm_year']+1900);
$ch->date= $tm;
	 $ch->save();
return redirect()->back();
    }
    public function published(Request $req){
	  $affectedRows = Chart::where('id', '=',$req->input('id'))->update(array('published' => $req->input('value')));
	  return $req->input('value');

    }
public function updtpass(Request $req){
		$user = Auth::user();
		$current_password = $req->input('current_password');
		if (strlen($current_password) > 0 && !Hash::check($current_password, $user->password)) {
			return 'Please specify the good current password';
		}

		$user->password = Hash::make($req->input('password'));
		$user->save();
		return 'Passowrd Successfully updated!';

	}
}
