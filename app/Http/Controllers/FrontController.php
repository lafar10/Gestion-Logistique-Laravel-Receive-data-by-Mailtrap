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

    public function triporteur_gmail()
    {
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
            'etat'
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
