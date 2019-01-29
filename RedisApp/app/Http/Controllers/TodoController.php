<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use App\User;

class TodoController extends Controller
{
    public function index()
    {
        $userInfo = User::getUser("mail", "gille.ejone@cpnv.ch");
        $todos = Todo::getTodoIdListForUser($userInfo["id"]);

        return view('todolist')->with("todos", $todos);
    }
}
