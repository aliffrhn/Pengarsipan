<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispositionsTable extends Migration
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
            $table->dateTime('reply_at');
            $table->string('description');
            $table->string('notification');

            $table->integer('mailid')->unsigned();
            $table->foreign('mailid')->references('id')->on('mails');

            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');

            $table->integer('dispositionid')->unsigned();
            $table->foreign('dispositionid')->references('id')->on('dispositions');
            
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
