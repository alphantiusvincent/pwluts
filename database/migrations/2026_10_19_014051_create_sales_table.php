<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('purchase_number');                  // PK: purchase_number
            $table->date('date_of_purchase');
            $table->foreignId('customer_id')                 // FK -> customers.customer_id
                  ->constrained('customers', 'customer_id')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->string('item_code', 10);                 // FK -> items.item_code (string)
            $table->foreign('item_code')
                  ->references('item_code')->on('items')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');wqdq
    }
};
