<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('answers', function(Blueprint $table) {
			$table->foreign('question_id')->references('id')->on('questions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->foreign('me_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->foreign('undo_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('answer_user', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('answer_user', function(Blueprint $table) {
			$table->foreign('answer_id')->references('id')->on('answers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('answers', function(Blueprint $table) {
			$table->dropForeign('answers_question_id_foreign');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->dropForeign('matches_user_id_foreign');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->dropForeign('matches_me_id_foreign');
		});
		Schema::table('matches', function(Blueprint $table) {
			$table->dropForeign('matches_undo_id_foreign');
		});
		Schema::table('answer_user', function(Blueprint $table) {
			$table->dropForeign('answer_user_user_id_foreign');
		});
		Schema::table('answer_user', function(Blueprint $table) {
			$table->dropForeign('answer_user_answer_id_foreign');
		});
	}
}