<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowCategories extends Model
{
    //
        //
    protected $table='show_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['show_id','category_id'];  
    protected $hidden = ['created_at','updated_at'];      
}
