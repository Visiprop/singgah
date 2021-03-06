<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createAdmin();
        $this->createDefaultVisitor();
    }

    public function createRoles()
    {
        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Admin',
                'slug'        => 'admin',
            ]
        );

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Visitor',
                'slug'        => 'visitor',
            ]
        );
    }

    public function createAdmin()
    {
        $credentials = [
			'email' => 'admin@mailinator.com',
            'password' => 'qwerty123',
            'full_name' => 'Admin',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
		$user->roles()->attach($role);
    }

    public function createDefaultVisitor()
    {
        

        $credentials = [
			'email' => 'januarelsan@gmail.com',
            'password' => 'qwerty123',
            'full_name' => 'Januar Elsan',
            'address' => 'Kemang',
            'city' => 'Jakarta',
            'province' => 'Jakarta Selatan',
            'phone_number' => '081242652956',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('visitor');
        $user->roles()->attach($role);
    }
}
