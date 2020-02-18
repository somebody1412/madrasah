<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('parent_id_1');
            $table->foreign('parent_id_1')->references('id')->on('parent_profiles');

            $table->unsignedBigInteger('parent_id_2');
            $table->foreign('parent_id_2')->references('id')->on('parent_profiles');

            $table->string('nama_penuh')->nullable();
            $table->date('tarikh_lahir')->nullable();
            $table->string('nric')->nullable();
            $table->string('sijil_lahir')->nullable();
            $table->string('no_passport')->nullable();

            $table->string('warganegara')->nullable();

            $table->string('kaum')->nullable();

            $table->string('agama')->nullable();
            
            $table->dateTime('tarikh_daftar')->nullable();

            $table->integer('anak_ke_berapa')->nullable();

            $table->longText('alamat_tetap')->nullable();

            $table->string('status_murid')->nullable();

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
        Schema::dropIfExists('students');
    }
}
