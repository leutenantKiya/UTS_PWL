<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->char("purchase_number", 7)->primary();
            $table->string("date_of_purchase")->nullable();
            $table->char("customer_id", 7)->nullable();
            $table->char("item_code", 7)->nullable();
            $table->timestamps();

            $table->foreign("customer_id")
            ->references("customer_id")
            ->on("customers")
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreign("item_code")
            ->references("item_code")
            ->on("items")
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
