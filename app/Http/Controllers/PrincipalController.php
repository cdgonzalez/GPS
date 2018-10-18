<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use JavaScript;
use View;


class PrincipalController extends Controller
{
    public function Principal(){

        return view ('modificarConsejal');
    }

    //login

       public function Login(Request $request)
    {
            $data = $request->all();


        if(request()->ajax())
            {

            $matricula = $request->input('matricula');
            $pin = $request->input('pin');

                $json['nombre']="";
                $json['matricula']="";
               /* $results = DB::select('select * from alumnos where matricula = :mat', ['mat' => $matricula], 'and pin = :p',['p' => $pin]);
            */
            $results = DB::select('select * from alumno where matricula = :matricula', ['matricula' => $matricula],'and pin = :pin',['pin' => $pin]);

//                $results= table('alumnos')->where([['matricula','=',$matricula].
//                                             ['PIN','=',$pin],
//                                             ])->get();

                foreach ($results as $res)
                {
                    $json['nombre']=$res->nombre;
                    $json['matricula']=$res->matricula;
                    $json['administrador'] = $res->Admin;
                }
            /*if($json['administrador']== true){

                return redirect()->route('administrador/{nombreAdmin}',[$json['nombre']]);
            }else{
                return redirect()->route('consejales')->with('Info',json_encode($json));
            }*/

            return json_encode($json);
            //return  response()->json($results);
        }

    }

    public function ModCon(){
        return view ('modificarConsejal');
    }

    public function ModUs(){
        return view('modificarUsuario');
    }

    public function RegUs(){
        return view('registrarUsuario');
    }

        public function postLogin(Request $request)
   {
    $this->validate($request, [
        'user' => 'required',
        'password' => 'required',
    ]);



    $credentials = $request->only('user', 'password');

    if ($this->auth->attempt($credentials, $request->has('remember')))
    {

        /*$usuarioactual=\Auth::user();
       return view('principal')->with("usuario",  $usuarioactual);*/
        return view("admnistrador");
    }

    return "credenciales incorrectas";

    }


//login

}
