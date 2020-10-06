<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
	
	protected $fillable = ['name', 'location_id'];
	
	public function hotels()
    {
        return $this->hasMany('App\Models\Hotel');
    }
	
    public function getChildren() {
        return $this->hasMany('App\Models\Location', 'location_id')->with('getChildren');
    }
	
    public function parent() {
        return $this->belongsTo('App\Models\Location', 'location_id')->with('parent');
    }
}
