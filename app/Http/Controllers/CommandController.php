<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Alert;


class CommandController extends Controller
{

    public function index()
    {
        $orders = Commande::orderBy('id', 'desc')->paginate(10);

        return view('Admin.Orders', compact('orders'));
    }

    public function create()
    {
        return view('Admin.Add_Order');
    }


    protected function messages()
    {
        return $messages = [

            'lieu_ramassage.required' => __('messages.lram'),
            'lieu_depose.required' => __('messages.lds'),
            'date_ramassage.required' => __('messages.dram'),
            'heure.required' => __('messages.heure'),
            'minutes.required' => __('messages.minutes'),
            'period.required' => __('messages.period'),
            'name.required' => __('messages.nom'),
            'prenom.required' => __('messages.prenom'),
            'email.required' => __('messages.email'),
            'tel.required' => __('messages.tel'),
            'tel.integer' => __('messages.tel integer'),
            'tel.max' => __('messages.tel max'),
            'tel.min' => __('messages.tel min'),
            'adresse.required' => __('messages.adresse'),

        ];
    }

    protected function rules()
    {
        return $rules = [
            'lieu_ramassage' => 'required',
            'lieu_depose' => 'required',
            'date_ramassage' => 'required',
            'heure' => 'required',
            'minutes' => 'required',
            'period' => 'required',
            'name' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'email' => 'required|email',
            'tel' => 'required|max:18',
            'adresse' => 'required|max:255',

        ];
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $messages = $this->messages();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }

        $command = Commande::create([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'adresse' => $request->input('adresse'),
            'vehicule_type' => $request->input('vehicule_type'),
            'lieu_ramassage' => $request->input('lieu_ramassage'),
            'lieu_depose' => $request->input('lieu_depose'),
            'date_ramassage' => $request->input('date_ramassage'),
            'heure' => $request->input('heure'),
            'minutes' => $request->input('minutes'),
            'period' => $request->input('period'),

        ]);

        return redirect()->route('index')->with('message', __('messages.command'));
    }


    public function delete(Request $request)
    {
        $orders = Commande::find($request->input('order_id'));

        if (!$orders) {
            return back();
        } else {
            $orders->delete();
            return redirect()->route('Orders');
        }
    }

    public function edit(Request $request)
    {
        $orders = Commande::find($request->input('order_id'));

        if (!$orders)
            return back();

        return view('Admin.Update_Order', compact('orders'));
    }

    public function update(Request $request)
    {
        $orders = Commande::find($request->input('order_id'));

        if (!$orders)
            return back();


        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



        $orders->update([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'adresse' => $request->input('adresse'),
            'vehicule_type' => $request->input('vehicule_type'),
            'lieu_ramassage' => $request->input('lieu_ramassage'),
            'lieu_depose' => $request->input('lieu_depose'),
            'date_ramassage' => $request->input('date_ramassage'),
            'heure' => $request->input('heure'),
            'minutes' => $request->input('minutes'),
            'period' => $request->input('period'),
            'etat' => $request->input('etat'),
        ]);

        return redirect()->route('Orders');
    }


    public function store_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lieu_ramassage' => 'required',
            'lieu_depose' => 'required',
            'date_ramassage' => 'required',
            'heure' => 'required',
            'minutes' => 'required',
            'period' => 'required',
            'name' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'email' => 'required|email',
            'tel' => 'required|min:7|max:16',
            'adresse' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $command = Commande::create([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'adresse' => $request->input('adresse'),
            'vehicule_type' => $request->input('vehicule_type'),
            'lieu_ramassage' => $request->input('lieu_ramassage'),
            'lieu_depose' => $request->input('lieu_depose'),
            'date_ramassage' => $request->input('date_ramassage'),
            'heure' => $request->input('heure'),
            'minutes' => $request->input('minutes'),
            'period' => $request->input('period'),
            'etat' => $request->input('etat'),
        ]);

        return redirect()->route('Orders');
    }

    public function search(Request $request)
    {
        $search = $request->input('search_commande');

        $orders = Commande::where('id', 'like', "%$search%")
            ->orwhere('name', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('lieu_depose', 'like', "%$search%")
            ->orwhere('vehicule_type', 'like', "%$search%")
            ->orwhere('lieu_ramassage', 'like', "%$search%")
            ->orwhere('etat', 'like', "%$search%")
            ->orwhere('tel', 'like', "%$search%")
            ->orwhere('adresse', 'like', "%$search%")
            ->paginate(5);

        return view('Admin.Orders')->with('orders', $orders);
    }
}
