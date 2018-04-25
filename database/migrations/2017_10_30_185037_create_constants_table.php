<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('constants', function ( $table ) {
    		$table->increments('id');
    		$table->string('code',20);
    		$table->string('value',255);
    		$table->string('description',255);
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
        //
    }
}
