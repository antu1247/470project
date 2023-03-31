@extends('layouts.main')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Booking') }}
        </h2>
    </x-slot>
      <form action = "" method ="post">
        {{ csrf_field() }}

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "origin"> Origin </label>
          <input type = "text" id = "origin" name = "origin" class = "form-control" value = "{{ $booking->origin }}" disabled />
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "destination"> Destination </label>
          <input type = "text" id = "destination" name = "destination" class = "form-control" value = "{{ $booking->destination }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "date"> Date </label>
          <input type = "text" id = "date" name = "date" class = "form-control" value = "{{ $booking->date }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "time"> Time </label>
          <input type = "text" id = "time" name = "time" class = "form-control" value = "{{ $booking->time }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "bus_no"> Bus No. </label>
          <input type = "text" id = "bus_no" name = "bus_no" class = "form-control" value = "{{ $booking->bus_no }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "bus_type"> Bus Type </label>
          <input type = "text" id = "bus_type" name = "bus_type" class = "form-control" value = "{{ $booking->bus_type }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "bus_seats"> No. of Seats </label>
          <input type = "text" id = "bus_seats" name = "bus_seats" class = "form-control" value = "{{ $booking->bus_seats }}"disabled />
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "ticket_price"> Status </label>
          <input type = "text" id = "ticket_price" name = "ticket_price" class = "form-control" value = "{{ $booking->ticket_price }}" disabled/>
        </div>

        <div class = "col-sm-10 my-1" style="margin:auto">
          <label for = "status"> Status </label>
          <input type = "text" id = "status" name = "status" class = "form-control" value = "{{ $booking->status }}" disabled/>
        </div>

        <div class="col-md-12 text-center">
        <button class = "btn btn-danger" type="submit"> Delete </button>
        <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
        </div>
        
      </form>
      </div>
      </div>
</x-app-layout>

