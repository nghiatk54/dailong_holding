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
        Schema::table('users', function (Blueprint $table) {
            // Field phone is unique, not nullable, after id
            $table->string('phone', 20)->unique()->notNullable()->after('id');
            // Field company_id after remember_token
            $table->foreignId('company_id')->nullable()->after('remember_token')->constrained('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop column phone, company_id, and foreign key company_id when rollback
            $table->dropColumn('phone');
            $table->dropForeign(['company_id']);
            $table->dropColumn('company_id');
        });
    }
};