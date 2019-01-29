<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
class Task extends Model
{
    static public function getTaskIdListByTodoId($id){
        return Redis::lrange("tasks:todos.id=$id", 0, -1);
    }

    static public function getTaskName($id){
        return Redis::get("tasks.name:tasks.id=$id");
    }

    static public function getTaskFinished($id){
        return Redis::get("tasks.finished:tasks.id=$id");
    }
}
