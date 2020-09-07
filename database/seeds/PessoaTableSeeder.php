<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert(array(
            array(
                'nome'=>"Nicolas",
                'genero'=>"M"
            ),array(
                'nome'=>"Manga",
                'genero'=>"F"
            )
        ));
    }
}
