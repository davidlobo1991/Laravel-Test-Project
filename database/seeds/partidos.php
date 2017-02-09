<?php

use Illuminate\Database\Seeder;

class partidos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i = $i + 2) {
            DB::table('partidos')->insert([
                'equipo_local' => 'Equipo ' . $i,
                'equipo_visitante' => 'Equipo ' . ($i + 1),
            ]);
        }
    }
}
