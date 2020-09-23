<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
	
	protected $fillable = ['hotel_id', 'last_name', 'first_name', 'phone_number', 'email', 'check_in', 'checkout'];
	
	public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
}
