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
            
            $table->unsignedInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            
            $table->rememberToken();
            $table->timestamps();
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
