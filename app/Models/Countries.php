<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    //
    protected $table='countries';
    protected $primaryKey = 'id';
    protected $fillable = ['shortname','name','phonecode'];
    protected $hidden = ['created_at','updated_at'];

    public function states()
    {
        return $this->hasMany('App\Models\States','country_id'); 
    }

}
