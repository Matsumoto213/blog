<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    //  ビッグインクリメントに対してidをを取り出す

    // upはmigrationファイルを実行した時に行う処理をかく
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            // stringは出力するための構文
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    //  dawnは間違えた時に戻したいスクリプトをかく
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
