<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_txes', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            
            $table->string('currency')->default('MYR');
            $table->dateTime('invoice_date')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('order_no')->nullable();
            $table->string('item_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('tax')->nullable();
            $table->decimal('total')->nullable();
            $table->longText('notes')->nullable();
            $table->string('category')->nullable();
            $table->string('recurring')->nullable();
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
        Schema::dropIfExists('invoice_txes');
    }
}
