<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
	
	protected $fillable = ['name', 'location_id', 'image', 'description'];
	
	protected $with = ['location'];

	
	public function location()
    {
        return $this->belongsTo('App\Models\Location')->with('parent');
    }
	
	public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }
}
