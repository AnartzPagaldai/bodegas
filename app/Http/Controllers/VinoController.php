<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function showStore(string $idBodega)
    {
        return view("vino.store", ["idBodega" => $idBodega]);
    }
    public function store(Request $request, $idBodega)
    {
        $validate = $request->validate([
            "nombre" => "required",
            "tipo" => "required"
        ]);

        $validate["bodega_id"] = $idBodega;

        Vino::create($validate);

        return redirect(route("bodega.show", $idBodega));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vino $vino, $idBodega)
    {
        return view("vino.show", ["vino" => $vino, "idBodega" => $idBodega]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vino $vino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vino $vino, $idBodega)
    {
        $validate = $request->validate([
            "nombre" => "required",
            "tipo" => "required"
        ]);

        $vino->update($validate);

        return redirect(route("bodega.show", $idBodega));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vino $vino, $idBodega)
    {
        $vino->delete();
        return redirect(route("bodega.show", $idBodega));
    }
}
