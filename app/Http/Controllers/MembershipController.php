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
    public function edit(Membership $membresium)
    {
        // $member->name = $request->input('name');
        return view('Memberships/Edit', ['member' => $membresium]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $membership)
    {
        // return view('Memberships/Edit', compact('member'));
          // Actualizar los campos del objeto $membership con los datos del formulario
    $membership->name = $request->input('name');
            
            $membership->l_name= $request->input('l_name');
            // $membership->name= $request->input('doc_type');
            // $membership->name= $request->input('doc_number');
            // $membership->name= $request->input('bir_date');
            // $membership->name= $request->input('chris_date'); // Fecha de bautizo
            // $membership->name= $request->input('h_spirit'); // Espiritu santo
            // $membership->name= $request->input('is_active');
    // Actualizar otros campos según sea necesario

    // Guardar los cambios en la base de datos
    $membership->save();

    // Redirigir o devolver una respuesta según tus necesidades
    return redirect()->route('membresia.edit', $membership->id)->with('success', 'Membership updated successfully');
        return view('Memberships/Edit', ['member' => $membership]);
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
