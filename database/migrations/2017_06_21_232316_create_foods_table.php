<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meal_id')->unsigned()->index();     // Foreign Key for the meal id
            $table->string('name');         // Column for the name
            $table->integer('protein')->unsigned();     // Column for proteins
            $table->integer('carbohydrates')->unsigned();   // Column for carbohydrates
            $table->integer('fat')->unsigned();         // Column for Fat
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
        Schema::dropIfExists('foods');
    }
}
