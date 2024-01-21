<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Vino;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("bodega.index", [ "bodegas" => Bodega::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Bodega::create( 
            $request->validate([
                "nombre" => "required",
                "localizacion" => "required",
                "telefono" => "required",
                "email" => "required|email",
                "dispone" => "required|boolean"
            ])
        );

        return redirect(route("bodegas.index"));
    }

    public function showStore()
    {
        return view("bodega.store");
    }
    public function show(Bodega $bodega)
    {
        return view("bodega.show", [ 
            "bodega" => $bodega,
            "vinos" => $bodega->vinos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bodega $bodega)
    {
        $bodega->update(
            $request->validate([
                "nombre" => "required",
                "localizacion" => "required",
                "telefono" => "required",
                "email" => "required|email",
                "dispone" => "required|boolean"
            ])
        );

        return redirect(route("bodega.show", $bodega->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();
        return redirect(route("bodegas.index"));
    }
}
