<?php

namespace App;

use Illuminate\Support\Facades\Redis;
use Illuminate\Database\Eloquent\Model;

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

    /*public static function get_todo()
    {
        dd(Redis::get("todos.title:todos.id=2"));
    }*/
}
