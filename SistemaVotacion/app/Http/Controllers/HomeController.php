<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulantes;
use App\Models\Votantes;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function updateVotes(Request $request)
    {

        //dd($request);
        $postulantes = Postulantes::findOrFail($request->optradio);
        $postulantes->update([
            'CANTIDADVOTOS' => $postulantes->CANTIDADVOTOS + 1,
        ]);
        $votante = Votantes::findOrFail(Auth::user()->VOTANTECEDULA);
        $votante->update([
            'VOTO' => true,
        ]);
        return view('votantes.idCard');
    }
}
