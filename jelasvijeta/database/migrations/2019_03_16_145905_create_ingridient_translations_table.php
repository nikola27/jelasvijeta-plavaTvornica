<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngridientTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingridient_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->index();
     
            // change article to your model name
            $table->integer('ingridient_id')->unsigned();
            $table->unique(['ingridient_id', 'locale']);
            $table->foreign('ingridient_id')->references('id')->on('ingridients')->onDelete('cascade');
     
            // add here your respective model attributes
            // which you want to be translated
            $table->string('title');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingridient_translations');
    }
}
