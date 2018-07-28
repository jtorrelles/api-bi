<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presenters extends Model
{
    //
    protected $table='presenters';
    protected $primaryKey = 'id';
    protected $fillable = ['name',
    						'parentcompany_id',
    						'address1','address2',
    						'city_id','zip',
    						'phone','phone_ext',
    						'contact_name','email',
    						'notes','active'];  
    protected $hidden = ['created_at','updated_at'];

    public function parent()
    {
        return $this->belongsTo('App\Models\ParentCompany','id'); 
    }   

	public function country()
    {
        return $this->belongsTo('App\Models\Countries','id'); 
    } 

}
