<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Redis;

class TodoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = 'Tutorial';
        $item01 = 'Create your first todo';
        $item02 = 'Edit this item';
        $item03 = 'Delete this item';

        $todo1 = 'MyTodo';
        $itemTodo11 = 'Wash the car';
        $itemTodo12 = 'Take a shower';
        $itemTodo13 = 'Iron the shirt';
        $itemTodo14 = 'Walk the dog';

        $todo2 = 'Todo4Tomorow';
        $itemTodo21 = 'Wash the car';
        $itemTodo22 = 'Take a shower';
        $itemTodo23 = 'Iron the shirt';
        $itemTodo24 = 'Walk the dog';


        $todolist = Redis::hmset($todo, [
            'item01' => $item01,
            'item02' => $item02,
            'item03' => $item03
        ]);

        $todolist = Redis::hmset($todo1, [
            'itemTodo11' => $itemTodo11,
            'itemTodo12' => $itemTodo12,
            'itemTodo13' => $itemTodo13,
            'itemTodo14' => $itemTodo14
        ]);

        $todolist = Redis::hmset($todo2, [
            'itemTodo21' => $itemTodo21,
            'itemTodo22' => $itemTodo22,
            'itemTodo23' => $itemTodo23,
            'itemTodo24' => $itemTodo24
        ]);
    }
}
