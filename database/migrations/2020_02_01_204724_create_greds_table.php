<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('greds')->insert([
            [
                'name'=>'A',
            ],
            [
                'name'=>'B',
            ],
            [
                'name'=>'C',
            ],
            [
                'name'=>'D',
            ],
            [
                'name'=>'E',
            ],
            [
                'name'=>'F',
            ],
            [
                'name'=>'G',
            ],
            [
                'name'=>'Tidak Hadir',
            ]
            
          ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('greds');
    }
}
