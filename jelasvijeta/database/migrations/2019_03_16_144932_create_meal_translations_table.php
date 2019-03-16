<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_translations', function (Blueprint $table) {
            $table->increments('id');
       $table->string('locale')->index();

       // change article to your model name
       $table->integer('meal_id')->unsigned();
       $table->unique(['meal_id', 'locale']);
       $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');

       // add here your respective model attributes
       // which you want to be translated
       $table->string('title');
       $table->string('description');

   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_translations');
    }
}
