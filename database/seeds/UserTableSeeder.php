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
        //default password
        $password = '123456';

        $data = array(

            'role_id' => '1',
        'first_name' => 'Umar',
        'surname' => 'Adamu',
        'phone' => '080000000',
        'email' => 'omaradmu01@gmail.com',
        'address' => 'Jimeta',
        'password' => Hash::make('password')
        
        );

        DB::table('users')->insert($data);
    }
}
