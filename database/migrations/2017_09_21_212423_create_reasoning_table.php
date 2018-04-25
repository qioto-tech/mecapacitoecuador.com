<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReasoningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('reasonings', function ( $table ) {
    		$table->increments('id');
    		$table->string('ci',11);
    		$table->string('opinion',15);
    		$table->timestamps();
    	});
    		//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('reasonings');//
    }
}
