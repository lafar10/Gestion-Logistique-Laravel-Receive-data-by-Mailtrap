<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = "commandes";

    protected $fillable = [
        'name', 'prenom', 'email', 'tel', 'adresse', 'vehicule_type', 'lieu_ramassage', 'lieu_depose', 'date_ramassage', 'heure', 'minutes', 'period', 'etat', 'created_at', 'updated_at'
    ];
}
