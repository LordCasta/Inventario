<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get(); // Eager Loading
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->Nombre;
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->Descripcion;
        $producto->categoria_id = intval($request->categoria);
        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
            $categorias = Categoria::all();
        return view('productos.show', compact('producto', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all() );
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('danger', 'Producto eliminado con éxito');
    }
}
