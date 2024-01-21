<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Report;
use App\Models\Shares;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends BaseController
{
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

    public function PriceTicker()
    {
        // Following is update stock price through command
        //  \Artisan::call('priceTicker:cron');


        // Following for stock price
        $stockdata = DB::connection('charts')->select('SELECT * FROM ohlc ORDER BY `id` DESC LIMIT 0,1');
        // Last Stock Data

        $laststockdata = DB::connection('charts')->select('SELECT * FROM ohlcvs ORDER BY `id` DESC LIMIT 0,1');
        $page = Page::where('type', '=', 'priceticker')->where('published', '=', 1)->get();
        return View::make(
            'adminpriceticker',
            array(
                'page' => $page,
                'stockdata' => $stockdata,
                'laststockdata' => $laststockdata
            )
        );
    }

    public function PriceAndVolume(Request $req)
    {

        $page = Page::where('type', '=', 'priceandvolume')->where('published', '=', 1)->get();
        $pageTitle = $page[0]->page_title;
        $masthead = url() . '/images/banner_subpage/banner13.jpg';

        // If date tab search
        if ($req->has('dDateFrom') && $req->has('dDateTo')) {
            $dtxt = " period ";
            $dls = 0;

            $from = date('Y-m-d', strtotime($req->input('dDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('dDateTo'))) . ' 23:59:59';

            $dhaving = " WHERE date between '$from' AND '$to' ";
        } else {
            if ($req->has('dpast')) {
                $dgt = 0;
                $dls = $req->input('dpast');
                $dhaving = " HAVING `nodays` BETWEEN " . $dgt . " AND " . $dls;
                if ($dls == 7) {
                    $dtxt = "Past One Week";
                } else if ($dls == 30) {
                    $dtxt = "Past One Month";
                } else if ($dls == 90) {
                    $dtxt = "Past Three Months";
                } else if ($dls == 180) {
                    $dtxt = "Past Six Months";
                } else if ($dls == 365) {
                    $dtxt = "Past One Year";
                }
            } else {
                $dgt = 0;
                $dls = 7;
                $dhaving = " HAVING `nodays` BETWEEN " . $dgt . " AND " . $dls;
                $dtxt = "Past One Week";
            }
        }

        // If month tab search
        if ($req->has('mDateFrom') && $req->has('mDateTo')) {
            $mtxt = " period ";
            $mls = 0;

            $from = date('Y-m-d', strtotime($req->input('mDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('mDateTo'))) . ' 23:59:59';

            $mhaving = '';
            $mWhere = " WHERE date between '$from' AND '$to' ";
        } else {
            $mWhere = '';
            if ($req->has('mpast')) {
                $mgt = 0;
                $mls = $req->input('mpast');
                $mhaving = " HAVING `nodays` BETWEEN " . $mgt . " AND " . $mls;
                if ($mls == 7) {
                    $mtxt = "Past One Week";
                } else if ($mls == 30) {
                    $mtxt = "Past One Month";
                } else if ($mls == 90) {
                    $mtxt = "Past Three Months";
                } else if ($mls == 180) {
                    $mtxt = "Past Six Months";
                } else if ($mls == 365) {
                    $mtxt = "Past One Year";
                }
            } else {
                $mgt = 0;
                $mls = 90;
                $mhaving = " HAVING `nodays` BETWEEN " . $mgt . " AND " . $mls;
                $mtxt = "Past 3 months";
            }
        }

        if ($req->has('yDateFrom') && $req->has('yDateTo')) {
            $ytxt = " period ";
            $yls = 0;

            $from = date('Y-m-d', strtotime($req->input('yDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('yDateTo'))) . ' 23:59:59';

            //WHERE date between date_sub(now(),INTERVAL " . ($yls + 1) . " DAY) and now()
            $yWhere = "WHERE date between '$from' and '$to' ";
        } else {
            if ($req->has('ypast')) {
                $ygt = 0;
                $yls = $req->input('ypast');
                $yhaving = " HAVING `nodays` BETWEEN " . $ygt . " AND " . $yls;
                if ($yls == 7) {
                    $ytxt = "Past One Week";
                } else if ($yls == 30) {
                    $ytxt = "Past One Month";
                } else if ($yls == 90) {
                    $ytxt = "Past Three Months";
                } else if ($yls == 180) {
                    $ytxt = "Past Six Months";
                } else if ($yls == 365) {
                    $ytxt = "Past One Year";
                }
            } else {
                $ygt = 0;
                $yls = 7;
                $yhaving = " HAVING `nodays` BETWEEN " . $ygt . " AND " . $yls;
                $ytxt = "Past One Week";
            }
            $yWhere = "WHERE date between date_sub(now(),INTERVAL " . ($yls + 1) . " DAY) and now()";
        }
        //        $priceVoldaily = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc GROUP BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) ".$dhaving."  ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //        $priceVolmonthly = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc".$mhaving." ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //        $priceVolhilo = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc".$yhaving." ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //echo "select date_format(date, '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adjustment` as adj,DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs " . $dhaving . "  ORDER BY date DESC"; exit;
        $priceVoldaily = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adjustment` as adj,DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs " . $dhaving . "  ORDER BY date DESC");

        // Caculating monthly details
        $mOpenQuery = "(select `open` from ohlcvs o2 where date_format(date, '%d/%m/%Y') = date_format(o1.date, '%d/%m/%Y') order by id limit 0,1)";
        $mCloseQuery = "(select `close` from ohlcvs o3 where date_format(date, '%d/%m/%Y') = date_format(o1.date, '%d/%m/%Y') order by id limit 0,1)";
        $priceVolmonthly = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,
            $mOpenQuery as open,max( `high` ) as high,min( `low` ) as low,$mCloseQuery as close, count( id ) AS weekdays,
                sum(`volume`) as sumVolume, avg(`volume`) as avgVolume,max(`adjustment`) as adj, DATEDIFF(NOW(), date) as `nodays`
            FROM ohlcvs o1 $mWhere GROUP BY date_format( date, '%m/%Y' )
            " . $mhaving . "
                ORDER BY date DESC");

        // Calculating HiLo
        $VolHi = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,volume as VolumeHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY volume DESC limit 0,1");
        $VolLo = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,volume as VolumeLow, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere AND volume != 0 ORDER BY volume limit 0,1");
        $PriceHi = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,high as PriceHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY high DESC limit 0,1");
        $PriceLo = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,low as PriceLow, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere AND low != 0 ORDER BY low limit 0,1");
        //print_r("select date_format(date, '%d/%m/%Y') as `date1`,high as PriceHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY high DESC limit 0,1"); exit;
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
                "title" => "Share Information",
                "url" => ""
            ),
            3 => array(
                "title" => "Price & Volume",
                "url" => ""
            )
        );
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;

        return View::make(
            'adminpriceandvolume',
            array(
                'page' => $page,
                'pageTitle' => $pageTitle,
                'masthead' => $masthead,
                'breadcrumbs' => $breadcrumbs,
                'tagLine' => $tagLine,
                'metaTitle' => $metaTitle,
                'priceVoldaily' => $priceVoldaily,
                'priceVolmonthly' => $priceVolmonthly,
                //'priceVolhilo' => $priceVolhilo,
                'PriceHi' => $PriceHi,
                'PriceLo' => $PriceLo,
                'VolHi' => $VolHi,
                'VolLo' => $VolLo,
                'dtxt' => $dtxt,
                'mtxt' => $mtxt,
                'ytxt' => $ytxt,
                'dls' => $dls,
                'mls' => $mls,
                'yls' => $yls,
            )
        );

        //        return View::make('adminpriceandvolume', array(
        //                    'page' => $page
        //                        )
        //        );
    }

    public function Shareholding()
    {

        $page = Page::where('type', '=', 'shareholding')->where('published', '=', 1)->get();
        return View::make(
            'adminshareholding',
            array(
                'page' => $page
            )
        );
    }

    public function ShareholdersList(Request $req)
    {

        $page = Page::where('type', '=', 'shareholderslist')->where('published', '=', 1)->get();
        $pgCount = Report::where('type', '=', 'shareholderslist')->count();
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
        $Profileslisting = Report::where('type', '=', 'shareholderslist')->paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }
        return View::make(
            'adminshareholderslist',
            array(
                'page' => $page,
                'profilelist' => $Profileslisting,
                'cntarray1' => $cntarray1
            )
        );
    }

    /* End of Front Functions */

    public function TopShareholders(Request $req)
    {

        $page = Page::where('type', '=', 'topshareholders')->where('published', '=', 1)->get();
        $pgCount = Shares::count();
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
        $Profileslisting = Shares::paginate($noperpage);
        if ($pgCount > 0) {
            $cntarray1 = $cntArr;
        } else {
            $cntarray1 = 0;
        }
        return View::make(
            'admintopshareholders',
            array(
                'page' => $page,
                'profilelist' => $Profileslisting,
                'cntarray1' => $cntarray1
            )
        );
    }

    public function AddTopShareholders(Request $req)
    {
        // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
        $diradd = Shares::create($req->all());
        if ($diradd) {
            return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Added Successfully.</p>
              </div>');
        } else {
            return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function EditTopShareholders(Request $req)
    {
        // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).

        $proid = $req->input('id');
        $banner = Shares::find($proid);
        $banner->name = $req->input('name');
        $banner->date = $req->input('date');
        $banner->shareheld = $req->input('shareheld');
        $banner->shareheld2 = $req->input('shareheld2');
        $banner->active = $req->input('active');

        if ($banner->save()) {
            return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Edited Successfully.</p>
              </div>');
        } else {
            return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function DeleteAllTopShareholders()
    {
        $dirp = Shares::truncate();
        if ($dirp) {
            return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">?</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Records Deleted Successfully.</p>
              </div>');
        } else {
            return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">?</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function SingleDeleteTopShareholders(Request $req)
    {
        $id = $req->input('dirid');
        $dirpro = Shares::findOrFail($id);
        $dirpro->delete();
        if ($dirpro) {
            return redirect()->back()->with('message', '<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Deleted Successfully.</p>
              </div>');
        } else {
            return redirect()->back()->with('message', '<div class="alert alert-error alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">�</button>
                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                <p>Something happened try again.</p>
              </div>');
        }
    }

    public function frontPriceTicker()
    {

        //$chart_vals = DB::connection('klsescreener_charts')->update('UPDATE klsescreener_charts set market_cap = 999.9 WHERE id = 218');
        //$chart_vals = DB::connection('klsescreener_charts')->select('SELECT * FROM klsescreener_charts ORDER BY CAST(`created_datetime` AS DATE) DESC LIMIT 0,1');
       // $chart_vals = DB::connection('klsescreener_charts')->select('SELECT * FROM klsescreener_charts WHERE id = 219');
        //dd($chart_vals);
        // Following is update stock price through command
        \Artisan::call('priceTicker:cron');

        $page = Page::where('type', '=', 'priceticker')->where('published', '=', 1)->get();
        $pageTitle = $page[0]->page_title;
        // Following for stock price
        $stockdata = DB::connection('charts')->select('SELECT * FROM ohlc ORDER BY `id` DESC LIMIT 0,1');
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
                "title" => "Share Information",
                "url" => ""
            ),
            3 => array(
                "title" => "Price Ticker",
                "url" => ""
            )
        );
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;

        return View::make(
            'frontpriceticker',
            array(
                'page' => $page,
                'pageTitle' => $pageTitle,
                'masthead' => $masthead,
                'breadcrumbs' => $breadcrumbs,
                'tagLine' => $tagLine,
                'metaTitle' => $metaTitle,
                'stockdata' => $stockdata[0]
            )
        );
    }

    public function frontPriceAndVolume(Request $req)
    {

        $page = Page::where('type', '=', 'priceandvolume')->where('published', '=', 1)->get();
        $pageTitle = $page[0]->page_title;
        $masthead = url() . '/images/banner_subpage/banner13.jpg';

        // If date tab search
        if ($req->has('dDateFrom') && $req->has('dDateTo')) {
            $dtxt = " period ";
            $dls = 0;

            $from = date('Y-m-d', strtotime($req->input('dDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('dDateTo'))) . ' 23:59:59';

            $dhaving = " WHERE date between '$from' AND '$to' ";
        } else {
            if ($req->has('dpast')) {
                $dgt = 0;
                $dls = $req->input('dpast');
                $dhaving = " HAVING `nodays` BETWEEN " . $dgt . " AND " . $dls;
                if ($dls == 7) {
                    $dtxt = "Past One Week";
                } else if ($dls == 30) {
                    $dtxt = "Past One Month";
                } else if ($dls == 90) {
                    $dtxt = "Past Three Months";
                } else if ($dls == 180) {
                    $dtxt = "Past Six Months";
                } else if ($dls == 365) {
                    $dtxt = "Past One Year";
                }
            } else {
                $dgt = 0;
                $dls = 7;
                $dhaving = " HAVING `nodays` BETWEEN " . $dgt . " AND " . $dls;
                $dtxt = "Past One Week";
            }
        }

        // If month tab search
        if ($req->has('mDateFrom') && $req->has('mDateTo')) {
            $mtxt = " period ";
            $mls = 0;

            $from = date('Y-m-d', strtotime($req->input('mDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('mDateTo'))) . ' 23:59:59';

            $mhaving = '';
            $mWhere = " WHERE date between '$from' AND '$to' ";
        } else {
            $mWhere = '';
            if ($req->has('mpast')) {
                $mgt = 0;
                $mls = $req->input('mpast');
                $mhaving = " HAVING `nodays` BETWEEN " . $mgt . " AND " . $mls;
                if ($mls == 7) {
                    $mtxt = "Past One Week";
                } else if ($mls == 30) {
                    $mtxt = "Past One Month";
                } else if ($mls == 90) {
                    $mtxt = "Past Three Months";
                } else if ($mls == 180) {
                    $mtxt = "Past Six Months";
                } else if ($mls == 365) {
                    $mtxt = "Past One Year";
                }
            } else {
                $mgt = 0;
                $mls = 90;
                $mhaving = " HAVING `nodays` BETWEEN " . $mgt . " AND " . $mls;
                $mtxt = "Past 3 months";
            }
        }

        if ($req->has('yDateFrom') && $req->has('yDateTo')) {
            $ytxt = " period ";
            $yls = 0;

            $from = date('Y-m-d', strtotime($req->input('yDateFrom'))) . ' 00:00:00';
            $to = date('Y-m-d', strtotime($req->input('yDateTo'))) . ' 23:59:59';

            //WHERE date between date_sub(now(),INTERVAL " . ($yls + 1) . " DAY) and now()
            $yWhere = "WHERE date between '$from' and '$to' ";
        } else {
            if ($req->has('ypast')) {
                $ygt = 0;
                $yls = $req->input('ypast');
                $yhaving = " HAVING `nodays` BETWEEN " . $ygt . " AND " . $yls;
                if ($yls == 7) {
                    $ytxt = "Past One Week";
                } else if ($yls == 30) {
                    $ytxt = "Past One Month";
                } else if ($yls == 90) {
                    $ytxt = "Past Three Months";
                } else if ($yls == 180) {
                    $ytxt = "Past Six Months";
                } else if ($yls == 365) {
                    $ytxt = "Past One Year";
                }
            } else {
                $ygt = 0;
                $yls = 7;
                $yhaving = " HAVING `nodays` BETWEEN " . $ygt . " AND " . $yls;
                $ytxt = "Past One Week";
            }
            $yWhere = "WHERE date between date_sub(now(),INTERVAL " . ($yls + 1) . " DAY) and now()";
        }
        //        $priceVoldaily = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc GROUP BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) ".$dhaving."  ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //        $priceVolmonthly = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc".$mhaving." ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //        $priceVolhilo = DB::connection('charts')->select("select date_format(str_to_date(date, '%d-%m-%Y'), '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adj`,DATEDIFF(NOW(), str_to_date(date, '%d-%m-%Y')) as `nodays` FROM ohlc".$yhaving." ORDER BY STR_TO_DATE( DATE,  '%d-%m-%Y' ) DESC");
        //echo "select date_format(date, '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adjustment` as adj,DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs " . $dhaving . "  ORDER BY date DESC"; exit;
        $priceVoldaily = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,`open`,`high`,`low`,`close`,`volume`,`adjustment` as adj,DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs " . $dhaving . "  ORDER BY date DESC");

        // Caculating monthly details
        $mOpenQuery = "(select `open` from ohlcvs o2 where date_format(date, '%m/%Y') = date_format(o1.date, '%m/%Y') order by id limit 0,1)";
        $mCloseQuery = "(select `close` from ohlcvs o3 where date_format(date, '%m/%Y') = date_format(o1.date, '%m/%Y') order by id desc limit 0,1)";
        $priceVolmonthly = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,
            $mOpenQuery as open,max( `high` ) as high,min( `low` ) as low,$mCloseQuery as close, count( id ) AS weekdays,
                sum(`volume`) as sumVolume, avg(`volume`) as avgVolume,max(`adjustment`) as adj, DATEDIFF(NOW(), date) as `nodays`
            FROM ohlcvs o1 $mWhere GROUP BY date_format( date, '%m/%Y' )
            " . $mhaving . "
                ORDER BY date DESC");

        // Calculating HiLo
        $VolHi = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,volume as VolumeHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY volume DESC limit 0,1");
        $VolLo = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,volume as VolumeLow, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere AND volume != 0 ORDER BY volume limit 0,1");
        $PriceHi = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,high as PriceHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY high DESC limit 0,1");
        $PriceLo = DB::connection('charts')->select("select date_format(date, '%d/%m/%Y') as `date1`,low as PriceLow, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere AND low != 0 ORDER BY low limit 0,1");
        //print_r("select date_format(date, '%d/%m/%Y') as `date1`,high as PriceHigh, DATEDIFF(NOW(), date) as `nodays` FROM ohlcvs $yWhere ORDER BY high DESC limit 0,1"); exit;
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
                "title" => "Share Information",
                "url" => ""
            ),
            3 => array(
                "title" => "Price & Volume",
                "url" => ""
            )
        );
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;

        return View::make(
            'frontpriceandvolume',
            array(
                'page' => $page,
                'pageTitle' => $pageTitle,
                'masthead' => $masthead,
                'breadcrumbs' => $breadcrumbs,
                'tagLine' => $tagLine,
                'metaTitle' => $metaTitle,
                'priceVoldaily' => $priceVoldaily,
                'priceVolmonthly' => $priceVolmonthly,
                //'priceVolhilo' => $priceVolhilo,
                'PriceHi' => $PriceHi,
                'PriceLo' => $PriceLo,
                'VolHi' => $VolHi,
                'VolLo' => $VolLo,
                'dtxt' => $dtxt,
                'mtxt' => $mtxt,
                'ytxt' => $ytxt,
                'dls' => $dls,
                'mls' => $mls,
                'yls' => $yls,
            )
        );
    }

    public function frontShareholding()
    {

        $page = Page::where('type', '=', 'shareholding')->where('published', '=', 1)->get();
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
                "title" => "Share Information",
                "url" => ""
            ),
            3 => array(
                "title" => "Analysis of Shareholdings",
                "url" => ""
            )
        );
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;

        return View::make(
            'frontshareholding',
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

    public function frontTopShareholders(Request $req)
    {

        $page = Page::where('type', '=', 'topshareholders')->where('published', '=', 1)->get();
        $dateSort = Shares::select('date')->where('active', '=', '1')->get();
        $dateSorts = array();
        $dateSorts['all'] = 'List all options here';
        foreach ($dateSort as $dateSort1) {
            $dateSorts[$dateSort1->date] = $dateSort1->date;
        }
        if ($req->has('datesort')) {
            $dateSort = $req->input('datesort');
            if ($dateSort == 'all') {
                $shares = Shares::where('active', '=', '1')->orderBy('updated_at', 'DESC')->paginate(30);
            } else {
                $shares = Shares::where('active', '=', 1)->where('date', '=', $dateSort)->orderBy('updated_at', 'DESC')->paginate(30);
            }
        } else {

            $dateSort = '';
            $shares = Shares::where('active', '=', '1')->orderBy('updated_at', 'DESC')->paginate(30);
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
                "title" => "Share Information",
                "url" => ""
            ),
            3 => array(
                "title" => "Shareholders",
                "url" => ""
            )
        );
        $tagLine = "Oil Palm Plantation Investment Holdings";
        $mainMenuTitle = $page[0]->page_title;
        $metaTitle = $mainMenuTitle;
        return View::make(
            'fronttopshareholders',
            array(
                'page' => $page,
                'shares' => $shares,
                'dateSorts' => $dateSorts,
                'pageTitle' => $pageTitle,
                'masthead' => $masthead,
                'breadcrumbs' => $breadcrumbs,
                'tagLine' => $tagLine,
                'metaTitle' => $metaTitle
            )
        );
    }
}
