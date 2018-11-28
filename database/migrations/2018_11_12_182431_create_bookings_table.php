<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->integer('customer_id');
            $table->date('arrival_date');
            $table->date('departure_date')->nullable();
            $table->string('purpose')->nullable();
            $table->string('next_destination')->nullable();
            $table->string('transport_means')->nullable();
            $table->string('where_from')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('reserved_by')->nullable();
            $table->double('amount_paid');
            $table->double('discount')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
