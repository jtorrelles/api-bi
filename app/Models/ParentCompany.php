<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentCompany extends Model
{
    //
    protected $table='parent_companies';
    protected $primaryKey = 'id';
    protected $fillable = ['shortname','description'];
    protected $hidden = ['created_at','updated_at'];    

    public function presenters()
    {
        return $this->belongsTo('App\Models\Presenters','parentcompany_id'); 
    }      
}
