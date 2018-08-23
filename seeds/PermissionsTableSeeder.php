<?php

use App\User;
use axioTake\LaravelRoles\Models\Role;
use axioTake\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Add Permissions
	     *
	     */
        if (Permission::where('name', '=', 'users.create')->first() === null) {
			Permission::create([
			    'name' => 'users.create',
			    'description' => 'Can create new users',
			    'model' => 'Permission',
			]);
		}
		
        if (Permission::where('name', '=', 'users.read')->first() === null) {
			Permission::create([
			    'name' => 'users.read',
			    'description' => 'Can read/view users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'users.update')->first() === null) {
			Permission::create([
			    'name' => 'users.update',
			    'description' => 'Can update/edit users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'users.delete')->first() === null) {
			Permission::create([
			    'name' => 'users.delete',
			    'description' => 'Can delete users',
			    'model' => 'Permission',
			]);
        }

    }
}
