@extends('layouts.app')

@section('title', 'Student Enrollment')

@section('content')
  <div class="m-4"> 
    <h2>New Student Enrollment</h2>
    <div class="card p-4 shadow-sm">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="{{ old('name') }}" placeholder="Enter student's full name" required>
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="{{ old('email') }}" placeholder="Enter student's email" required>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- ✅ নতুন যোগ করা হলো: Class Field --}}
            <div class="mb-3">
                <label for="class" class="form-label">Class / Grade</label>
                <input type="text" class="form-control" id="class" name="class" 
                       value="{{ old('class') }}" placeholder="e.g., Ten, Grade 5" required>
                @error('class')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-success mt-3">Enroll Student</button>
            <a href="{{ route('students.list') }}" class="btn btn-secondary mt-3">Go to Student List</a>
        </form>
    </div>
</div>
@endsection