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
            $table->bigIncrements('id');
            $table->string('nric')->unique();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
          [
            'name'=>'Admin',
            'email'=>'admin@mail.com',
            'password'=>Hash::make('test1234'),
            'role_id'=>Role::ADMIN,
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
