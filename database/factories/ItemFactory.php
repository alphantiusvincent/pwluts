<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'item_code' => fake()->unique()->numerify('ITM-####'),
            'item' => ucfirst(fake()->words(2, true)),
            'unit_price' => fake()->randomFloat(2, 10000, 5000000),
            // Ambil company yang sudah ada; kalau belum ada, buat baru
            'company_id' => Company::inRandomOrder()->value('company_id') ?? Company::factory(),
        ];
    }
}
