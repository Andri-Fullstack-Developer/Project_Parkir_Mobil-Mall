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
        Schema::create('pmasuk', function (Blueprint $table) {
            $table->id();
            $table->string('mall');
            $table->string('plat')->nullable();
            $table->string('gedung');
            $table->string('lantai');
            $table->decimal('harga', 10 ,2 );
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pmasuk');
    }
};
