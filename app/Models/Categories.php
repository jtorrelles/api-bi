<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table='categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description'];  
    protected $hidden = ['created_at','updated_at'];  

    public function shows()
    {
        return $this->belongsToMany('App\Models\Shows','show_categories','category_id','show_id');
    }   
}
