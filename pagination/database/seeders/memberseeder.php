<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert
        (['name'=>Str::random(2)."name",
        'email'=>Str::random(3)."@email.com",
        'address'=>Str::random(2)."address",
    ]);
    }
}
