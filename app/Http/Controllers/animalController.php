<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animalController extends Controller
{
    public function index(Request $request)
    {
    $items=animal::all();
    return view('animal.index',['items'=>$items]);
    }

}
