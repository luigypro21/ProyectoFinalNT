<?php

namespace App\Http\Controllers;

use App\Models\Votantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VotantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votantes = Votantes::all();
        return view('votantes.index', compact('votantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('votantes.create');
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
            'VOTANTECEDULA' => 'bail|required|max:10',
            'VOTANTENOMBRES' => 'bail|required|max:30',
            'VOTANTEAPELLIDOS' => 'bail|required|max:30',
            'VOTANTEFECHANACIMIENTO' => 'required|date|date_format:Y-m-d|',
            'VOTANTEPROVINCIA' => 'bail|required|max:30',
            'VOTANTECANTON' => 'bail|required|max:30',
            'VOTANTECIRCUNSCRIPCION' => 'bail|required|max:2',
            'VOTANTEPARROQUIA' => 'bail|required|max:30',
            'VOTANTETIPO' => 'bail|required|max:3',
            'VOTANTECODIGOBARRAS' => 'bail|required|max:13',
            'VOTANTEFOTO' => 'bail|required',
        ]);

        $votantes = Votantes::create($request->all());

        if ($request->file('VOTANTEFOTO')) {
            
            $votantes->VOTANTEFOTO = $request->file('VOTANTEFOTO')->store('votantes', 'public');
            $votantes->save();
        }

        return redirect()->route('votantes.index')
            ->with('success', 'votante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function show($VOTANTECEDULA)
    {
        $votantes = Votantes::findOrFail($VOTANTECEDULA);
        return view('votantes.show', compact('votantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function edit($VOTANTECEDULA)
    {
        $votantes = Votantes::findOrFail($VOTANTECEDULA);
        return view('votantes.edit', compact('votantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $VOTANTECEDULA)
    {
        $request->validate([
            'VOTANTECEDULA' => 'bail|required|max:10',
            'VOTANTENOMBRES' => 'bail|required|max:30',
            'VOTANTEAPELLIDOS' => 'bail|required|max:30',
            'VOTANTEFECHANACIMIENTO' => 'required|date|date_format:Y-m-d|',
            'VOTANTEPROVINCIA' => 'bail|required|max:30',
            'VOTANTECANTON' => 'bail|required|max:30',
            'VOTANTECIRCUNSCRIPCION' => 'bail|required|max:2',
            'VOTANTEPARROQUIA' => 'bail|required|max:30',
            'VOTANTETIPO' => 'bail|required|max:3',
            'VOTANTECODIGOBARRAS' => 'bail|required|max:13',
            'VOTANTEFOTO' => 'bail|required',
        ]);
        $votantes = Votantes::findOrFail($VOTANTECEDULA);
        $votantes->update($request->all());

        if ($request->file('VOTANTEFOTO')) {
            Storage::disk('public')->delete($votantes->VOTANTEFOTO);
            $votantes->VOTANTEFOTO = $request->file('VOTANTEFOTO')->store('votantes', 'public');
            $votantes->save();
        }

        return redirect()->route('votantes.index')
            ->with('success', 'votante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votantes  $votantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($VOTANTECEDULA)
    {
        $votantes = Votantes::findOrFail($VOTANTECEDULA);
        Storage::disk('public')->delete($votantes->VOTANTEFOTO);
        $votantes->delete();

        return redirect()->route('votantes.index')
            ->with('success', 'votante deleted successfully');
    }
}
