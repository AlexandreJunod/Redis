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
        // Let's create "links"/"joins" to the todos for the user with id 1
        Redis::rpush("todos:users.id=1", 1, 2); // Redis list: https://redis.io/topics/data-types-intro#redis-lists

        // Set title for todo with id 1
        Redis::set("todos.title:todos.id=1", "Finir le projet XML1");
        // Set date for todo with id 1
        Redis::set("todos.date:todos.id=1", "2018-04-22");

        // Set title for todo with id 2
        Redis::set("todos.title:todos.id=2", "Finir le projet PRW2");
        // Set date for todo with id 2
        Redis::set("todos.date:todos.id=2", "2019-01-25");
    }
}
