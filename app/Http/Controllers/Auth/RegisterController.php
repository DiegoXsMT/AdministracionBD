<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'ap_p' => ['required', 'string', 'max:255'],
            'ap_m' => ['required', 'string', 'max:255'],
            'fecha_nac' => ['required', 'date'],
            'curp' => ['required', 'string', 'max:255'],
            'no_telefono' => ['required', 'string', 'max:255'],
            'rfc' => ['required', 'string', 'max:255'],
            'no_identificacion' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terminos' => ['required', 'accepted'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'ap_p' => $data['ap_p'],
            'ap_m' => $data['ap_m'],
            'fecha_nac' => $data['fecha_nac'],
            'curp' => $data['curp'],
            'no_telefono' => $data['no_telefono'],
            'rfc' => $data['rfc'],
            'no_identificacion' => $data['no_identificacion'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}