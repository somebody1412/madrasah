<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('company_commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('commission_type_id');
            $table->unsignedInteger('company_id');
            $table->decimal('amount');
            $table->timestamps();

            $table->foreign('commission_type_id')->references('id')->on('commission_types');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::enableForeignKeyConstraints();

        /*DB::table('company_commissions')->insert([
          [
            'commission_type_id'=>1,
            'company_id'=> 1,
            'amount' => 70
          ],
          [
            'commission_type_id'=>2,
            'company_id'=> 1,
            'amount' => 30
          ],
          [
            'commission_type_id'=>3,
            'company_id'=> 1,
            'amount' => 50
          ],
        ]);*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_commissions');
    }
}
