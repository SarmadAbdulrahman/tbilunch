<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kycs', function (Blueprint $table) {
            //
            $table->string('id_path')->default(0);
            $table->string('NationalityID')->default(0);
            $table->string('Certificate_ofNationality')->default(0);
            $table->string('Passport')->default(0);
            $table->string('Residence_Card')->default(0);
            $table->string('NationalityIDCardWife')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kycs', function (Blueprint $table) {
            //
        });
    }
}
