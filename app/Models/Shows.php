<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    //
    //
    protected $table='shows';
    protected $primaryKey = 'id';
    protected $fillable = ['name',
    						'active',
    						'age',
    						'weekly_nut',
    						'number_of_cast',
    						'number_of_musicians',
    						'number_of_stagehands', 
    						'number_of_trucks', 
    						'notes'];  
    protected $hidden = ['created_at','updated_at'];

	public function categories()
    {
        return $this->belongsToMany('App\Models\Categories','show_categories','show_id','category_id'); 
    }         
}
