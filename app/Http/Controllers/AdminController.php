<?php

namespace App\Http\Controllers;


use App\Models\Commande;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }

    public function get_command()
    {
        $orders = Commande::where('etat', 'Non')->paginate(5);

        return view('Admin.Orders', compact('orders'));
    }
}
