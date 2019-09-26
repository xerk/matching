<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswerUserTable extends Migration {

	public function up()
	{
		Schema::create('answer_user', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('user_id')->unsigned()->index();
			$table->integer('answer_id')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('answer_user');
	}
}