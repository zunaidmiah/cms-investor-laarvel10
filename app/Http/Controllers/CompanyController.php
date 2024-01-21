<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

class CompanyController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Pressrelease Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


         public function frontCompanyhistory()
        {

              $masthead = url().'/images/banner_subpage/banner7.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Company History",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcompanyhistory',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }


		 public function frontCorporateinfo()
        {

              $masthead = url().'/images/banner_subpage/banner8.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Corporate Information",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcorporateinfo',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }



		 public function frontCorporatestructure()
        {

              $masthead = url().'/images/banner_subpage/banner8.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Corporate Structure",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcorporatestructure',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }


       public function frontCorporatephilo()
        {

              $masthead = url().'/images/banner_subpage/banner9.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Corporate Philosophy",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcorporatephilo',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }



	    public function frontCorporatevision()
        {

              $masthead = url().'/images/banner_subpage/banner9.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Corporate Vision",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcorporatevision',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }


      public function frontCorporatesocialresp()
        {

              $masthead = url().'/images/banner_subpage/banner14.jpg';
              $breadcrumbs = array(
                                      0 => array
                                                (
                                                   "title" => "Home",
                                                   "url" => ""
                                                ),
                                     1 => array
                                                (
                                                   "title" => "Company",
                                                   "url" => ""
                                                ),
                                    2 => array
                                                (
                                                   "title" => "Corporate Social Responsibility",
                                                   "url" => ""
                                                )

                                    );

                $mainMenuTitle = "Company";
                return View::make('frontcorporatesocialresp',array(

                                                       'mainMenuTitle' => $mainMenuTitle,
                                                       'breadcrumbs' => $breadcrumbs,
                                                       'masthead' => $masthead


                                                     ));
        //   return View::make('adminannualreport', array ( 'page' => $page));
        }

}

