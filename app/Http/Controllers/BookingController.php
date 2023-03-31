<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Booking;
use App\Http\Controllers\Controller;
require_once("config.php");

class BookingController extends Controller
{
     public function index()
    {
       //
    }

    public function bookingcompleted()
    {
        if(Auth::user()->hasRole('user')){
            $bkings = \DB::table('bookings')->where('user_id', auth()->id())->latest()->get();
            return view('bookings.bookingcompleted', compact('bkings'));
        }
        elseif(Auth::user()->hasRole('admin')){

            return view ('dashboard');
            $bkings = \DB::table('bookings')->latest()->get();
            return view('bookings.history', compact('bkings'));
    }
    }  

    public function bookinghistory()
    {
        $bkings = \DB::table('bookings')->latest()->get();
        return view('bookings.bookinghistory', compact('bkings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (request('seat_number') > request('bus_seats')){
            return redirect()->route('bookings.bookingcompleted')->with('Please enter a valid seat number.');
        }

        Booking::create([
            'origin' => request('origin'),
            'destination' => request('destination'),
            'time' => request('time'),
            'date' => request('date'),
            'bus_no' => request('bus_no'),
            'bus_type' => request('bus_type'),
            'bus_seats' => request('bus_seats'),
            'ticket_price' => request('ticket_price'),
            'seat_number' => request('seat_number'),
            'status' => request('status')            
        ]);

        return redirect()->route('bookings.bookingcompleted');
    }

    public function storefeedback(Request $request)
    {   dd('store');
        Feedback::create([
            'user_id'=> (auth()->id())->get(),
            'feedback' => request('feedback')    
        ]);

        return redirect()->route('bookings.miscellaneous');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {   
        $booking->origin = request('origin');
        $booking->destination = request('destination');
        $booking->date = request('date');
        $booking->time = request('time');
        $booking->bus_no = request('bus_no');
        $booking->ticket_price = request('ticket_price');
        $booking->seat_number = request('seat_number');
        $booking->status = request('status');
        $booking->user_id = request('user_id');
        $booking->save();

        return redirect()->route('bookings.bookinghistory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function miscellaneous(Booking $booking)
    {
        return view('bookings.miscellaneous', compact('booking'));
    }    
    
     public function delete(Booking $booking)
    {
        return view('bookings.delete', compact('booking'));
    } 
    
     public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.bookingcompleted');
    }

    public function bookingticket(Booking $booking)
    {
        return view('bookings.bookingticket', compact('booking'));
    }

    public function storetickets(Request $request)
    {   
        if (request('seat_number') > request('bus_seats')){
            return redirect()->route('bookings.bookingcompleted')->with('Please enter a valid seat number.');
        }

        /*$u = request('seat_number');
        $query = "SELECT * FROM bookings WHERE seat_number = '$u' AND status == 'PAID'";
        $result = mysql_query($query);
        if ($result != 'null')
        {
            return redirect()->route('bookings.bookingcompleted')->with('Please enter a valid seat number.');
        }
        */

        if (request('seat_number') == null){
            return redirect()->route('bookings.bookingcompleted')->with('Please enter a valid seat number.');
        }

    
        Booking::create([
            'origin' => request('origin'),
            'destination' => request('destination'),
            'time' => request('time'),
            'date' => request('date'),
            'bus_no' => request('bus_no'),
            'bus_type' => request('bus_type'),
            'bus_seats' => request('bus_seats'),
            'ticket_price' => request('ticket_price'),
            'seat_number' => request('seat_number'),
            'status' => request('status')            
        ]);

        return redirect()->route('bookings.bookingcompleted');
    }
    /*
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            Booking::where('updated_at', '<', Carbon::now()->subDays(3))->delete();
        })->weekly();
    }
    */
}
