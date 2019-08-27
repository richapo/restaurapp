<?php

use Illuminate\Database\Seeder;
use restaurapp\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'richard',
            'rut'=>'194283393',
            'email'=>'hola@gmail.com',
            'email_verified_at'=> now(),
            'password'=> bcrypt(12345678),
            'remember_token' => Str::random(10)
        ])->save();

        factory(User::class,3)->create();
    }
}
