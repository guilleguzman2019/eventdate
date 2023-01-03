<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Card;

class EditInvitacionController extends Controller
{
   
    public function __invoke(Request $request, Card $invitacion)
    {

        $id = $invitacion -> id ;

        return view('Editarinvitacion', compact('id'));
    }
}
