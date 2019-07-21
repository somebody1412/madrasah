<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExamStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_exam_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('name')->unique();
            $table->timestamps();
        });

        DB::table('user_exam_status')->insert([
          [
            'class'=>'fail',
            'name'=>'fresh'
          ],
          [
            'class'=>'pass',
            'name'=>'pass'
          ],
          [
            'class'=>'pass',
            'name'=>'retake_pass'
          ],
          [
            'class'=>'fail',
            'name'=>'fail'
          ],
          [
            'class'=>'fail',
            'name'=>'reopen'
          ],
          [
            'class'=>'fail',
            'name'=>'in_exam'
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
        Schema::table('user_exam_status', function (Blueprint $table) {
            //
        });
    }
}
