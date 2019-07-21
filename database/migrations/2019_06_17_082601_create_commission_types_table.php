<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommissionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_types', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('class');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('commission_types')->insert([
          [
            'class'=>'referral',
            'name'=> 'stage_1'
          ],
          [
            'class'=>'referral',
            'name'=> 'stage_2'
          ],
          [
            'class'=>'referral',
            'name'=> 'annual'
          ],
          [
            'class'=>'special',
            'name'=> 'annual_bonus'
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
        Schema::dropIfExists('commission_types');
    }
}
