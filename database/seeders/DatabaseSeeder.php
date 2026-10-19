<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Customers;
use App\Models\Items;
use App\Models\Sales;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\DatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed companies
        Companies::factory(10)->create();

        // Seed customers
        Customers::factory(20)->create();

        // Seed items (depends on companies)
        Items::factory(30)->create();

        // Seed sales (depends on customers and items)
        Sales::factory(50)->create();
    }
}