<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Chart;

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
        return View::make('charts.edit',['chart' => $charts]);
    }


}
