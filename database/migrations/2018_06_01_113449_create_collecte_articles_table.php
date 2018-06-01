<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollecteArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collecte_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ->index() ->connect('文章名称');
            $table->string('synopsis') ->connect('文章内容');
            $table->integer('user_id') ->connect('用户id');
            $table->integer('collecte_id') ->connect('文集id');
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
        Schema::dropIfExists('collecte_articles');
    }
}
