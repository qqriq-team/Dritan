<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image');
            $table->text('yt_link');
            $table->unsignedBigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            //mne
            $table->string('lang_mne')->nullable();
            $table->string('title_mne')->nullable();
            $table->text('cover_text_mne');
            $table->text('blog_mne');
            // en
            $table->string('lang_en')->nullable();
            $table->string('title_en')->nullable();
            $table->text('cover_text_en');
            $table->text('blog_en');
            //al
            $table->string('lang_al')->nullable();
            $table->string('title_al')->nullable();
            $table->text('cover_text_al');
            $table->text('blog_al');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
