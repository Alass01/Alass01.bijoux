<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'descriptiobn',
        'prix',
        'quantite',
        'img_url'
    
    ];

}
