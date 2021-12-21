<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => 'required | max:100',
            'email' => 'required | email:rfc,dns | max:100',
            'password' => 'required | max:50',
            'password_confirmation' => 'required',
            'tel' => 'required | max:15',
            'birthday' => 'required | date',
            'post_code' => 'max:10',
            'prefectures_id' => 'required',
            'city' => 'required | max:100',
            'address' => 'required | max:100',
            'building' => 'max:100',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'first_name_kana' => $data['first_name_kana'],
            'last_name_kana' => $data['last_name_kana'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tel' => $data['tel'],
            'age' => $data['age'],
            'sex' => $data['sex'],
            'birthday' => $data['birthday'],
            'post_code' => $data['post_code'],
            'prefectures_id' => $data['prefectures_id'],
            'city_id' => $data['city_id'],
            'address' => $data['address'],
            'building' => $data['building'],
        ]);
    }
}
