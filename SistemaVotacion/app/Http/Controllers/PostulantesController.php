<?php

namespace App\Http\Controllers;

use App\Models\Postulantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'POSTULANTEPARTIDO' => 'bail|required|max:200',
            'POSTULANTENUMEROLISTA' => 'bail|required|max:5',
            'POSTULANTEFOTOLISTA' => 'bail|required',
            'CANTIDADVOTOS' => 'bail|required',
            'TIPOVOTO' => 'bail|required|max:50',
            'POSTULANTEFOTO' => 'bail|required',
            'POSTULANTENOMBRE' => 'bail|required|max:30',
            'POSTULANTEAPELLIDO' => 'bail|required|max:30',
            'VICENOMBRE' => 'bail|required|max:30',
            'VICEAPELLIDO' => 'bail|required|max:30',
            'VICEFOTO' => 'bail|required',
        ]);

        $postulantes = Postulantes::create($request->all());

        if ($request->file('POSTULANTEFOTOLISTA')) {
            
            $postulantes->POSTULANTEFOTOLISTA = $request->file('POSTULANTEFOTOLISTA')->store('postulantes', 'public');
            $postulantes->save();
        }

        if ($request->file('POSTULANTEFOTO')) {
            
            $postulantes->POSTULANTEFOTO = $request->file('POSTULANTEFOTO')->store('postulantes', 'public');
            $postulantes->save();
        }

        if ($request->file('VICEFOTO')) {
            
            $postulantes->VICEFOTO = $request->file('VICEFOTO')->store('postulantes', 'public');
            $postulantes->save();
        }

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
    public function edit($POSTULANTEID)
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
            'POSTULANTEPARTIDO' => 'bail|required|max:200',
            'POSTULANTENUMEROLISTA' => 'bail|required|max:5',
            'POSTULANTEFOTOLISTA' => 'bail|required',
            'CANTIDADVOTOS' => 'bail|required',
            'TIPOVOTO' => 'bail|required|max:50',
            'POSTULANTEFOTO' => 'bail|required',
            'POSTULANTENOMBRE' => 'bail|required|max:30',
            'POSTULANTEAPELLIDO' => 'bail|required|max:30',
            'VICENOMBRE' => 'bail|required|max:30',
            'VICEAPELLIDO' => 'bail|required|max:30',
            'VICEFOTO' => 'bail|required',
        ]);

        $postulantes = Postulantes::findOrFail($POSTULANTEID);
        $postulantes->update($request->all());

        if ($request->file('POSTULANTEFOTOLISTA')) {
            Storage::disk('public')->delete($postulantes->POSTULANTEFOTOLISTA);
            $postulantes->POSTULANTEFOTOLISTA = $request->file('POSTULANTEFOTOLISTA')->store('postulantes', 'public');
            $postulantes->save();
        }

        if ($request->file('POSTULANTEFOTO')) {
            Storage::disk('public')->delete($postulantes->POSTULANTEFOTO);
            $postulantes->POSTULANTEFOTO = $request->file('POSTULANTEFOTO')->store('postulantes', 'public');
            $postulantes->save();
        }

        if ($request->file('VICEFOTO')) {
            Storage::disk('public')->delete($postulantes->VICEFOTO);
            $postulantes->VICEFOTO = $request->file('VICEFOTO')->store('postulantes', 'public');
            $postulantes->save();
        }

        return redirect()->route('postulantes.index')
            ->with('success', 'postulante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($POSTULANTEID)
    {
        $postulantes = Postulantes::findOrFail($POSTULANTEID);
        Storage::disk('public')->delete($postulantes->POSTULANTEFOTOLISTA);
        Storage::disk('public')->delete($postulantes->POSTULANTEFOTO);
        Storage::disk('public')->delete($postulantes->VICEFOTO);
        $postulantes->delete();

        return redirect()->route('postulantes.index')
            ->with('success', 'postulante deleted successfully');
    }
}
