<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');  
            $table->integer('user_id');    
            $table->string('category_name');
            $table->string('background_options');
            $table->string('return_file_type');     
            $table->string('turnaround_time');
            $table->text('instructions_message');
            $table->string('find_us');
            $table->string('user_email');
            $table->string('session_id');
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->string('order_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
