@extends('layouts.app')

@section('title', 'Teacher List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Teacher List</h2>
        <a href="{{ route('teachers.enrollment') }}" class="btn btn-primary">Add New Teacher</a>
    </div>

    {{-- Session Message for Success/Deletion (Controller থেকে আসা মেসেজ) --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject Taught</th>
                    <th class="text-center">Actions</th> 
                </tr>
            </thead>
            <tbody>
                {{-- Controller থেকে আসা $teachers ডেটা লুপ করা হচ্ছে --}}
                @forelse ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->subject ?? 'N/A' }}</td> 
                    <td class="text-center">
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-info me-2">Edit</a>

                        <form action="{{ route('teachers.delete', $teacher->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete {{ $teacher->name }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
                {{-- যদি কোনো শিক্ষক না থাকে --}}
                @empty
                <tr>
                    <td colspan="5" class="text-center">No teachers found. Please enroll a new teacher.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection