<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Alert;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('Admin.Users', compact('users'));
    }

    public function delete(Request $request)
    {


        $users = User::find($request->input('user_id'));

        if (!$users) {
            return back();
        } else {
            $users->delete();
            return redirect()->route('Users');
        }
    }

    public function edit(Request $request)
    {
        $users = User::find($request->input('user_id'));

        if (!$users)
            return back();

        return view('Admin.Update_users', compact('users'));
    }

    public function update(Request $request)
    {
        $users = User::find($request->input('user_id'));

        if (!$users)
            return back();


        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'societe_name' => ['string', 'max:255'],
            'site_web' => ['string', 'max:255'],
            'rc' => ['string', 'max:255'],
            'ice' => ['string', 'max:255'],

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



        $users->update($request->all());

        return redirect()->route('Users');
    }

    public function search(Request $request)
    {
        $search = $request->input('search_user');

        $users = User::where('id', 'like', "%$search%")
            ->orwhere('name', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('societe_name', 'like', "%$search%")
            ->orwhere('rc', 'like', "%$search%")
            ->orwhere('user_type', 'like', "%$search%")
            ->orwhere('tel', 'like', "%$search%")
            ->orwhere('adresse', 'like', "%$search%")
            ->orwhere('ice', 'like', "%$search%")
            ->orwhere('ville', 'like', "%$search%")
            ->orwhere('region', 'like', "%$search%")
            ->paginate(5);

        return view('Admin.Users')->with('users', $users);
    }

    public function my_account(Request $request)
    {
        $users = User::find($request->input('user_id'));

        if (!$users)
            return back();

        return view('Front.Compte', compact('users'));
    }

    public function update_user_account(Request $request)
    {
        $users = User::find($request->input('user_id'));

        if (!$users)
            return back();


        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'societe_name' => ['string', 'max:255'],
            'site_web' => ['string', 'max:255'],
            'rc' => ['string', 'max:255'],
            'ice' => ['string', 'max:255'],

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



        $users->update($request->all());

        return redirect()->route('index');
    }
}
