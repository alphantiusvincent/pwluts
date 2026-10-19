<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: tabel induk dulu, baru tabel yang punya FK
        $this->call([
            CompanySeeder::class,
            CustomerSeeder::class,
            ItemSeeder::class,
            SaleSeeder::class,
        ]);
    }
}
