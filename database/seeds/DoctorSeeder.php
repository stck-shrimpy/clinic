<?php

use App\Doctor;
use App\User;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Doctor::class, 10)->create();
    }
}
