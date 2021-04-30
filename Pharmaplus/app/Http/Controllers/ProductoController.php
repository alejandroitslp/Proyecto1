<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductoController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        
        if(($request->nombreproducto)!=null)
        {
            $product=Producto::where('nombre_producto', 'LIKE', '%'.$request->nombreproducto.'%')->get();
            //('nombre_producto', 'LIKE', '%'.$search.'%')->get();
            //('cod_producto', '=' ,$request->codigo)->get();
        }
        else
        {
            $product = Producto::orderBy('nombre_producto','asc')->paginate(20);
        }

        return view('Productos.index',compact('product'));
        return $product;
    }
    
    public function create()
    {
        return view('Productos.create');
    }
    public function store(StoreProducto $request)
    {
        //return $request->all(); Muestra todas las cosas enviadas a traves de POST del formulario

        /* $producto = new Producto();
        $producto->cod_producto=$request->codigo;
        $producto->nombre_producto=$request->name;
        $producto->descripcion_producto=$request->descripcion;
        $producto->unidad_producto=$request->unidad;
        $producto->precio_producto=$request->precioVenta;
        $producto->precio_compra=$request->precioCompra;
        $producto->stock_producto=$request->stock;
        $producto->cod_categoriaFK=$request->categoria;
        $producto->save();  */


         $producto =Producto::create([
            'cod_producto' => $request->codigo,
            'nombre_producto' => $request->name,
            'descripcion_producto' => $request->descripcion,
            'unidad_producto' => $request->unidad,
            'precio_producto' => $request->precioVenta,
            'precio_compra' => $request->precioCompra,
            'stock_producto' => $request->stock,
            'cod_categoriaFK' => $request->categoria,
        ]); 

        //$producto =Producto::create($request->all()); <---- El metodo mas practico, pero siempre y cuando coincidan atributos del form y de db


        $producto1=Producto::find($request->codigo); //Busca el cod_producto que se acaba de ingresar porque no queria con $producto jeje
        return redirect()->route('productos.show', $producto1);
    }

    public function show($id)
    {
        $producto=Producto::find($id);
        return view('Productos.show',compact('producto'));
    }

        // la funcion show y la funcion edit hacen lo mismo, pero en edit se ahorra codigo

    public function edit(Producto $producto)
    {
        //$producto = Producto::find($id);

        return view('Productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'codigo'=>'required|numeric',
            'name'=>'required',
            'descripcion'=>'required',
            'precioVenta'=>'required',
            'precioCompra'=>'required',
            'stock'=>'required'
        ]);//validacion

        $producto->cod_producto=$request->codigo;
        $producto->nombre_producto=$request->name;
        $producto->descripcion_producto=$request->descripcion;
        $producto->unidad_producto=$request->unidad;
        $producto->precio_producto=$request->precioVenta;
        $producto->precio_compra=$request->precioCompra;
        $producto->stock_producto=$request->stock;
        $producto->cod_categoriaFK=$request->categoria;
        $producto->save(); 

        //$producto->update($request->all()); Esta linea actualizaria todo chido pero los nombres de db y formulario no coinciden

        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }

    
}
