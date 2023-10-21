<?php

namespace Database\Seeders;

use App\Models\employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // employee::create([
        //     'name' => 'Test User2',
        //     'phone_number' => '1234567890',
        //     'email' => 'johndoe@gmail.com',
        //     'birthdate' => '1990-01-02',
        // ]);

        for ($i = 0; $i < 10; $i++) {
            employee::factory()->create();
        }
    }
}
