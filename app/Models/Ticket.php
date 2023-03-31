<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = ['origin', 'destination', 'date', 'time', 'bus_no', 'bus_type', 'bus_seats', 'ticket_price', 'status'];
    protected $primaryKey = 'ticket_id';
}
