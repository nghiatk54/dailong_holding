<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->notNullable();
            $table->string('tax_code', 20)->notNullable();
            $table->string('address', 255)->nullable();
            $table->string('representatives', 255)->nullable();
            $table->string('hot_line', 20)->nullable();
            $table->date('date_operation')->nullable();
            $table->string('sub_domain', 255)->unique()->notNullable();
            $table->boolean('is_primary_domain')->default(false);
            $table->foreignId('parent_id')->nullable()->constrained('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};