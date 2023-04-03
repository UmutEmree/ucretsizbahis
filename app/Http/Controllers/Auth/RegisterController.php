<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ]); 
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'token' => Str::random(40),
        ]);

         $thisUser = User::findOrFail($user->id);
         $this->sendEmail($thisUser);

         return $user;

    }

    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

    }

    public function confirmation($token){
        $user = User::where('token',$token)->first();
        if($user){
            
            User::where('token',$token)->update(['confirmed' => '1', 'token' => NULL]); 
            return redirect(route('login'))->with('message','Hesabınız Başarıyla Doğrulandı. Bilgileriniz ile Giriş Yapabilirsiniz.');
        } else {
            return redirect('/');
        }
    }
    
}
