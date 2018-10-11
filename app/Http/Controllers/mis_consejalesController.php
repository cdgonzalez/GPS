<?php

namespace Consejales\Http\Controllers;

use Illuminate\Http\Request;

class MisConsejalesController extends Controller
{
    public function Consejales(){
        return view ('mis_consejales');
    }
}
