<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   function home(){
    return view('client.pages.home');
   }
   function majors(){
    return view('client.pages.majors');
   }
   function doctor(){
    return view('client.pages.doctor');
   }
   function BookAppoument(){
    return view('client.pages.bookappoument');
   }
}
