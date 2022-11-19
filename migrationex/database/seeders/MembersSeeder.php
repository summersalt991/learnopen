<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test1')->insert([
            'name'=>Str::random(3).'somename',
            'email'=>Str::random(3).'some@email.com',
            'address'=>Str::random(3).'address',
        ]);
    }
}
