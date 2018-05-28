<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->comment('文章标题');
            $table->string('cover')->comment('文章封面');
            $table->text('body')->comment('文章内容');
            $table->text('excerpt')->comment('文章摘要');
            $table->integer('user_id')->index()->comment('关联用户外键');
            $table->integer('category_id')->index()->comment('关联一级分类外键');
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
        Schema::dropIfExists('articles');
    }
}
