<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Mail\CreateCommades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        return view('Front.Home');
    }

    public function triporteur()
    {
        return view('Front.triporteur');
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


    public function triporteur_gmail(Request $request)
    {
        $rules = $this->rules();
        $messages = $this->messages();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }
        
        $data = request([
            'name',
            'prenom',
            'email',
            'tel',
            'adresse',
            'vehicule_type',
            'lieu_ramassage',
            'lieu_depose',
            'date_ramassage',
            'heure',
            'minutes',
            'period',
            'etat',
            'vehicule_type'
        ]);

        Mail::to('ayoub_lafar@hotmail.com')
            ->send(new CreateCommades($data));

        return redirect()->back()->with('flash', 'success');
    }

    public function camion()
    {
        return view('Front.camion');
    }


    public function honda()
    {
        return view('Front.honda');
    }

    public function camionnette()
    {
        return view('Front.camionnette');
    }

    public function remoque()
    {
        return view('Front.remoque');
    }

    public function pick()
    {
        return view('Front.pick');
    }

    public function benne()
    {
        return view('Front.camionabenne');
    }

    public function auto(Request $request)
    {
        $data = Ville::select('ville')
            ->where('ville', 'LIKE', '%' . $request->terms . '%')
            ->get();

        return response()->json($data);


        /*if ($request->get('query')) {
            $data = DB::table('ville')

            $output = '<ul class="dropdown-menu" style="display:block;position:relative;">';

            foreach ($data as $row) {
                $output .= '<li>' . $row->ville . '</li>';
            }

            $output .= '</ul>';

            echo $output;
        }*/
    }

    public function switch(Request $request, $lang)
    {
        session(['APP_LOCALE' => $lang]);
        return redirect()->back();
    }
}
