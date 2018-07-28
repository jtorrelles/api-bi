<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->string('address1',250);
            $table->string('address2',250);
            $table->integer('city_id')->unsigned();
            $table->string('zip',15);
            $table->string('phone',20);
            $table->string('fax',20);
            $table->string('email',50);
            $table->string('notes',250)->nullable();
            $table->decimal('long', 10, 7)->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->char('active',1);
            $table->timestamps();
        });

        Schema::table('venues', function($table) {
            $table->foreign('city_id')->references('id')->on('cities');
        });         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
