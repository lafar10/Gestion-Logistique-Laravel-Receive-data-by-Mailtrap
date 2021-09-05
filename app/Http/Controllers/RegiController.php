<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegiController extends Controller
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
            'name1' => ['required', 'string', 'max:255'],
            'email1' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password1' => ['required', 'string', 'min:8', 'confirmed'],
            'prenom1' => ['required', 'string', 'max:255'],
            'tel1' => ['required', 'string', 'max:15'],
            'adresse1' => ['required', 'string', 'max:255'],
            'ville1' => ['required', 'string', 'max:255'],
            'region1' => ['required', 'string', 'max:255'],
            'societe_name1' => ['required', 'string', 'max:255'],
            'site_web1' => ['required', 'string', 'max:255'],
            'rc1' => ['required', 'string', 'max:255'],
            'ice1' => ['required', 'string', 'max:255'],

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
        $user = User::create([
            'name' => $data['name1'],
            'email' => $data['email1'],
            'password' => Hash::make($data['password1']),
            'prenom' => $data['prenom1'],
            'tel' => $data['tel1'],
            'adresse' => $data['adresse1'],
            'ville' => $data['ville1'],
            'region' => $data['region1'],
            'societe_name' => $data['societe_name1'],
            'site_web' => $data['site_web1'],
            'rc' => $data['rc1'],
            'ice' => $data['ice1'],

        ]);

        return redirect()->route('index');
    }
}
