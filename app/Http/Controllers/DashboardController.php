<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Total productos y categorías
        $totalProductos = Producto::count();
        $totalCategorias = Categoria::count();

        // Stock por categoría
        $stockPorCategoria = Categoria::withSum('productos', 'stock')->get();

        // Distribución productos por categoría
        $productosPorCategoria = Categoria::withCount('productos')->get();

        // Top 5 productos con más stock
        $topProductos = Producto::orderBy('stock', 'desc')->take(5)->get();

        return view('dashboard', compact(
            'totalProductos',
            'totalCategorias',
            'stockPorCategoria',
            'productosPorCategoria',
            'topProductos'
        ));
    }
}
