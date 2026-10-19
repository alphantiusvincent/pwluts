<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'date_of_purchase' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'customer_id' => Customer::inRandomOrder()->value('customer_id') ?? Customer::factory(),
            'item_code' => Item::inRandomOrder()->value('item_code') ?? Item::factory(),
        ];
    }
}
