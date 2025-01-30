<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function form()
    {
        return view('contatti');
    }

    public function receive(Request $request)
    {
        //$request->all();
        $mail = new \App\Mail\Contact(
            $request->name,
            $request->email,
            $request->content,
        );


        if (empty($request->name) || empty($request->email) || empty($request->content)) {

            return redirect()->back()->with(['error'=>'Non hai compilato tutti i campi']);
    
        }else {
            \Illuminate\Support\Facades\Mail::to('admin@example.com')->send($mail);

            return redirect()->back()->with(['success'=>'Richiesta inviata correttamente']);
        }
    }
}
