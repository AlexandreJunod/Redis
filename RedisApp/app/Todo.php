<?php

namespace App;

use Illuminate\Support\Facades\Redis;
use Illuminate\Database\Eloquent\Model;
use Zend\Diactoros\Request;

class Todo extends Model
{
    public static function get_todo($key)
    {
        $result = array();
        $flag = true;
        $i = 1;
        while($flag)
        {
            if(Redis::get("todos.$key:todos.id=".$i) != null)
            {
                array_push($result, Redis::get("todos.$key:todos.id=".$i));
                $i++;
            }
            else
            {
                $flag = false;
            }
        }
        return $result;
    }

    static public function getTodoIdListForUser($id){
        return Redis::lrange("todos:users.id=$id", 0,-1);
    }

    static public function getTodoTitle($id){
        return Redis::get("todos.title:todos.id=$id");
    }

    static public function getTodoDate($id){
        return Redis::get("todos.date:todos.id=$id");
    }

    /*public static function get_todo()
    {
        dd(Redis::get("todos.title:todos.id=2"));
    }*/
}
