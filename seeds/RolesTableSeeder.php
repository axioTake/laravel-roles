<?php

use App\User;
use axioTake\LaravelRoles\Models\Role;
use axioTake\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('name', '=', 'admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'admin',
	            'description' => 'Admin Role',
	            'level' => 5,
        	]);
	    }

    	if (Role::where('name', '=', 'user')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'user',
	            'description' => 'User Role',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('name', '=', 'unverified')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'unverified',
	            'description' => 'Unverified Role',
	            'level' => 0,
	        ]);
	    }

    }

}
