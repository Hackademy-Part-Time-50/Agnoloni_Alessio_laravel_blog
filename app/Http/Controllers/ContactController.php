<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contatti()
    {
        return view('contatti');
    }
}
