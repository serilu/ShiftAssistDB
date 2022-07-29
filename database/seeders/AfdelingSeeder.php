<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AfdelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('afdeling')->insert([
            'naam' => "HAHA",
        ]);

    }
}
