<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('poster',500)->nullable();
            $table->text('full_text_uz')->nullable();
            $table->text('full_text_ru')->nullable();
            $table->text('full_text_en')->nullable();
            $table->string('slug');
            $table->string('descr')->nullable();
            $table->string('keywords')->nullable();
            $table->integer('moder')->default(1);
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
        Schema::dropIfExists('regions');
    }
}
