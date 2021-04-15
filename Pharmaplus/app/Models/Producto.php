<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //Busca en tabla especificada como producto
    protected $table = 'producto';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='cod_producto';
    public $incrementing='false';
    protected $fillable = 
    [
    'cod_producto',
    'nombre_producto' ,
    'descripcion_producto' ,
    'unidad_producto'  ,
    'precio_producto'  ,
    'precio_compra' ,
    'stock_producto' ,
    'cod_categoriaFK'
    ];

    // protected $guarded=[]; hace lo mismo que $fillable pero a diferencia que guarda todo, menos lo especificado en arreglo
}
