<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueTxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue_txes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->dateTime('date')->nullable();
            $table->decimal('amount')->nullable();
            $table->string('account')->nullable();

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->string('recurring')->nullable();
            
            $table->string('method')->nullable();
            $table->string('reference')->nullable();
            $table->string('file_url')->nullable();
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
        Schema::dropIfExists('revenue_txes');
    }
}
