<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('descr_en',1000);
            $table->string('descr_ru',1000);
            $table->string('descr_uz',1000);
            $table->string('keywords_en',1000);
            $table->string('keywords_ru',1000);
            $table->string('keywords_uz',1000);
            $table->string('fb_link',1000);
            $table->string('vk_link',1000);
            $table->string('youtube_link',1000);
            $table->string('instagram_link',1000);
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
        Schema::dropIfExists('settings');
    }
}
