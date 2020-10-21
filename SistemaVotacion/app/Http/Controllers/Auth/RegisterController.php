<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Votantes;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider :: HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'VOTANTECEDULA' => 'bail|required|max:10|unique:votantes',
            'VOTANTENOMBRES' => 'bail|required|max:30',
            'VOTANTEAPELLIDOS' => 'bail|required|max:30',
            'VOTANTEFECHANACIMIENTO' => 'required|date|date_format:Y-m-d|',
            'VOTANTEPROVINCIA' => 'bail|required|max:30',
            'VOTANTECANTON' => 'bail|required|max:30',
            'VOTANTECIRCUNSCRIPCION' => 'bail|required|max:2',
            'VOTANTEPARROQUIA' => 'bail|required|max:30',
            'VOTANTETIPO' => 'bail|required|max:3',
            //'VOTANTECODIGOBARRAS' => 'bail|required|max:13|uniquevotantes',
            'VOTANTEFOTO' => 'bail|required',
            'VOTANTEPASSWORD' => 'bail|required|max:8|min:8',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Votantes
     */
    protected function create(array $data)
    {
        $result = '';

        for ($i = 0; $i < 13; $i++) {
            $result .= mt_rand(0, 9);
        }
        $votantes= Votantes::create([
            'VOTANTECEDULA' => $data['VOTANTECEDULA'],
            'VOTANTENOMBRES' => $data['VOTANTENOMBRES'],
            'VOTANTEAPELLIDOS' => $data['VOTANTEAPELLIDOS'],
            'VOTANTEFECHANACIMIENTO' => $data['VOTANTEFECHANACIMIENTO'],
            'VOTANTEPROVINCIA' => $data['VOTANTEPROVINCIA'],
            'VOTANTECANTON' => $data['VOTANTECANTON'],
            'VOTANTECIRCUNSCRIPCION' => $data['VOTANTECIRCUNSCRIPCION'],
            'VOTANTEPARROQUIA' => $data['VOTANTEPARROQUIA'],
            'VOTANTETIPO' => $data['VOTANTETIPO'],
            'VOTANTECANTON' => $data['VOTANTECANTON'],
            'VOTANTECODIGOBARRAS' =>  $result,
            'VOTANTEFOTO' => $data['VOTANTEFOTO'],
            'VOTANTEPASSWORD' => Hash::make($data['VOTANTEPASSWORD']),
            'VOTO' => false,
            
        ]);
        $request = request();

        $profileImage = $request->file('VOTANTEFOTO');
        if ($request->file('VOTANTEFOTO')) {
            
            $votantes->VOTANTEFOTO = $profileImage->store('votantes', 'public');
            $votantes->save();
        }
        return $votantes;
    }

    // public function generateBarcode(Request $request){
    //     $id = $request->get('id');
    //     $codigo = Votantes::find($id);
    //     return view('barcode')->with('codigo',$codigo);
    // }
    // <div class="barcode">
    //                         <p class="name">{{$product->name}}</p>
    //                         <p class="price">Price: {{$product->sale_price}}</p>
    //                         {!! DNS1D::getBarcodeHTML($product->pid, "C128",1.4,22) !!}
    //                         <p class="pid">{{$product->pid}}</p>
    //                     </div>
}
