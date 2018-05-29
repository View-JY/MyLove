<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('user_infos', function (Blueprint $table) {
			$table->increments('id')->comment('主键ID');
			$table->integer('user_id')->index()->comment('用户ID');
			$table->string('profile')->comment('头像');
			$table->string('phone')->comment('手机号码');
			$table->string('position')->comment('职位');
			$table->string('address')->comment('个人地址');
			$table->string('url')->comment('个人网址');
			$table->string('intro')->comment('个人简介');
			$table->enum('sex', ['0', '1', '2'])->comment('性别');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('user_infos');
	}
}
