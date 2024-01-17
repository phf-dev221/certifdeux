<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'lieu',
        'description',
        'image',
        'date',
        'statut',
        'user_id'
    ];

}
