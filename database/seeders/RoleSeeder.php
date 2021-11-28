<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'regular'
            ],
            [
                'id' => 2,
                'name' => 'agen'
            ],
            [
                'id' => 3,
                'name' => 'industrial'
            ],
            [
                'id' => 4,
                'name' => 'droppoint'
            ],
            [
                'id' => 99,
                'name' => 'admin'
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}
