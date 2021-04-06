<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('menus', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string("name",50);
           $table->string("icon");
           $table->string("url");
           $table->bigInteger("parent");
           $table->integer('sort');
           $table->timestamps();
           $table->softDeletes($column = 'deleted_at', $precision = 0);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}
