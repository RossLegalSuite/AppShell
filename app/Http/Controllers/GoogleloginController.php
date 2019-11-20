<?php
// GoogleloginController.php
namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Socialite;
use Redirect;

class GoogleloginController extends Controller
{
    /**
     * Create a redirect method to google api.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    /**
     * Return a callback method from google api.
     *
     * @return callback URL from google
     */
    public function handleGoogleCallback()
    {
        $userSocial = Socialite::driver('google')->user();
        // dd($userSocial);
        //return $userSocial;
        $finduser = User::where('email', $userSocial->email)->first();
        if ($finduser) {
            Auth::login($finduser);
            return Redirect::to('/home');
        } else {
            $new_user = User::create([
                'name' => $userSocial->name,
                'email' => $userSocial->email,
                'google_id' => $userSocial->id,
                'avatar' => $userSocial->avatar
            ]);
            Auth::login($new_user);
            return redirect()->back();
        }
    }
}
