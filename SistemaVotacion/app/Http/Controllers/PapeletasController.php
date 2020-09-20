<?php

namespace App\Http\Controllers;

use App\Models\Papeletas;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;

class PapeletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papeletas = Papeletas::all();
        return view('papeletas.index', compact('papeletas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('papeletas.create');
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
            'PAPELETANUMERO' => 'bail|required|max:3',
            'VOTANTECEDULA' => 'bail|required|max:10',
            'PAPELETATIPO' => 'bail|required|max:3',
            'PAPELETAFECHAVOTACION' => 'required|date|date_format:Y-m-d|',
        ]);

        $papeletas = Papeletas::create($request->all());

        return redirect()->route('papeletas.index')
            ->with('success', 'papeleta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Papeletas  $papeletas
     * @return \Illuminate\Http\Response
     */
    public function show($PAPELETANUMERO)
    {
        $papeletas = Papeletas::findOrFail($PAPELETANUMERO);
        return view('papeletas.show', compact('papeletas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Papeletas  $papeletas
     * @return \Illuminate\Http\Response
     */
    public function edit($PAPELETANUMERO)
    {
        $papeletas = Papeletas::findOrFail($PAPELETANUMERO);
        return view('papeletas.edit', compact('papeletas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Papeletas  $papeletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $PAPELETANUMERO)
    {
        $request->validate([
            'PAPELETANUMERO' => 'bail|required|max:3',
            'VOTANTECEDULA' => 'bail|required|max:10',
            'PAPELETATIPO' => 'bail|required|max:3',
            'PAPELETAFECHAVOTACION' => 'required|date|date_format:Y-m-d|',
        ]);
        $papeletas = Papeletas::findOrFail($PAPELETANUMERO);
        $papeletas->update($request->all());

        return redirect()->route('papeletas.index')
            ->with('success', 'papeleta updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Papeletas  $papeletas
     * @return \Illuminate\Http\Response
     */
    public function destroy($PAPELETANUMERO)
    {
        $papeletas = Papeletas::findOrFail($PAPELETANUMERO);
        $papeletas->delete();

        return redirect()->route('papeletas.index')
            ->with('success', 'papeleta deleted successfully');
    }
}
