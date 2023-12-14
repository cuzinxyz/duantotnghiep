<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
        ];
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectToGoogle() 
    {
       return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback() 
    {
       $user = Socialite::driver('google')->user();
    
       $this->_registerOrLoginUser($user);
    
       return redirect()->route('homepage');
    }
    
    public function redirectToFacebook() 
    {
       return Socialite::driver('facebook')->redirect();
    }
    
    public function handleFacebookCallback() 
    {
       $user = Socialite::driver('facebook')->user();
    
       $this->_registerOrLoginUser($user);
    
       return redirect()->route('homepage');
    }
    
    public function _registerOrLoginUser($data)
    {
       $user = User::where('email', '=', $data->email)->first();
    
       if(!$user) {
          $user = new User();
    
          $user->name = $data->name;
          $user->email = $data->email;
          $user->password = Str::random(10);
          $user->social_id = $data->id;
          $user->avatar = $data->avatar;
          $user->save();
       }
    
       Auth::login($user);
    }
}
