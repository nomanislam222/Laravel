<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soft_details', function (Blueprint $table) {
            $table->bigIncrements('soft_id');
            $table->string('name');
            $table->string('link');
            $table->string('category_id');
            $table->string('main_pic_e');
            $table->string('main_pic_b');
            $table->string('feature_pic');
            $table->string('icon_pic');
            $table->string('feature_des_e');
            $table->string('feature_des_b');
            $table->longtext('details_e');
            $table->longtext('details_b');
            $table->string('create_d');
            $table->string('update_d');
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
        Schema::dropIfExists('soft_details');
    }
}
