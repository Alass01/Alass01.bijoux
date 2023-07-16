<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenir_p_c extends Model
{
    use HasFactory;
    protected $fillable=[
        'clients_id',
        'commandes_id',
        'produits_id',
        'quantite',
        'total'
    ];
    public $table='contenir_p_c';
}
