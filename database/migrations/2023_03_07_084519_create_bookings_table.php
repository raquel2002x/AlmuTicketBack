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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('state_id');
            $table->date('date');
            $table->datetime('startTime');
            $table->datetime('endTime');
            $table->integer('numPeople');
            $table->string('room');
            $table->string('description');
            $table->string('comment')->nullable();
            

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');           


            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_location');
            $table->foreign('id_location')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_state');
            $table->foreign('id_state')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
