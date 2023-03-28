<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doors', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->integer('dyeing_id')->nullable();
            $table->integer('skin_id')->nullable();
            $table->integer('knob_id')->nullable();
            $table->integer('width_dimension_id')->nullable();
            $table->integer('height_dimension_id')->nullable();
            $table->integer('opening_side_id')->nullable();
            
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
        Schema::dropIfExists('doors');
    }
}
