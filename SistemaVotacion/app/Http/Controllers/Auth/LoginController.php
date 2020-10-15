<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'VOTANTECEDULA';
    }


    public function login(Request $request){
       $ced=$request->VOTANTECEDULA;
       $pass=$request->VOTANTECODIGOBARRAS;
       $query=DB::select("select VOTANTECODIGOBARRAS,VOTANTECEDULA from votantes where VOTANTECEDULA='".$ced."';");
       $data=$query[0]->VOTANTECODIGOBARRAS;
       //dd($query[0],$data);

        /*if (Auth::attempt(['VOTANTECEDULA' => $ced,'VOTANTECODIGOBARRAS' => $pass])){
            
             //return redirect('/home');
             dd('data');
        }*/
        if(hash::check($pass,$data)){
            return view('home', compact('query'));
        }
        //{{ Auth::user()->VOTANTECODIGOBARRAS }}
        return $this->sendFailedLoginResponse($request);
    }
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'VOTANTECODIGOBARRAS' => 'required',
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'VOTANTECODIGOBARRAS');
    }

   
}
