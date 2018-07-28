<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->integer('parentcompany_id')->unsigned();
            $table->string('address1',250);
            $table->string('address2',250);
            $table->integer('city_id')->unsigned();
            $table->string('zip',15);
            $table->string('phone',20);
            $table->string('phone_ext',5)->nullable();
            $table->string('contact_name',100)->nullable();
            $table->string('email',50);
            $table->string('notes',250)->nullable();
            $table->char('active',1)->default('Y');
            $table->timestamps();
        });

        Schema::table('presenters', function($table) {
            $table->foreign('parentcompany_id')->references('id')->on('parent_companies');
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
        Schema::dropIfExists('presenters');
    }
}
