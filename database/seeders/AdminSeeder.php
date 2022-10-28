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
        $admin->email = "Admin@gmail.com";
        $admin->password = bcrypt('123456789');
        $admin->save();
    }
}
