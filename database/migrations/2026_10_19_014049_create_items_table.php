<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->string('item_code', 10)->primary();     // PK: item_code (string, contoh: ITM-0001)
            $table->string('item', 100);
            $table->decimal('unit_price', 12, 2);
            $table->foreignId('company_id')                  // FK -> companies.company_id
                  ->constrained('companies', 'company_id')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
