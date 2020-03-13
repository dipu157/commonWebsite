<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('menu_id');
            $table->string('headline');
            $table->text('detail_description');
            $table->text('related_image');
            $table->tinyInteger('status');
            $table->tinyInteger('user_id');
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
        Schema::dropIfExists('page_bodies');
    }
}
