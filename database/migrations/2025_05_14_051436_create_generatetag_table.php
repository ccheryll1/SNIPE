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
        Schema::create('generatetag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('companies_id')->constrained('companies')->onDelete('restrict');
            $table->foreignId('custom_fields_id')->constrained('custom_fields')->onDelete('restrict');
            $table->foreignId('category_id')->constrained('categories')->onDelete('restrict');
            $table->foreignId('models_id')->constrained('models')->onDelete('restrict');
            $table->string('counter')->default('0');
            $table->date('purchase_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generatetag');
    }
};
