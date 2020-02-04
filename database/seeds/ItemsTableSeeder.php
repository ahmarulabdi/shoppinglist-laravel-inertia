<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Shampo Pria',
                'description' => 'Shampo khusus untuk pria'
            ],
            [
                'name' => 'Shampo Wanita',
                'description' => 'Shampo khusus untuk wanita'
            ],
        ]);
    }
}
