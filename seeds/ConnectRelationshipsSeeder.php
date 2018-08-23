<?php

use App\User;
use axioTake\LaravelRoles\Models\Role;
use axioTake\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ConnectRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Get Available Permissions
	     *
	     */
			$permissions = Permission::all();

	    /**
	     * Attach Permissions to Roles
	     *
	     */
			$roleAdmin = Role::where('name', '=', 'admin')->first();
			foreach ($permissions as $permission) {
				$roleAdmin->attachPermission($permission);
			}
    }
}
