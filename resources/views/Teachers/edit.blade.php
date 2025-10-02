@extends('layouts.app')

@section('title', 'Edit Teacher')

@section('content')
    <h2>Edit Teacher Information</h2>
    <h4>Teacher: {{ $teacher->name }} (ID: {{ $teacher->id }})</h4>

    {{-- Form action points to the 'teachers.update' POST route --}}
    <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
        @csrf
        {{-- আপনার web.php তে Route::post('/update/{id}', ...) ব্যবহার করা হয়েছে --}}
        @method('POST') 

        {{-- 1. Full Name Field --}}
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            {{-- value-তে $teacher->name ব্যবহার করে পুরাতন ডেটা দেখানো হচ্ছে --}}
            <input type="text" class="form-control" id="name" name="name" 
                   value="{{ old('name', $teacher->name) }}" required>
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        
        {{-- 2. Email Address Field --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" 
                   value="{{ old('email', $teacher->email) }}" required>
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        {{-- 3. Subject Field --}}
        <div class="mb-3">
            <label for="subject" class="form-label">Main Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" 
                   value="{{ old('subject', $teacher->subject) }}" required>
            @error('subject')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-success">Update Information</button>
        <a href="{{ route('teachers.list') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection