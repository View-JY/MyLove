<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->comment('关联用户外键');
			$table->integer('article_id')->comment('关联文章外键');
			$table->text('content')->comment('评论内容');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('comments');
	}
}
