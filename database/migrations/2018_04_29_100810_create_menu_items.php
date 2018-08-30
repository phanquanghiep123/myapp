<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("pid");
            $table->unsignedBigInteger('menu_id');
            $table->string("name",500);
            $table->string("path",500);
            $table->string("controller",500);
            $table->string("action",500);
            $table->string("method",500);
            $table->string("route_name",500);
            $table->string("middleware",500);
            $table->integer("sort");
            $table->string("class_name",250);
            $table->string("id_name",250);
            $table->string("icon",500);
            $table->string("role_allow",500);
            $table->tinyInteger('is_common')->default(0);
            $table->tinyInteger('is_login')->default(0);
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
