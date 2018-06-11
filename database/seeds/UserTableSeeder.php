<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'email'=>'admin@admin',
                'password'=>bcrypt('12345'),
                'level'=> 2,

            ],
    ]);
    }
}
