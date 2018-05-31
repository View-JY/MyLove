<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentZansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_zans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id') ->index() ->comment('关联用户外键');
            $table->integer('comment_id') ->index() ->comment('关联评论外键');
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
        Schema::dropIfExists('comment_zans');
    }
}
