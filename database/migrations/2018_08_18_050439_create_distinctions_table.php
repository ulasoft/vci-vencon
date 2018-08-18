<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistinctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distinctions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('poster',500)->nullable();
            $table->text('full_text',500)->nullable();
            $table->string('slug',500);
            $table->string('descr',500)->nullable();
            $table->string('keywords',500)->nullable();
            $table->string('lang',3);
            $table->string('address',500)->nullable();
            $table->integer('moder')->default(0);
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
        Schema::dropIfExists('distinctions');
    }
}
