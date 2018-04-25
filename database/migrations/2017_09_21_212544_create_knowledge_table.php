<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('knowledges', function ( $table ) {
    		$table->increments('id');
    		$table->string('ci',11);
    		$table->string('specialty',150);
    		$table->boolean('know');
    		$table->string('opinion',50);
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
    	Schema::dropIfExists('knowledges');//
    }
}
