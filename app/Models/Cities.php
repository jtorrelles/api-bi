<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
    protected $table='cities';
    protected $primaryKey = 'id';
    protected $fillable = ['shortname','name','state_id'];  
    protected $hidden = ['created_at','updated_at'];     

    public function state()
    {
        return $this->belongsTo('States'); 
    } 
}
