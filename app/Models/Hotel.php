<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
	
	protected $fillable = ['name', 'location', 'image', 'description'];
	
	public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }
}