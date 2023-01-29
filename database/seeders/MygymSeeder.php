<?php

namespace Database\Seeders;

use App\Models\mygym;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MygymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mygym::create([
            'gym_name' => 'FITBOUNCER-GYM',
            'email' => 'gym@fitbouncer.com',
            'address' => 'Durgapur',
            'zone' => 'asia/kolata',
            'password' => Hash::make('123'),
            'gym_owner_id' => 2,
           ]);
    }
}
