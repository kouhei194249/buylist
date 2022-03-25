<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateThingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('things', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('rank');
            // $table->text('image');
            $table->string('other')->nullable();
            // $table->string('clear');
            $table->integer('user_id')->unsigned(); 
            $table->integer('category_id')->unsigned(); 
             // 画像のパスを保存するカラムを追加
            $table->string('image_path')->nullable();
            $table->timestamps();
           $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('things');
    }
}
