<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
Use Alert;


class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::orderBy('id', 'desc')->paginate(10);
        return view('Admin.Factures', compact('factures'));
    }

    public function create()
    {
        return view('Admin.Add_Facture');
    }

    public function delete(Request $request)
    {
        $factures = Facture::find($request->input('facture_id'));

        if (!$factures) {
            return back();
        } else {
            $factures->delete();
            return redirect()->route('Factures');
        }
    }

    public function edit(Request $request)
    {
        $factures = Facture::find($request->input('facture_id'));

        if (!$factures)
            return back();

        return view('Admin.Update_Facture', compact('factures'));
    }

    public function update(Request $request)
    {
        $factures = Facture::find($request->input('facture_id'));

        if (!$factures)
            return back();


        $validator = Validator::make($request->all(), [
            'lieu_ramassage' => 'required',
            'lieu_depose' => 'required',
            'date_ramassage' => 'required',
            'heure' => 'required',
            'minutes' => 'required',
            'period' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'tel' => 'required|min:7|max:16',
            'adresse' => 'required|max:255',
            'montant_total' => 'required',
            'poids' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



        $factures->update($request->all());

        return redirect()->route('Factures');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lieu_ramassage' => 'required',
            'lieu_depose' => 'required',
            'name' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'email' => 'required|email',
            'tel' => 'required|min:7|max:16',
            'adresse' => 'required|max:255',
            'montant_total' => 'required',
            'poids' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $factures = Facture::create([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'adresse' => $request->input('adresse'),
            'poids' => $request->input('poids'),
            'montant_total' => $request->input('montant_total'),
            'vehicule_type' => $request->input('vehicule_type'),
            'lieu_ramassage' => $request->input('lieu_ramassage'),
            'lieu_depose' => $request->input('lieu_depose'),
            'date_ramassage' => $request->input('date_ramassage'),
            'heure' => $request->input('heure'),
            'minutes' => $request->input('minutes'),
            'period' => $request->input('period'),
            'etat_facture' => $request->input('etat_facture'),

        ]);

        return redirect()->route('Factures');
    }

    public function search(Request $request)
    {
        $search = $request->input('search_facture');

        $factures = Facture::where('id', 'like', "%$search%")
            ->orwhere('name', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('lieu_depose', 'like', "%$search%")
            ->orwhere('lieu_ramassage', 'like', "%$search%")
            ->orwhere('etat_facture', 'like', "%$search%")
            ->orwhere('tel', 'like', "%$search%")
            ->orwhere('adresse', 'like', "%$search%")
            ->orwhere('montant_total', 'like', "%$search%")
            ->orwhere('poids', 'like', "%$search%")
            ->paginate(5);

        return view('Admin.Factures')->with('factures', $factures);
    }

    public function pdf(Request $request)
    {
        $facture = Facture::find($request->input('facture_id'));

        if (!$facture)
            return back();

        $pdf = PDF::loadView('Admin.Pdf', compact('facture'));
        return $pdf->download('Facture ' . $facture->id . '.pdf');

        /*// instantiate and use the dompdf class
        $dompdf = new Dompdf($facture);
        $dompdf->loadHtml(view(, compact('facture')));
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Member_facture_' . $facture->name . '.pdf', array("Attachment" => false));*/
    }
}
