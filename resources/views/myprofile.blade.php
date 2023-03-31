
@include('layouts.partials._head');

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <form action = "" method ="post">
                   
                    <div class = "form-group">
                    <label for = "{{Auth::user()->name}}"> Name </label>
                    <input type = "text" id = "{{Auth::user()->name}}" name = "{{Auth::user()->name}}" class = "form-control" value = "{{Auth::user()->name}}" disabled />
                    </div>

                    <div class = "form-group">
                    <label for = "{{Auth::user()->email}}"> Email Address </label>
                    <input type = "text" id = "{{Auth::user()->email}}" name = "{{Auth::user()->email}}" class = "form-control" value = "{{Auth::user()->email}}" disabled />
                    </div>
                </form>
                </div>
            </div>
            <br>
            <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
        </div>
    </div>
</x-app-layout>
