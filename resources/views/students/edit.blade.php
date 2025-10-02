@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <h2>Edit Student Information</h2>
    <h4>Student: {{ $student->name }} (ID: {{ $student->id }})</h4>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('POST') {{-- আপনার web.php তে POST ব্যবহার করা হয়েছে, তাই এটি ঠিক আছে। --}}

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" 
                   value="{{ old('name', $student->name) }}" required>
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" 
                   value="{{ old('email', $student->email) }}" required>
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        {{-- ✅ নতুন যোগ করা হলো: Class Field --}}
        <div class="mb-3">
            <label for="class" class="form-label">Class / Grade</label>
            <input type="text" class="form-control" id="class" name="class" 
                   value="{{ old('class', $student->class) }}" required>
            @error('class')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-success">Update Information</button>
        <a href="{{ route('students.list') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection