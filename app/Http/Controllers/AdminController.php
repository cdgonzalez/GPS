<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Administrador(){
        return view ('administrador');
    }
}
