<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data array(

            'name' => 'Admin'

        );

        DB::table('roles')->insert($data);
    }
}
