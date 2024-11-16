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
        Schema::create('tkabupaten', function (Blueprint $table) {
            $table->string('provinsi_id');
            $table->string('kabupaten_id');
            $table->string('kabupaten_name')->nullable();
            $table->primary(['provinsi_id', 'kabupaten_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkabupaten');
    }
};