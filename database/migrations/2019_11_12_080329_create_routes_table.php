<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('routes', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->unsignedBigInteger('route_group_id');

			$table->foreign('route_group_id')
				->references('route_group_id')->on('route_groups');

			$table->string('route_name');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('routes');
	}
}
