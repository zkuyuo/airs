<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0);
            $table->string('icon', 50)->nullable();
            $table->string('uri');
            $table->tinyInteger('is_link')->default(0)->comment('0-no;1-yes');
            $table->tinyInteger('is_display')->default(1)->comment('0-no;1-yes');
            $table->string('permission_name', 50)->nullable();
            $table->string('name');
            $table->string('guard_name', 30);
            $table->smallInteger('sequence')->default(0);
            $table->string('description')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
