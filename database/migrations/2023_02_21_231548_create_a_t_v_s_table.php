<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateATVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_t_v_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('main_image');
            $table->integer('min_age');
            $table->string('atv_experience');
            $table->string('total_passenger');
            $table->string('damage_deposit');
            $table->string('description');
            $table->string('sub_description');
            $table->text('price');
            $table->integer('is_active')->default(1);
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
        Schema::dropIfExists('a_t_v_s');
    }
}
