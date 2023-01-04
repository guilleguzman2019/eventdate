<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card ;

class InvitacionController extends Controller
{
    public function card(Card $post)
    {
        
        return 'hola mundo' ;
    }
}
