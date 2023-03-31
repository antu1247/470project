@extends('layouts.main')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Tickets') }}
        </h2>
    </x-slot>

    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Bus No.</th>
            <th scope="col">Bus Type</th>
            <th scope="col">No. of Seats</th>
            <th scope="col">Ticket Price</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        
        @foreach ($tickets as $ticket)
        <tr>
          <td> {{ $ticket->origin }} </td>
          <td> {{ $ticket->destination }} </td>
          <td> {{ $ticket->date }} </td>
          <td> {{ $ticket->time }} </td>
          <td> {{ $ticket->bus_no }} </td>
          <td> {{ $ticket->bus_type }} </td>
          <td> {{ $ticket->bus_seats}} </td>
          <td> {{ $ticket->ticket_price}} </td>
          
          <td> 
          <a button type="button" class="btn btn-primary" onclick = "location.href = '/tickets/usershow/{{ $ticket->ticket_id }}' ">Book Now</button></a>
          </td>

        </tr>
        @endforeach 

      </table>
      <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
    </div>
    </div>
</x-app-layout>


