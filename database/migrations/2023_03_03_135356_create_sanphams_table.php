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
        Schema::create('sanphams', function (Blueprint $table) {
            $table->id();
            $table->string('sp_ten', 50);
            $table->unsignedInteger('sp_giaGoc')->default('0');
            $table->unsignedInteger('sp_giaBan')->default('0');
            $table->string('sp_hinh', 200);
            $table->unique(['sp_ten']);
            $table->unsignedBigInteger('l_ma');
            $table->foreign('l_ma')->references('id')->on('loais');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanphams');
    }
};
