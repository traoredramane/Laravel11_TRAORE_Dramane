<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { $tags = [
        ['nom' => 'PHP'],
        ['nom' => 'HTMl'],
        ['nom' => 'LARAVEL'],
        ['nom' => 'PYTHON'],
        ['nom' => 'XAMP'],
    ];
    
    DB::table('tags')->insert($tags);
    }
}
