<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->Insert([
            'name' => 'Admin',
            'slug' => 'admin',
    ]);
        DB::table('roles')->Insert([
        'name' => 'Author',
        'slug' => 'author',
    ]);
        DB::table('roles')->Insert([
            'name' => 'User',
            'slug' => 'user',
        ]);
    }
}
