<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;



class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Memberships/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $member)
    {


        return view('Memberships/Edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $membership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership $membership)
    {
        //
    }
    public function buscarMembresia(Request $request)
{
    $search = $request->query('search');

    // Realizar la lógica de búsqueda en la base de datos o en los datos disponibles
    $results = Membership::where('name', 'like', '%' . $search . '%')->get();

    // Devolver los resultados como respuesta JSON
    return response()->json($results);
}

}
