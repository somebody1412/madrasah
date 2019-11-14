<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_txes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->dateTime('date')->nullable();
            $table->decimal('amount')->nullable();
            $table->string('account')->nullable();

            $table->unsignedInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            
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
        Schema::dropIfExists('payment_txes');
    }
}
