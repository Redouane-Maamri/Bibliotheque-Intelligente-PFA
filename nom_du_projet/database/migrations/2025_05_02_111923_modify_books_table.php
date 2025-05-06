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
        Schema::table('books', function (Blueprint $table) {
            // Change 'description' column to TEXT type
            $table->text('description')->change();
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Revert back to VARCHAR if needed
            $table->string('description', 255)->change();
        });
    }
};
