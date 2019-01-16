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
        $password = 'secret';
        $email = 'admin@admin.com';
        $user = Redis::hmset(sha1($email . $password), [
            'name' => 'admin',
            'surname' => 'admin',
            'email' => $email,
            'password' => bcrypt($password)
        ]);
    }
}
