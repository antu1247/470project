<?php use Carbon\Carbon ?>

@extends('layouts.main')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking History') }}
        </h2>
    </x-slot>

    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="table-responsive">
      <table class="table table-striped table-sm ">
        <thead>
          <tr>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Bus No.</th>
            <th scope="col">Bus Type</th>
            <th scope="col">Seat No.</th>
            <th scope="col">Ticket Price</th>
            <th scope="col">Payment Status</th>

          </tr>
        </thead>     

      @foreach ($bkings as $booking) 
        <tr>
          <td> {{ $booking->origin }} </td>
          <td> {{ $booking->destination }} </td>
          <td> {{ $booking->date }} </td>
          <td> {{ $booking->time }} </td>
          <td> {{ $booking->bus_no }} </td>
          <td> {{ $booking->bus_type }} </td>
          <td> {{ $booking->seat_number}} </td>
          <td> {{ $booking->ticket_price}} </td>
          <td> {{ $booking->status }} </td>
        <td> 
        <a button type="button" class="btn btn-primary" onclick = "location.href = '/booking/bookingticket/{{ $booking->booking_id }}' ">View Booking Ticket</button></a>
        
       
        @if ($booking->status == '0')
          <a button type="button" class="btn btn-danger" onclick = "location.href = '/booking/delete/{{ $booking->booking_id }}' ">Delete</button></a>
        @endif 

        </td>
        </tr>
      @endforeach 
        
      </table>
      <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
    </div>
    </div>
</x-app-layout>

