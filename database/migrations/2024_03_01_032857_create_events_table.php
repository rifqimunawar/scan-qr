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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->text('description'); // Ubah menjadi text
            $table->date('date'); // Ubah menjadi date
            $table->time('time'); // Ubah menjadi time
            $table->string('place');
            $table->integer('rp');
            $table->string('penyelenggara');
            $table->integer('jumlah_tiket'); // Ubah menjadi integer
            // $table->string('tiket_id')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
