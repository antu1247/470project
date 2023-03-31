@extends('layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bus Ticket Management System</h1>
        <!--
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
        -->
      </div>

      <!--
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      -->

      <h2>Routes</h2>
      <button type="button" class="btn btn-primary" onclick = "location.href = 'tickets/create' ">Add New Routes</button>

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
      </div>
    </main>
@endsection

