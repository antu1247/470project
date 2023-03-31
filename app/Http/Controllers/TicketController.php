<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = DB::table('tickets')->get();
        return view('tickets.index', compact('tickets'));
    }

    public function userindex()
    {   
        $tickets = DB::table('tickets')->get();
        return view('tickets.userindex', compact('tickets'));
    }

    public function guestindex()
    {   
        $tickets = DB::table('tickets')->get();
        return view('tickets.guestindex', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
        return view('tickets.delete', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        Ticket::create([
            'origin' => request('origin'),
            'destination' => request('destination'),
            'date' => request('date'),
            'time' => request('time'),
            'bus_no' => request('bus_no'),
            'bus_type' => request('bus_type'),
            'bus_seats' => request('bus_seats'),
            'ticket_price' => request('ticket_price'),
            'status' => request('status')
        ]);

        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function usershow(Ticket $ticket)
    {
        return view('tickets.usershow', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->origin = request('origin');
        $ticket->destination = request('destination');
        $ticket->date = request('date');
        $ticket->time = request('time');
        $ticket->bus_no = request('bus_no');
        $ticket->bus_type = request('bus_type');
        $ticket->bus_seats = request('bus_seats');
        $ticket->ticket_price = request('ticket_price');
        $ticket->status = request('status');
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    
    
    
     public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }

    public function storetickets(Request $request)
    {   
        Ticket::create([
            'origin' => request('origin'),
            'destination' => request('destination'),
            'date' => request('date'),
            'time' => request('time'),
            'bus_no' => request('bus_no'),
            'bus_type' => request('bus_type'),
            'bus_seats' => request('bus_seats'),
            'ticket_price' => request('ticket_price'),
            'status' => request('status')
        ]);

        return redirect()->route('tickets.index');
    }
    public function updatetickets(Request $request, Ticket $ticket)
    {  
        $ticket->origin = request('origin');
        $ticket->destination = request('destination');
        $ticket->date = request('date');
        $ticket->time = request('time');
        $ticket->bus_no = request('bus_no');
        $ticket->bus_type = request('bus_type');
        $ticket->bus_seats = request('bus_seats');
        $ticket->ticket_price = request('ticket_price');
        $ticket->status = request('status');
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    public function destroytickets(Ticket $ticket)
    {  
        $ticket->delete();
        return redirect()->route('tickets.index');
    }

    
}
