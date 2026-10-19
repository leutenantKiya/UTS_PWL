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
        Schema::create('items', function (Blueprint $table) {
            $table->char("item_code", 7)->primary();
            $table->string("item", 30)->nullable();
            $table->integer("unit_price")->nullable();
            $table->char("company_id", 7)->nullable();
            $table->timestamps();

            $table->foreign("company_id")
            ->references("company_id")
            ->on("companies")
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
