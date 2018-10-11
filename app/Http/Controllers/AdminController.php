<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

class AdminiController extends Controller
{
    public function Administrador(){
        return view ('administrador');
    }
}
