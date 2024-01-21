<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Medianews;
use Illuminate\Http\Request;

Class newsController extends BaseController{

    /*
    |--------------------------------------------------------------------------
    | Default News Controller
    |--------------------------------------------------------------------------
    |
    |	Route::get('/', 'NewsController@index');
    |
    */

    public function __construct(){

        //contruct ccde Here. Eg; Checking the admin login


    }

    public function index(){
        return View::make('home');
    }

    public function news_centre_latest_media_news(Request $req){

        $mediaNews = new Medianews();

        $maxYearDate = $mediaNews->getMaxNews();//Get Max year of publish date

        $year = ($req->input('year') != null) ? $req->input('year') : date('Y', time()) ;

        $fromTime =  mktime(0 ,0 ,0 , 1 , 1 , $year);
        $toTime =  mktime(23 ,59 ,59 , 12 , 31 , $year);

        $data['mediaNews'] = $mediaNews->getMediaNewsBetweenDates($fromTime, $toTime);
        $data['title'] = 'Latest Media News';
        $data['year'] = $year;
        $data['maxYearDate'] = date('Y', $maxYearDate);

        return View::make('pages.news_centre_latest_media_news')->with($data);

    }

    public function news_centre_latest_media_news_details(Request $req){

        $mediaNews = new Medianews();
        $id = ($req->input('show') != null) ? $req->input('show') : null ;

        if($id != null){
            $data['mediaNews'] = $mediaNews->getMediaNews($id);
            if($data['mediaNews']){
                return View::make('pages.news_centre_latest_media_news_details')->with($data);
            }else{
                return redirect()->to('news/news_centre_latest_media_news');
            }

        }else{
            return redirect()->to('news/news_centre_latest_media_news');
        }


    }




}
