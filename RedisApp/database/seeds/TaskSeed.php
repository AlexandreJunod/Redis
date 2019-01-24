<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Redis;

class TaskSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's create "links"/"joins" to the tasks for the user with id 1
        Redis::lpush("tasks:todos.id=1", 1, 2,3,4,5,6); // Redis list: https://redis.io/topics/data-types-intro#redis-lists
        Redis::lpush("tasks:todos.id=2", 7,8,9,10); // Redis list: https://redis.io/topics/data-types-intro#redis-lists

        Redis::set("tasks.name:tasks.id=1", "Comprendre Redis");
        Redis::set("tasks.name:tasks.id=2", "Faire un document sur Redis");
        Redis::set("tasks.name:tasks.id=3", "Passer du temps à créer une structure de données");
        Redis::set("tasks.name:tasks.id=4", "Faire comprendre tout ceci aux autres membres du groupe");
        Redis::set("tasks.name:tasks.id=5", "Finir le site et la liaison avec les données");
        Redis::set("tasks.name:tasks.id=6", "Rendre le projet le dimanche avec la semaine com");
        Redis::set("tasks.finished:tasks.id=1", "true");
        Redis::set("tasks.finished:tasks.id=2", "true");
        Redis::set("tasks.finished:tasks.id=3", "true");
        Redis::set("tasks.finished:tasks.id=4", "true");
        Redis::set("tasks.finished:tasks.id=5", "false");
        Redis::set("tasks.finished:tasks.id=6", "false");


        Redis::set("tasks.name:tasks.id=7", "Commencer et faire une grande partie du travail");
        Redis::set("tasks.name:tasks.id=8", "Changer la logique car le prof nous a dit de faire ainsi");
        Redis::set("tasks.name:tasks.id=9", "Tout refaire car la logique précédente était partout");
        Redis::set("tasks.name:tasks.id=10", "Rendre un projet non fini");
        Redis::set("tasks.finished:tasks.id=7", "true");
        Redis::set("tasks.finished:tasks.id=8", "false");
        Redis::set("tasks.finished:tasks.id=9", "false");
        Redis::set("tasks.finished:tasks.id=10", "false");

    }
}
