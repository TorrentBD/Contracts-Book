<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name',30);
            $table->string('n_name',30)->nullable();;
            $table->string('pro_pic',100)->nullable();;
            $table->string('cont_1',30);
            $table->string('cont_2',30)->nullable();;
            $table->string('address',30)->nullable();;
            $table->string('c_email',30);
            $table->string('website',30)->nullable();;
            $table->string('b_date',100)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
