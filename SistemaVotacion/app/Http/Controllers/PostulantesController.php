<?php

namespace App\Http\Controllers;

use App\Models\Postulantes;
use Illuminate\Http\Request;

class PostulantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulantes = Postulantes::all();
        return view('postulantes.index', compact('postulantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postulantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation parameters bail|required|unique:posts|max:255
        $request->validate([
            'POSTULANTEID' => 'bail|required|max:10',
            'PAPELETANUMERO' => 'bail|required|max:3',
            'VOTANTECEDULA' => 'bail|required|max:10',
            'POSTULANTECARGO' => 'bail|required|max:30',
            'POSTULANTEPARTIDO' => 'bail|required|max:50',
            'POSTULANTENUMEROLISTA' => 'bail|required|max:2',
            'POSTULANTEFOTOLISTA' => 'bail|required',
            'CANTIDADVOTOS' => 'bail|required',
            'TIPOVOTO' => 'bail|required|max:50',
        ]);

        Postulantes::create($request->all());

        return redirect()->route('postulantes.index')
            ->with('success', 'postulante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function show($POSTULANTEID)
    {
        $postulantes = Postulantes::findOrFail($POSTULANTEID);
        return view('postulantes.show', compact('postulantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function edit( $POSTULANTEID)
    {
        $postulantes = Postulantes::findOrFail($POSTULANTEID);
        return view('postulantes.edit', compact('postulantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $POSTULANTEID)
    {
        $request->validate([
            'POSTULANTEID' => 'bail|required|max:10',
            'PAPELETANUMERO' => 'bail|required|max:3',
            'VOTANTECEDULA' => 'bail|required|max:10',
            'POSTULANTECARGO' => 'bail|required|max:30',
            'POSTULANTEPARTIDO' => 'bail|required|max:50',
            'POSTULANTENUMEROLISTA' => 'bail|required|max:2',
            'POSTULANTEFOTOLISTA' => 'bail|required',
            'CANTIDADVOTOS' => 'bail|required',
            'TIPOVOTO' => 'bail|required|max:50',
        ]);
        
        $postulantes = Postulantes::findOrFail($POSTULANTEID);
        $postulantes->update($request->all());

        return redirect()->route('postulantes.index')
            ->with('success', 'postulante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulantes $postulantes)
    {
        $postulantes->delete();

        return redirect()->route('postulantes.index')
            ->with('success', 'postulante deleted successfully');
    }
}
