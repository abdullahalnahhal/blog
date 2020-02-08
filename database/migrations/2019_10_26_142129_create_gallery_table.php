<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('description', 500);
            $table->text('image');
            $table->integer('field_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('gallery', function (Blueprint $table) {
          $table->foreign('field_id')->references('id')->on('fields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery', function (Blueprint $table) {
          $table->dropForeign(['field_id']);
        });
        Schema::dropIfExists('gallery');
    }
}
