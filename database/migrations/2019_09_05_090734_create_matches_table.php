<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatchesTable extends Migration {

	public function up()
	{
		Schema::create('matches', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('user_id')->unsigned()->index();
			$table->bigInteger('me_id')->unsigned()->index();
			$table->tinyInteger('status');
			$table->bigInteger('undo_id')->unsigned()->index();
			$table->tinyInteger('accepted');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('matches');
	}
}