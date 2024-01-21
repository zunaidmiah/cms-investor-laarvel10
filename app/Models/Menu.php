<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

       public static function AllMenus()
       {

       }

       public static function RootMenus()
       {
           $rootMenus = DB::table('menus')->where('rootid', '=', '0')->get();
           return $rootMenus;
       }

       public static function SubMenus()
       {
           $RootMenus = DB::table('menus')->where('rootid', '=', '0')->get();
           foreach( $RootMenus as $RootMenu)
           {

              $subMenus[$RootMenu->id] = DB::table('menus')->Where('rootid', '=', $RootMenu->id)->get();
           }
           return $subMenus;
       }



}
