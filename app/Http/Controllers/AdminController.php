<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function Administrador(){
        return view ('administrador');
    }
}
