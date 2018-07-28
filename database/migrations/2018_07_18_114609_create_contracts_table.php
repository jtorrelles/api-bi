<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('show_id')->unsigned();
            $table->integer('presenter_id')->unsigned();
            $table->integer('venue_id')->unsigned();
            $table->date('opening_date');
            $table->date('closing_date');
            $table->integer('number_of_perfomances');
            $table->decimal('gross_potential',11,2);
            $table->decimal('itax',11,2);
            $table->decimal('guarantee',11,2);
            $table->decimal('variable_guarantee',11,2)->nullable();
            $table->decimal('producer_overages',11,2)->nullable();
            $table->decimal('sales_tax_1',11,2)->nullable();
            $table->decimal('sales_tax_2',11,2)->nullable();
            $table->decimal('facility_fees_1',11,2)->nullable();
            $table->decimal('facility_fees_2',11,2)->nullable();
            $table->decimal('group_comission',11,2);
            $table->decimal('subscription_comission',11,2);
            $table->decimal('phone_comission',11,2);
            $table->decimal('internet_comission',11,2);
            $table->decimal('credit_card_comission',11,2);
            $table->decimal('remotes_comission',11,2);
            $table->decimal('total_fixed_expense',11,2);
            $table->decimal('total_documented_expenses',11,2);
            $table->decimal('total_presenter_expenses',11,2);
            $table->string('notes',250)->nullable();
            $table->timestamps();
        });

        Schema::table('contracts', function($table) {
            $table->foreign('show_id')->references('id')->on('shows');
            $table->foreign('presenter_id')->references('id')->on('presenters');
            $table->foreign('venue_id')->references('id')->on('venues');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
