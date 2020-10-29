<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->integer('role');
            $table->string('remarks');
            $table->boolean('active');
            $table->timestamp('created_at');
            $table->string('created_id');
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_id')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('deleted_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role');
    }
}
