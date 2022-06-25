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
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            // aba kk permission chainxa sab yha dynamically lekhna parxa
            'view-event',
            'view-service',
            'view-contact',
            'Roles & permission',
            'Attendance-record',
'            Attendance-create
'
        ];

        foreach ($data as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
