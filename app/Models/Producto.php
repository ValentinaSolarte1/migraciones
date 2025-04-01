<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto'; // Nombre de la tabla en la base de datos

    protected  $primaryKey = 'id'; // Nombre de la columna que actúa como clave primaria
    protected $fillable = [
        'nombre', // Nombre del producto
        'precio', // Precio del producto
        'stock', // Cantidad del producto
    ];
}
