<?php

use App\Doctor;
use App\Reservation;
use App\User;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all('id');
        $doctors = Doctor::all('id');

        factory(Reservation::class, 50)->make()->each(function ($reservation) use($users, $doctors){
            
            $reservation->user_id = $users->random()->id;
            $reservation->doctor_id = $doctors->random()->id;

            $reservation->save();
        });
    }
}
