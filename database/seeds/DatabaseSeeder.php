<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'name' => 'administrator',
            'email' => 'admin@lptg.com',
            'password' => bcrypt('admin123'),
        ],
        [
            'name' => 'Aufal Marom',
            'email' => 'aufalmarom@lptg.com',
            'password' => bcrypt('admin123'),
        ],
        [
            'name' => 'Susilo Bambang Yudhono',
            'email' => 'sby@lptg.com',
            'password' => bcrypt('admin123'),
        ]
        );
    }
}
