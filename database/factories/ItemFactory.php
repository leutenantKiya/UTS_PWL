<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => Str::upper(Str::random(7)),
            'item' => fake()->words(2, true),
            'unit_price' => fake()->numberBetween(1000, 100000),
            'company_id' => \App\Models\Company::inRandomOrder()->first()?->company_id ?? Str::upper(Str::random(7)),
        ];
    }
}