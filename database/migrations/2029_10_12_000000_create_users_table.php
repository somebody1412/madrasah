<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Role;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nric')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password')->nullable();
            $table->unsignedInteger('exam_status_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('exam_status_id')->references('id')->on('user_exam_status');
            $table->foreign('role_id')->references('id')->on('role');
        });
        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
          [
            'name'=>'superadmin',
            'email'=>'superadmin@example.com',
            'password'=>Hash::make(env('ADMIN_PASSWORD', 'Qwe123!@#')),
            'role_id'=>1,
            'nric'=>'1111111111111'
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
        Schema::dropIfExists('users');
    }
}
