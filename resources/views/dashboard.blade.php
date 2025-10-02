@extends('layouts.app')

@section('title', 'Dashboard')

{{-- @section('content') এখানে শুরু হয় --}}
@section('content') 
    
    <div class="main-hero-section max-w-6xl m-0">
        <div class="hero-content">
        <img src='../image/arobi.png' alt="" class="">
            <p style="font-size: 2rem;">O' Allah We Believe</p>
            <h1 style="font-size: 3.5rem;">That Only You Can Save Us</h1>
        </div>
    </div>
    
    <div class="container ">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Welcome to the Admin Dashboard!</h2>
                <p>Use the navigation menu above to manage Student and Teacher information easily.</p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Students Management</h5>
                        <p class="card-text">Total Students: 500+</p>
                        <a href="{{ route('students.list') }}" class="btn btn-light btn-sm">View Student List</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Teachers Management</h5>
                        <p class="card-text">Total Teachers: 50+</p>
                        <a href="{{ route('teachers.list') }}" class="btn btn-light btn-sm">View Teacher List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- Donate Section --}}
    <section class="donate-section py-5">
        <div class="container">
            <div class="row align-items-center">
                
                {{-- Left Side Image --}}
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('images/mosque.jpg') }}" alt="Mosque" class="img-fluid rounded shadow-lg">
                </div>
                
                {{-- Right Side Content --}}
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="text-light fw-bold mb-3">Donate Now</h2>
                    <p class="text-success fs-4">Charity does not decrease wealth</p>
                    <a href="#" class="btn btn-success btn-lg mt-3">Donate</a>
                </div>
            </div>

            <div class="row mt-5">
                {{-- Left Content --}}
                <div class="col-md-6 text-center text-md-start">
                    <h3 class="text-light fw-bold">Your Donation Matters</h3>
                    <p class="text-white">Help the poor, support the needy, and spread kindness.</p>
                    <a href="#" class="btn btn-outline-light btn-lg mt-2">Contribute</a>
                </div>

                {{-- Right Side Image --}}
                <div class="col-md-6 mb-4 text-center">
                    <img src="{{ asset('images/helping-hands.jpg') }}" alt="Helping Hands" class="img-fluid rounded-circle shadow-lg" style="max-width: 350px;">
                </div>
            </div>
        </div>
    </section>
{{-- @endsection এখানে শেষ হয় --}}
@endsection