<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('products', function($table)
            {
                $table->increments('id');
                $table->integer('category_id');
                $table->string('series');
                $table->string('title');
                $table->text('description');  
                $table->integer('price');
                $table->timestamps(); 
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('products');
	}

}
