<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class StoreUserController extends Controller
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
    protected function validator()
    {
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_a' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prenom_a' => ['required', 'string', 'max:255'],
            'tel_a' => ['required', 'string', 'max:15'],
            'adresse_a' => ['required', 'string', 'max:255'],
            'ville_a' => ['required', 'string', 'max:255'],
            'region_a' => ['required', 'string', 'max:255'],
            'societe_name_a' => ['required', 'string', 'max:255'],
            'site_web_a' => ['required', 'string', 'max:255'],
            'rc_a' => ['required', 'string', 'max:255'],
            'ice_a' => ['required', 'string', 'max:255'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->input('name_a'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'prenom' => $request->input('prenom_a'),
            'tel' => $request->input('tel_a'),
            'adresse' => $request->input('adresse_a'),
            'ville' => $request->input('ville_a'),
            'region' => $request->input('region_a'),
            'societe_name' => $request->input('societe_name_a'),
            'site_web' => $request->input('site_web_a'),
            'rc' => $request->input('rc_a'),
            'ice' => $request->input('ice_a'),

        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
