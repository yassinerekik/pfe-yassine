<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           
           'dossier-list',
           'dossier-create',
           'dossier-edit',
           'dossier-delete',
           
           'installateur-list',
           'installateur-create',
           'installateur-edit',
           'installateur-delete',

           
           'district-list',
           'district-create',
           'district-edit',
           'district-delete',

           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
        ];
     
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}