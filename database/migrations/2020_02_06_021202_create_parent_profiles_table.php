<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->string('nama_penuh')->nullable();
            $table->string('nric')->nullable();
            $table->string('no_passport')->nullable();
            $table->string('warganegara')->nullable();
            $table->string('phone')->nullable();
            $table->integer('bil_tanggungan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_majikan')->nullable();
            $table->longText('alamat_majikan')->nullable();
            $table->decimal('pendapatan')->nullable();

            $table->date('tarikh_lahir')->nullable();
            $table->string('sijil_lahir')->nullable();

            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('users');

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
        Schema::dropIfExists('parent_profiles');
    }
}
