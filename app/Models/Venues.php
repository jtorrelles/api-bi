<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    //
    protected $table='venues';
    protected $primaryKey = 'id';
    protected $fillable = ['name',
    						'address1',
    						'address2',
    						'city_id',
    						'zip',
    						'phone',
    						'fax',
    						'email',
    						'notes',
    						'lon',
    						'lat',
    						'active'];  
    protected $hidden = ['created_at','updated_at'];   

    public function city()
    {
        return $this->belongsTo('App\Models\Cities','id'); 
    } 
}
