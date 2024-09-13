<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('one_linkn');
            $table->string('one_linka');
            $table->string('two_linkn');
            $table->string('two_linka');
            $table->string('three_linkn');
            $table->string('three_linka');
            $table->string('four_linkn');
            $table->string('four_linka');
            $table->string('five_linkn');
            $table->string('five_linka');
            $table->string('one_servicen');
            $table->string('one_servicea');
            $table->string('two_servicen');
            $table->string('two_servicea');
            $table->string('three_servicen');
            $table->string('three_servicea');
            $table->string('four_servicen');
            $table->string('four_servicea');
            $table->string('five_servicen');
            $table->string('five_servicea');
            $table->string('location');
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
        Schema::dropIfExists('footer');
    }
}
