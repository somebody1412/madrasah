<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id')->unique();
            $table->string('name');
            $table->string('reg_no')->unique();
            $table->timestamps();
        });

        /*DB::table('companies')->insert([
          [
            'ref_id'=>'1',
            'name' => 'LE Company',
            'reg_no' => 'le_001'
          ]
        ]);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
