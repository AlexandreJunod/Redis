<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Redis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Firstly let's erase all the variables stored before we created new with seeds
        Redis::flushall();

        $this->call(UserSeed::class);
    }
}
