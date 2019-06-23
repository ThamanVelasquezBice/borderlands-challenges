<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegendariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legendaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('flavor_text');
            $table->string('image_url');
            $table->integer('gun_brand_id');
            $table->integer('item_type_id');
            $table->integer('game_id');
            $table->integer('loot_source_id');
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
        Schema::dropIfExists('legendaries');
    }
}
