<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Redis;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Redis hashes: https://redis.io/topics/data-types-intro#redis-hashes
        Redis::hmset("users:users.mail=gille.ejone@cpnv.ch", [
            'name' => 'Gille',
            'surname' => 'Éjone',
            'email' => 'gille.ejone@cpnv.ch',
            'password' => 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4' // secret (sha1)
        ]);

        // Redis hashes: https://redis.io/topics/data-types-intro#redis-hashes
        Redis::hmset("users:users.mail=admin@cpnv.ch", [
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@cpnv.ch',
            'password' => 'e5e9fa1ba31ecd1ae84f75caaa474f3a663f05f4' // secret (sha1)
        ]);

    }
}
