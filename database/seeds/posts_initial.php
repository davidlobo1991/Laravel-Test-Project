<?php

use Illuminate\Database\Seeder;

class posts_initial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=10; $i++) {
            DB::table('posts')->insert([
                'titulo' => 'Loren ipsum larala cadepelutila',
                'texto' => 'Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila
            Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila
            Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila Loren ipsum larala cadepelutila',
                'id_user' => 1,
            ]);

        }
    }
}
