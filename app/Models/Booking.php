<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['origin', 'destination', 'date', 'time', 'bus_no', 'bus_type', 'bus_seats','ticket_price', 'seat_number', 'status', 'user_id'];
    protected $primaryKey = 'booking_id';

    protected static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->user_id = auth()->id();
        });
        /*
        self::addGlobalScope(function(Builder $builder) {
            $builder->where('user_id', auth()->id());
        });
        */

    }

}
