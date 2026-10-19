<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'purchase_number' => Str::upper(Str::random(7)),
            'date_of_purchase' => fake()->date('Y-m-d'),
            'customer_id' => \App\Models\Customer::inRandomOrder()->first()?->customer_id ?? Str::upper(Str::random(7)),
            'item_code' => \App\Models\Item::inRandomOrder()->first()?->item_code ?? Str::upper(Str::random(7)),
        ];
    }
}