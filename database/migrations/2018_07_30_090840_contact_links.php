<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('telegram');
            $table->string('reddit');
            $table->string('quora');
            $table->string('stackoverflow');
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
        Schema::dropIfExists('token_sale');
    }
}
