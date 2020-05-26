<?php

use App\Review;
use App\User;
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
        factory(User::class)->states('admin')->create();
        factory(User::class, 50)->create()->each(function ($user) {
            
            $user->review()->save(factory(Review::class)->make());
        });
    }
}
