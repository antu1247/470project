@extends('layouts.main')


<x-app-layout>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
      @if(Auth::user()->hasRole('user'))
        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Book Ticket') }}
          </h2>
        </x-slot>
      @endif 

      @if(Auth::user()->hasRole('admin'))
        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Bus Routes') }}
          </h2>
        </x-slot>
      @endif 

    </div>

    <div class="col-md-12 text-center">
    <button type="button" class="btn btn-primary" onclick = "location.href = 'tickets/create' ">Add New Routes</button>
    </div>

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
        <tbody>
        

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
          <td> {{ $ticket->status }} </td>
          <!--<td><a href = "/tickets/{{ $ticket->ticket_id }}" class = "btn btn-primary">Update</a></td>-->
          <td> 
            <a button type="button" class="btn btn-primary" onclick = "location.href = '/tickets/{{ $ticket->ticket_id }}' ">Update</button></a>
            <a button type="button" class="btn btn-danger" onclick = "location.href = '/tickets/delete/{{ $ticket->ticket_id }}' ">Delete</button></a>
          </td>
        </tr>
        @endforeach 
        </tbody>
      </table>
      <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
    </div>
  </main>
  </div>
</x-app-layout>

