<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->char('active',1);
            $table->string('age',10);
            $table->decimal('weekly_nut',11,2);
            $table->string('number_of_cast',150);
            $table->integer('number_of_musicians');
            $table->integer('number_of_stagehands');
            $table->integer('number_of_trucks');
            $table->string('notes',200);
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
        Schema::dropIfExists('shows');
    }
}
