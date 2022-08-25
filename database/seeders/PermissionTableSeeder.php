<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [


            // aba kk permission chainxa sab yha dynamically lekhna parxa
            'Newsfeed Module',
            'Attendance Module',
            'User Module',
            'Roles & permission module',
            'Leave Module',
            'Task Module',
            'Payrol Module'

        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
