<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;


class PrincipalController extends Controller
{
    public function Principal(){

    }

    //login

       protected function Login()
    {
        return view ('principal');

        $users = DB::table('alumnos')->select('matricula','PIN')->get();

        return $users;
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
