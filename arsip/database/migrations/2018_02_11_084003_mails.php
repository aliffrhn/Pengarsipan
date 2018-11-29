<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mails extends Migration
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
          $table->string('incoming_at');
          $table->string('mail_code');
          $table->string('mail_date');
          $table->string('mail_from');
          $table->string('mail_to');
          $table->string('mail_subject', 1000);
          $table->string('description', 3000);
          $table->string('file_upload');
          $table->integer('userid')->unsigned();
          $table->integer('mail_typeid')->unsigned();
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
