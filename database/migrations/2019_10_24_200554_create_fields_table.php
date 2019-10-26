<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->unsigned()->nullable();
            $table->string('title', 200);
            $table->text('content');
            $table->string('icon', 50)->nulable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('fields', function (Blueprint $table) {
          $table->foreign('parent')->references('id')->on('fields');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
