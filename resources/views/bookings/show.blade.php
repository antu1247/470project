@extends('layouts.main')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Booking') }}
        </h2>
    </x-slot>

    <form action = "" method ="post">
    {{ csrf_field() }}
    <br>
    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "origin"> Origin </label>
        <input type = "text" id = "origin" name = "origin" class = "form-control" value = "{{ $booking->origin }}"readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "destination"> Destination </label>
        <input type = "text" id = "destination" name = "destination" class = "form-control" value = "{{ $booking->destination }}" readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "date"> Date </label>
        <input type = "text" id = "date" name = "date" class = "form-control" value = "{{ $booking->date }}"readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "time"> Time </label>
        <input type = "text" id = "time" name = "time" class = "form-control" value = "{{ $booking->time }}"readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "bus_no"> Bus No. </label>
        <input type = "text" id = "bus_no" name = "bus_no" class = "form-control" value = "{{ $booking->bus_no }}"readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "bus_type"> Bus Type </label>
        <input type = "text" id = "bus_type" name = "bus_type" class = "form-control" value = "{{ $booking->bus_type }}"readonly/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "seat_number"> Seat Number </label>
        <input type = "text" id = "seat_number" name = "seat_number" class = "form-control" value = "{{ $booking->seat_number }}"/>
    </div>
    
    @if(Auth::user()->hasRole('user')){
        <div class = "col-sm-10 my-1" style="margin:auto">
            <label for = "ticket_price"> Ticket Price </label>
            <input type = "text" id = "ticket_price" name = "ticket_price" class = "form-control" value = "{{ $booking->ticket_price }}"readonly/>
        </div>
    @endif 

    @if(Auth::user()->hasRole('admin')){
        <div class = "col-sm-10 my-1" style="margin:auto">
            <label for = "ticket_price"> Ticket Price </label>
            <input type = "text" id = "ticket_price" name = "ticket_price" class = "form-control" value = "{{ $booking->ticket_price }}"/>
        </div>
    @endif 

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "status"> Payment Status </label>
        <input type = "text" id = "status" name = "status" class = "form-control" value = "{{ $booking->status }}"/>
    </div>

    <div class = "col-sm-10 my-1" style="margin:auto">
        <label for = "user_id"> 'User ID' </label>
        <input type = "text" id = "user_id" name = "user_id" class = "form-control" value = "{{ $booking->user_id }}"/>
    </div>

    <div class="col-md-12 text-center">
    <button class = "btn btn-primary" type="submit"> Update </button>
    <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
    </div>
    </form>
       
 
    </div></div>

    </x-app-layout>