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
        $user = \App\User::create([
            'name'=> 'super admin',
            'email'=>'mohamed.abuassi99@gmail.com',
            'password'=> bcrypt('secret')
        ]);

        $user->attachRole('super_admin');
    }
    //end of run


}//end of seeder

