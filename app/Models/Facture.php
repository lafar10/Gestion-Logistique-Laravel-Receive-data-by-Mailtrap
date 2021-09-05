<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = "factures";

    protected $fillable = [
        'name', 'prenom', 'email', 'tel', 'adresse', 'vehicule_type', 'poids', 'montant_total', 'lieu_ramassage', 'lieu_depose', 'date_ramassage', 'heure', 'minutes', 'period', 'etat_facture', 'created_at', 'updated_at'
    ];
}
