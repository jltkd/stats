<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtBatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at_bats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('child_id');
            $table->date('date')->nullable();
            $table->integer('inning')->nullable();
            $table->integer('balls')->nullable();
            $table->integer('strikes')->nullable();
            $table->string('outcome')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('at_bats');
    }
}
