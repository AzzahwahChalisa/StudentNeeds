<div class="sidebar">

    <h2>Student Needs</h2>

    <a href="{{ route('dashboard') }}">
        Dashboard
    </a>

    <a href="{{ route('tasks') }}">
        Tasks
    </a>

    <a href="{{ route('profile.edit') }}">
        Profile
    </a>

    <form method="POST" action="{{ route('logout') }}">

        @csrf

        <button type="submit">
            Logout
        </button>

    </form>

</div>