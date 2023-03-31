@extends('layouts.main')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Miscellaneous') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Contact </h1>
                    <h5> 1. Phone Numbers: +88012345678910, +8801987654321 </h5>
                    <h5> 2. Email Address: bus@admin.com </h5>
                    <h5> 3. Address: Bangladesh </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Feedback </h1>
                    <div class = "form-group">
                        <label for = "feedback"> Help us improve: </label>
                        <input type = "paragraph" id = "feedback" name = "feedback" class = "form-control"/>
                        <button class = "btn btn-primary" type = "submit"> Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Seat Plan </h1>
                    <div class="container">
                        <img src="{{ URL ('images/seat-map.jpg') }}" alt="" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-15">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Seasonal Offers and Priveliges </h1>
                    <h5> 1. Dhaka-Sylhet Package: now only at 2000 taka! </h5>
                    <h5> 2. Dhaka-Mawa Package: now only at 800 taka! </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center">
    <a href = "{{ route('dashboard') }}" class = "btn btn-secondary"> Back </a>
    </div>
    
</x-app-layout>
