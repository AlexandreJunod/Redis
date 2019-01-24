<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use App\User;

class todolistController extends Controller
{
    public function index(){
        $todotitle = Todo::get_todo('title');
        $tododate = Todo::get_todo('date');
        return view('todolist')->with("todotitle", $todotitle)->with("tododate", $tododate);
    }
}
