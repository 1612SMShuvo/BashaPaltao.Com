<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_id');
            $table->string('m_name');
            $table->string('m_email');
            $table->string('m_pass');
            $table->integer('m_age');
            $table->string('m_phone');
            $table->string('m_date');
            $table->string('m_post');
            $table->string('m_area');
            $table->string('free');
            
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
        Schema::dropIfExists('manager');
    }
}
