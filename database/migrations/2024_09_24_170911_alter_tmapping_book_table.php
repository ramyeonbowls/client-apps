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
        Schema::table('tmapping_book', function (Blueprint $table) {
            $table->dropPrimary();
            $table->string('book_id', 50);
            $table->primary(['book_id','client_id', 'isbn']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tmapping_book', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropColumn('book_id');
            $table->primary(['client_id', 'isbn']);
        });
    }
};
