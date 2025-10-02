<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('dashboard')) active @endif" href="{{ route('dashboard') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentInfoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="studentInfoDropdown">
                        <li><a class="dropdown-item" href="{{ route('students.enrollment') }}">Student Enrollment</a></li>
                        <li><a class="dropdown-item" href="{{ route('students.list') }}">Student List</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="teacherInfoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teacher Info
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="teacherInfoDropdown">
                        <li><a class="dropdown-item" href="{{ route('teachers.enrollment') }}">Teacher Enrollment</a></li>
                        <li><a class="dropdown-item" href="{{ route('teachers.list') }}">Teacher List</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-warning" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>