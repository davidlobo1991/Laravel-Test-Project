<?php

use Illuminate\Database\Seeder;

class diapartido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->update([
          'dia_partido' => 1
        ]);
    }
}
