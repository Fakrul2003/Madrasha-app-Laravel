@extends('layouts.app')

@section('title', 'Teacher Enrollment')

@section('content')
    <h2>New Teacher Enrollment</h2>
    <div class="card p-4 shadow-sm">
        {{-- Form action points to the 'teachers.store' POST route --}}
        <form method="POST" action="{{ route('teachers.store') }}">
            @csrf

            {{-- 1. Full Name Field (Controller Validate: name) --}}
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="{{ old('name') }}" placeholder="Enter teacher's full name" required>
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- 2. Email Address Field (Controller Validate: email) --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="{{ old('email') }}" placeholder="Enter teacher's email" required>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- 3. Subject Field (Controller Validate: subject) --}}
            <div class="mb-3">
                <label for="subject" class="form-label">Main Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" 
                       value="{{ old('subject') }}" placeholder="e.g., Mathematics, Physics" required>
                @error('subject')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3">Enroll Teacher</button>
            <a href="{{ route('teachers.list') }}" class="btn btn-secondary mt-3">Go to Teacher List</a>
        </form>
    </div>
@endsection