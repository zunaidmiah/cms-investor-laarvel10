<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class RemindersController extends Controller {

  /**
   * Display the password reminder view.
   *
   * @return Response
   */
  public function getRemind()
  {
    return View::make('password.remind');
  }

  /**
   * Handle a POST request to remind a user of their password.
   *
   * @return Response
   */
  public function postRemind()
  {
   switch ($response = Password::remind(Input::only('email'), function($message){
            $message->subject('Password Reset');
        }))
        {
            case Password::INVALID_USER:
                return redirect()->back()->with('error', Lang::get($response));

            case Password::REMINDER_SENT:
                return redirect()->back()->with('status', Lang::get($response));
        }
  }

  /**
   * Display the password reset view for the given token.
   *
   * @param  string  $token
   * @return Response
   */
  public function getReset($token = null)
  {
    if (is_null($token)) App::abort(404);

    return View::make('password.reset')->with('token', $token);
  }

  /**
   * Handle a POST request to reset a user's password.
   *
   * @return Response
   */
  public function postReset(Request $req)
  {
    $credentials = $req->only(
      'email', 'password', 'password_confirmation', 'token'
    );

    $response = Password::reset($credentials, function($user, $password)
    {
      $user->password = hash('SHA512',$password);

      $user->save();
    });

    switch ($response)
    {
      case Password::INVALID_PASSWORD:
      case Password::INVALID_TOKEN:
      case Password::INVALID_USER:
        return redirect()->back()->with('error', Lang::get($response));

      case Password::PASSWORD_RESET:
        return redirect()->to('/admin/login')->with('status', Lang::get($response));
    }
  }
}
?>
