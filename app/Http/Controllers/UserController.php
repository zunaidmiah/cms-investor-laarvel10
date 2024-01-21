<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


         public function listUsers(Request $req, $id = NULL) {

              /* Paginate Count Section */
             $pgCount = User::count();
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
             if($req->input('noperpage1'))
             {
               $noperpage = $req->input('noperpage1');
             }
             else {

                   $noperpage = 10;
               }
             /* End of Paginate Count Section */
             if (isset($id)) {
                $users =  User::find($id)->paginate($noperpage);;
                } else {
                $RootMenus = Menu::RootMenus();
                $subMenus = Menu::SubMenus();
                $users = User::paginate($noperpage);
                }
                $subMenus[0] = array();
                 if($pgCount > 0)
           {
           $cntarray1 = $cntArr;
           }
           else {
           $cntarray1 = 0;
           }
                return View::make('userslist',array(
                                                   'users' => $users,
                                                   'RootMenus' => $RootMenus,
                                                   'subMenus' => $subMenus,
                                                   'cntarray1' => $cntarray1
                                                    )
                                 );

        }

        public function store(Request $req)
          {
             // Create and save a new user, mass assigning all of the input fields (including the 'avatar' file field).
            $user = User::create($req->all());
          }

        // Create a New User
        public function saveUser(Request $req)
        {

            $access = serialize($req->input('access'));
            $active = $req->input('active');
            $name = $req->input('name');
            $company = $req->input('company');
            $role = $req->input('role');
            $username = $req->input('email');
            $password = hash('SHA512',$req->input('password'));

            $emailExists = User::where('username' , '=', $username)->count();
            if($emailExists < 1) {

                            $user = new User;
                            $user->active = $active;
                            $user->name = $name;
                            $user->company = $company;
                            $user->role = $role;
                            $user->username = $username;
							$user->email = $username;
                            $user->password = $password;
                            $user->accesslist = $access;
                           if($user->save())
                           {
                                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                                <p>User Created Successfully.</p>
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
            else
            {
                return redirect()->back()->with('message','<div class="alert alert-error alert-dismissable">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                <i class="fa fa-check-circle"></i> <strong>failed!</strong>
                                <p>Email Id already exists.</p>
                              </div>');
            }
        }

        // Update the user by ID
        public function updateUser(Request $req)
        {

            $id = $req->input('userid');
            $access = serialize($req->input('access'));
            $active = $req->input('active');
            $name = $req->input('name');
            $company = $req->input('company');
            $role = $req->input('role');
            $username = $req->input('email');

            $user = User::find($id);
            $user->active = $active;
            $user->name = $name;
            $user->company = $company;
            $user->role = $role;
            $user->username = $username;
            $user->accesslist = $access;
             if($req->input('password'))
            {
            $password = hash('SHA512',$req->input('password'));
            $user->password = $password;
            }

            if($user->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>User Updated Successfully.</p>
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

         // Update the user by ID
        public function update(Request $req)
        {
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->avatar = $req->file('avatar');
            if($user->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Avatar Uploaded Successfully.</p>
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

        public function changepassword(Request $req)
        {
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->password = hash('SHA512',$req->input('password'));
            if($user->save())
            {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>Password changed Successfully.</p>
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
		public function adminDeleteUser(Request $req) {
		   $id = $req->input('userid');
           $pressrelease = User::findOrFail($id);
		   $pressrelease->delete();
		   if($pressrelease)
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
          // $banners = Banner::paginate(2);
          // $corebusinesses = Corebusiness::paginate(2);
          // return View::make('adminindex', array ( 'banners' => $banners, 'corebusinesses' => $corebusinesses ));
        }
		public function userDeleteAll()
        {
		   $user = User::truncate();
		   if($user)
           {
                return redirect()->back()->with('message','<div class="alert alert-success alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>All Users Deleted Successfully.</p>
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

