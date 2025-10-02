{{-- ... আগের কোড ... --}}

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th> {{-- ✅ নতুন যোগ করা হলো --}}
                <th class="text-center">Actions</th> 
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->class }}</td> {{-- ✅ ডেটা প্রিন্ট --}}
                <td class="text-center">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-info me-2">Edit</a>
                    <form action="{{ route('students.delete', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete {{ $student->name }}?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No students found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- ... বাকি কোড ... --}}