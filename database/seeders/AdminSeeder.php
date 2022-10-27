<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "Admin@email.com";
        $admin->user_id = 0;
        $admin->password = bcrypt('123456789');
        $admin->save();
    }
}
