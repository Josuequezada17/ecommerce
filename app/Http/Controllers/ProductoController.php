<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$productos = Producto::with('user:id,name,email')->get();
        $productos = Producto::all();

        return view('producto.indexProductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.createProductos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar
        $request->validate([
            'categoria' => 'required',
            'modelo' => 'required|string|min:3',
            'marca' => 'required',
            'anio' => 'required',
            'version' => 'required',
            'color' => 'required',
            'cilindros' => 'required',
            'descripcion' => 'required|string|min:1',
            'precio' => 'required',
        ]);
        //$request->merge(['user_id' => auth()->id()]);
        $request->merge(['user_id' => Auth::id()]);
        
        $producto = new Producto();
        $producto->user_id = $request->user_id;
        $producto->categoria_id = $request->categoria;
        $producto->modelo = $request->modelo;
        $producto->marca_id = $request->marca;
        $producto->anio = $request->anio;
        $producto->version = $request->version;
        $producto->color = $request->color;
        $producto->cilindros = $request->cilindros;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        
        $producto->save();

       /* if ($request->file('archivo')->isValid()) {
            $ruta = $request->archivo->store('', 'public');

            $archivo = new Archivo();
            $archivo->ubicacion = $ruta;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $archivo->comentario_id = $comentario->id;
            $archivo->save();
        }*/

        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto.showProductos', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //$this->authorize('update', $comentario);

        $marcas = [
            'Acura', 'Alfa Romeo', 'AM General', 'AMC', 'Aston Martin', 'Audi', 'Avanti', 'Bentley', 'BMW', 'Bugatti',
            'Buick', 'Cadillac', 'Chevrolet', 'Chrysler', 'Citroën', 'Crosley', 'Datsun', 'DeLorean', 'DeSoto', 'Dodge',
            'Eagle', 'Edsel', 'Ferrari', 'Fiat', 'Ford', 'Geo', 'Genesis', 'GMC', 'Honda', 'Hummer', 'Hyundai', 'Infiniti',
            'Isuzu', 'Jaguar', 'Jeep', 'Kaiser', 'Kia', 'Lamborghini', 'Lancia', 'Land Rover', 'Lexus', 'Lincoln', 'Lotus',
            'Maserati', 'Maybach', 'Mazda', 'McLaren', 'Mercedes-Benz', 'Mercury', 'Mini', 'Mitsubishi', 'Nash', 'Nissan',
            'Oldsmobile', 'Opel', 'Packard', 'Pagani', 'Peugeot', 'Plymouth', 'Pontiac', 'Porsche', 'Ram', 'Renault',
            'Rolls-Royce', 'Saab', 'Saturn', 'Scion', 'Shelby', 'Smart', 'Spyker', 'Studebaker', 'Subaru', 'Suzuki', 'Tata',
            'Tesla', 'Toyota', 'Triumph', 'Vauxhall', 'Vector', 'Volkswagen', 'Volvo', 'Willys'
        ];
        
        return view('producto.editProductos', compact('producto', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'categoria' => 'required',
            'modelo' => 'required|string|min:3',
            'marca' => 'required',
            'anio' => 'required',
            'version' => 'required',
            'color' => 'required',
            'cilindros' => 'required',
            'descripcion' => 'required|string|min:1',
            'precio' => 'required',
        ]);
        
        $producto->categoria_id = $request->categoria;
        $producto->modelo = $request->modelo;
        $producto->marca_id = $request->marca;
        $producto->anio = $request->anio;
        $producto->version = $request->version;
        $producto->color = $request->color;
        $producto->cilindros = $request->cilindros;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        
        $producto->save();

       /* if ($request->file('archivo')->isValid()) {
            $ruta = $request->archivo->store('', 'public');

            $archivo = new Archivo();
            $archivo->ubicacion = $ruta;
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $archivo->mime = $request->archivo->getClientMimeType();
            $archivo->comentario_id = $comentario->id;
            $archivo->save();
        }*/

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
