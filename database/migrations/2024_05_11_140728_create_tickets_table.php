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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
$table->unsignedBigInteger('showtime_id');
$table->foreign('showtime_id')->references('id')->on('showtimes')->onDelete('cascade');

$table->integer('seat_number');
$table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
