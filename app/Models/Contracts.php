<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    //
    protected $table='contracts';
    protected $primaryKey = 'id';
    protected $fillable = ['show_id','presenter_id','venue_id',
    						'opening_date','closing_date','number_of_performances',
    						'gross_potential','itax','guarantee','variable_guarantee',
    						'producer_overages','sales_tax_1','sales_tax_2',
    						'facility_fees_1', 'facility_fees_2','group_comission',
    						'subscription_comission',
    						'phone_comission','internet_comission','credit_card_comission',
    						'remotes_comission','total_fixed_expense',
    						'total_documented_expenses','total_presenter_expenses','notes'];  
    protected $hidden = ['created_at','updated_at'];   

	public function show()
    {
        return $this->belongsTo('Shows'); 
    } 

	public function presenter()
    {
        return $this->belongsTo('Presenters'); 
    }   

    public function venue()
    {
        return $this->belongsTo('Venues'); 
    } 
}
