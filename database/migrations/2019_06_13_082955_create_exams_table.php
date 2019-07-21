<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pass_question')->default(0);
            $table->integer('total_question')->default(0);
            $table->longText('exam_description')->nullable();
            $table->timestamps();
        });

        //Create default roles
        DB::table('exams')->insert([
            [
                'pass_question' => 0,
                'total_question' => 0
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
