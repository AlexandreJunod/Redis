<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tasks = Task::getTaskIdListByTodoId($id);
        return view('tasklist')->with("tasks", $tasks)->with("todoId", $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastTaskId = Redis::get("count(tasks)");
        $lastTaskId += 1;
        Redis::set("count(tasks)", $lastTaskId);
        Redis::rpush("tasks:todos.id=$request->todoId", $lastTaskId);
        Redis::set("tasks.name:tasks.id=$lastTaskId", $request->newTask);
        Redis::set("tasks.finished:tasks.id=$lastTaskId", false);

        return redirect('/tasks/' . $request->todoId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        foreach ($request->checkboxesFinished as $taskId => $checkbox){
           if($checkbox == "on"){
                Redis::set("tasks.finished:tasks.id=$taskId", true);
           }else{
               Redis::set("tasks.finished:tasks.id=$taskId", false);
           }
        }

        return redirect('/tasks/' . $request->todoId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Redis::lrem("tasks:todos.id=$request->todoId", 0, $request->taskId);

        return redirect('/tasks/' . $request->todoId);
        // TODO: Faire en sorte qu'on puisse récupérer le task id quand on appuie sur le bouton "Supprimer" sur tasklist.blade.php
//        Redis::lrem("tasks:todos.id=$request->todoId", $request->);
    }
}
