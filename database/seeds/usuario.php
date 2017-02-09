<?php

use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => 'User ' . $i,
                'nachname' => 'Nachname ' . $i,
                'email' => 'User' .$i.'@hotmail.com',
            ]);
        }
    }
}
