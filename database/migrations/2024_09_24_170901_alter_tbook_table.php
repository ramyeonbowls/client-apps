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
        Schema::table('tbook', function (Blueprint $table) {
            $table->dropPrimary();
            $table->string('book_id', 50)->nullable();
            $table->primary(['book_id', 'isbn']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbook', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('book_id');
            $table->primary(['isbn']);
        });
    }
};
