<?php

namespace App\Http\Controllers;

use App\Models\Ota;
use Illuminate\Http\Request;

class OnaController extends Controller
{
   public function index(){
       $parent = Ota::all();
       return view('parents',['parents'=>$parent]);
   }
}
