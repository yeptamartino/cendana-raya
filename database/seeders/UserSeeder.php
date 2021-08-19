<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Constants;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Super Admin',
            'role' => Constants::$USER_ROLE_SUPER_ADMIN,
            'address' => 'Banyuwangi',
            'phone' => '082220093199',
            'email' => 'superadmin@gmail.com',
            'photo' => 'default.png',
            'status' => Constants::$STATUS_CANDIDATE_PENDING,
            'password' => bcrypt('superadmin@@')
        ]);

        $user->save();

        $user = new User([
            'name' => 'Admin',
            'role' => Constants::$USER_ROLE_ADMIN,
            'address' => 'Banyuwangi',
            'phone' => '082220093198',
            'email' => 'admin@gmail.com',
            'photo' => 'default.png',
            'status' => Constants::$STATUS_CANDIDATE_PENDING,
            'password' => bcrypt('admin@@')
        ]);
        
        $user->save();
        
        $user = new User([
            'name' => 'Default User',
            'role' => Constants::$USER_ROLE_CANDIDATE,
            'address' => 'Banyuwangi',
            'phone' => '082220093197',
            'email' => 'default@gmail.com',
            'photo' => 'default.png',
            'status' => Constants::$STATUS_CANDIDATE_PENDING,
            'password' => bcrypt('default@@')
        ]);

        $user->save();
    }
}
