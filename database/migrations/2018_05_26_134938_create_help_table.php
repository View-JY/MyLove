<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('help', function (Blueprint $table) {
			$table->increments('id')->comment('主键Id');
			$table->text('idea')->comment('意见建议');
			$table->string('email')->comment('邮箱');
			$table->integer('user_id')->comment('关联用户外键');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('help');
	}
}
