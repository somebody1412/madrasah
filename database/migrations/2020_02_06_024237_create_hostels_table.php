<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->enum('penyakit_kulit',[ 1, 2 ])->nullable()->comment('1 - yes, 2 - no');
            $table->enum('lelah',[ 1, 2 ])->nullable()->comment('1 - yes, 2 - no');
            $table->enum('sawan',[ 1, 2 ])->nullable()->comment('1 - yes, 2 - no');
            $table->enum('lemah_jantung',[ 1, 2 ])->nullable()->comment('1 - yes, 2 - no');
            $table->string('others')->nullable()->comment('1 - yes, 2 - no');

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
        Schema::dropIfExists('hostels');
    }
}
