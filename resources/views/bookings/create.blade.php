@extends('layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bus Ticket Management System</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div>
      </div>

      <h2>Routes</h2>
      <form action = "" method ="post">
        {{ csrf_field() }}

        <div class = "form-group">
          <label for = "origin"> Origin </label>
          <input type = "text" id = "origin" name = "origin" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "destination"> Destination </label>
          <input type = "text" id = "destination" name = "destination" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "date"> Date </label>
          <input type = "text" id = "date" name = "date" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "time"> Time </label>
          <input type = "text" id = "time" name = "time" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "bus_no"> Bus No. </label>
          <input type = "text" id = "bus_no" name = "bus_no" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "bus_type"> Bus Type </label>
          <input type = "text" id = "bus_type" name = "bus_type" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "bus_seats"> No. of Seats </label>
          <input type = "text" id = "bus_seats" name = "bus_seats" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "ticket_price"> Ticket Price </label>
          <input type = "text" id = "ticket_price" name = "ticket_price" class = "form-control"/>
        </div>

        <div class = "form-group">
          <label for = "status"> Status </label>
          <input type = "text" id = "status" name = "status" class = "form-control"/>
        </div>

        <button class = "btn btn-primary" type = "submit"> Add </button>
        <a href = "{{ route('tickets.index') }}" class = "btn btn-secondary"> Back </a>

      </form>
       
    </main>
@endsection

