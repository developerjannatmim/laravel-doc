<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Teacher;
use App\Models\TeacherDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Product::create([
        //     'user_id' => 2,
        //     'name' => ' Sunsilk',
        //     'body' => 'Hair shampoo for Male & female',
        // ]);

        Teacher::create(
            ['name' => ' john',
            'email' => ' john@gmail.com',
            'phone' => 12345678]
        );


        TeacherDetail::create(
            ['teacher_id' => 16,
            'alternate_phone' => 11223344,
            'city' => 'pabna',
            'address' => 'Abu-road, 120/32, pabna']
        );
    }
}
