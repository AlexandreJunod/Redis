<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoitemController extends Controller
{
    public function index(){
        return view('todoitem');
    }
}
