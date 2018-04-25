<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('persons', function ( $table ) {
    		$table->increments('id');
    		$table->string('customer_id');
    		$table->string('customer_ci');
    		$table->string('customer_name');
    		$table->string('customer_lastname');
    		$table->string('customer_phone');
    		$table->string('customer_address');
    		$table->string('customer_email');
    		$table->string('customer_language');
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
    	Schema::dropIfExists('persons');//
    }
}
