<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Medianews;
use Illuminate\Http\Request;

Class EmailController extends BaseController{

    /*
    |--------------------------------------------------------------------------
    | Default Email Controller
    |--------------------------------------------------------------------------
    |
    |	Route::get('/', 'EmailController@index');
    |
    */

    public function __construct(){

        //contruct ccde Here.


    }

    public function index(){
        return View::make('admin.home');
    }

    public function publishNews(Request $req){

        if($req->input('publish') != null){
            $mediaNews  = new Medianews();
            $newsIds    = $req->input('publish');
            $return = $mediaNews->publishSelected($newsIds);

            if($return){
                //code when news successfullt published
            }else{
                //code when successfully not published
            }

            return redirect()->to('/news_centre_latest_media_news');

        }else{
            return redirect()->to('/');
        }

    }




}
