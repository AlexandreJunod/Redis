<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use App\User;
use Illuminate\Support\Facades\Redis;

class TodoController extends Controller
{
    public function index()
    {
        $userInfo = User::getUser("mail", "gille.ejone@cpnv.ch");
        $todos = Todo::getTodoIdListForUser($userInfo["id"]);

        return view('todolist')->with("todos", $todos);
    }

    public function destroy(Request $request)
    {
        //dd($request->todoId);
        Redis::lrem("todos:users.id=1", 0, $request->todoId);

        return redirect('/');
    }
}
