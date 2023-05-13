<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\post::factory(10)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\kepsek::factory(1)->create();
    }
}
