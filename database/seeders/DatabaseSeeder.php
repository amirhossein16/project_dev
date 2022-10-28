<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\FishingTable::factory(50)->create();

//        \App\Models\User::factory()(User::class, 50)->create()->each(function($u) {
//            DB::table('users')->insert([
//                'user_id' => $u->id,
//            ]);
//        });


    }
}
