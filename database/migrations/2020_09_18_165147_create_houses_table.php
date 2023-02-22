<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('dimension')->nullable();
            $table->integer('area_id');
            $table->integer('user_id');
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('adults')->nullable();
            $table->integer('children')->nullable();
            $table->integer('number_of_room')->nullable();
            $table->integer('number_of_toilet')->nullable();
            $table->integer('rent')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('images')->nullable();
            $table->string('cooling')->nullable();
            $table->text('description')->nullable();
            $table->string('parking')->nullable();
            $table->string('type')->nullable();
            $table->string('community_feature')->nullable();
            $table->string('appliances')->nullable();
            $table->string('laundry')->nullable();
            $table->boolean('atv_available')->default(0);
            $table->boolean('tour')->default(0);
            $table->boolean('food')->default(0);
            $table->boolean('p_chef')->default(0);
            $table->string('contact')->nullable();
            $table->integer('number_of_belcony')->nullable();
            $table->string('status')->default(1); //1 means available
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
        Schema::dropIfExists('houses');
    }
}
