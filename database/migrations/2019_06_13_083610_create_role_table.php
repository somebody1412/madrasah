<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('role')->insert([
          [
            'class'=>'admin',
            'name'=>'superadmin'
          ],
          [
            'class'=>'admin',
            'name'=>'admin'
          ],
          [
            'class'=>'user',
            'name'=>'agent'
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
        Schema::dropIfExists('role');
    }
}
