<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('teachers', function ( $table ) {
    		$table->increments('id');
    		$table->string('ci',11);
    		$table->string('name');
    		$table->string('email');
    		$table->timestamps();
    	});
    		//
    		//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('teachers');//
    }
}
