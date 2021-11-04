<div class="container-fluid justify-content-end">
    <ul class="navbar-nav ">
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Project' ? 'active' : '' }}" href="{{ route('projects.index') }}">Project</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-link">
            <a class="nav-link {{ $title == 'Course' ? 'active' : '' }}" href="{{ route('courses.index') }}">Course</a>
        </li>
    </ul>
</div>
