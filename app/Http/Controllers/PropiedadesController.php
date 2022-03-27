<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $propiedades = Propiedades::latest()->paginate(5);
        return view('propiedades.index' , compact('propiedades'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('propiedades.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'duenios' => 'required',
            'tipo_propiedad' => 'required',
            'estado' => 'required',
            'cantidad' => 'required'
        ]);

        Propiedades::create($request->all());
        $propiedades = Propiedades::latest()->paginate(5);

        return view('propiedades.index', compact('propiedades'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show( $id)
    {
        //
        $propiedades = Propiedades::find($id);
        return view('propiedades.show', compact('propiedades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)

    {
        //
        $propiedades = Propiedades::find($id);
        return view('propiedades.edit', compact('propiedades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {
        $propiedades=Propiedades::find($id);
        $propiedades->duenios = $request->duenios;
        $propiedades->tipo_propiedad = $request->tipo_propiedad;
        $propiedades->estado = $request->estado;
        $propiedades->cantidad = $request->cantidad;
        $propiedades->save();
        return redirect('mis_propiedades');
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propiedades  $propiedades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propiedades $propiedades)
    {
        //
    }
}
