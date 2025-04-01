<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteGimnasio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'edad', 'peso', 'altura', 'membresia_activa'];
}

