<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Redis;

class CountSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Redis::set("count(users)", "1");
        Redis::set("count(todos)", "2");
        Redis::set("count(tasks)", "10");
    }
}
