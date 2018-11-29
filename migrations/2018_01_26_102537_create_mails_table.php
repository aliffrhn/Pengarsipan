<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('incoming_at');
            $table->string('mail_code');
            $table->string('mail_form');
            $table->string('mail_to');
            $table->string('mail_subject');
            $table->string('description');
            $table->string('file_upload');

            $table->integer('mail_typeid')->unsigned();
            $table->foreign('mail_typeid')->references('id')->on('mail_types');

            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');

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
        Schema::dropIfExists('mails');
    }
}
