<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       admin::create([
        'name' => 'FITBOUNCER',
        'email' => 'fitbouncer@hotmail.com',
        'phone' => '+91-9382950050',
        'password' => Hash::make('123'),
       ]);
    }
}
