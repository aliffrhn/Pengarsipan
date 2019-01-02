<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dispositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('dispositions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('disposition_at');
          $table->string('reply_at');
          $table->string('description');
          $table->integer('notification');
          $table->integer('status');
          $table->integer('dispositionid')->unsigned();
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
        Schema::dropIfExists('dispositions');
    }
}
