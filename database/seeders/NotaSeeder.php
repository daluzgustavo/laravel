<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            'titulo' => 'titulo 1',
            'texto' => 'exemplo de nota 1'
        ]);

        DB::table('notas')->insert([
            'titulo' => 'titulo 2',
            'texto' => 'exemplo de nota 2'
        ]);
    }
}
