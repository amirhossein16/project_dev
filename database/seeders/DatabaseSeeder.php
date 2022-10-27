<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);

//        \App\Models\User::factory()(User::class, 50)->create()->each(function($u) {
//            DB::table('users')->insert([
//                'user_id' => $u->id,
//            ]);
//        });

        User::factory()
            ->count(1000)
            ->create();
    }
}
