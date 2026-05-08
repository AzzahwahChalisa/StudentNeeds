<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <style>

        body{
            margin:0;
            font-family:Arial;
            background:#FEF1F2;
            overflow:hidden;
        }

        .container{
            display:flex;
            height:100vh;
        }

        /* Sidebar */
        .sidebar{
            width:260px;
            height:100vh;
            background:#FEF9FA;
            padding:25px;
            padding-right:35px;
            box-sizing:border-box;
            border-right:1px solid #6A3A3C;
        }

        .logo{
            font-size:32px;
            font-weight:bold;
            color:#E65F5F;
            margin-bottom:40px;
        }

        .logo span{
            color:#6A3A3C;
        }

        .sidebar a,
        .sidebar button{
            display:block;
            width:100%;
            margin-top:15px;
            padding:14px 18px;
            border:none;
            border-radius:18px;
            background:#FEE7EB;
            text-decoration:none;
            color:#6A3A3C;
            cursor:pointer;
            font-size:17px;
            font-weight:bold;
            text-align:left;
            box-sizing:border-box;
        }

        .sidebar a:hover,
        .sidebar button:hover{
            background:#E65F5F;
            color:white;
        }

        /* Content */
        .content{
            flex:1;
            padding:25px;
            box-sizing:border-box;
        }

        /* Topbar */
        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .welcome h2{
            margin:0;
            color:#6A3A3C;
        }

        .welcome p{
            margin-top:5px;
            color:#6A3A3C;
            opacity:0.7;
        }

        .profile-box{
            display:flex;
            align-items:center;
            gap:12px;
            background:#FEF9FA;
            padding:10px 18px;
            border-radius:20px;
            border:1px solid #6A3A3C;
        }

        .profile-box img{
            width:55px;
            height:55px;
            border-radius:50%;
            object-fit:cover;
        }

        .profile-name{
            font-weight:bold;
            color:#6A3A3C;
        }

        /* Cards */
        .cards{
            display:flex;
            gap:18px;
            margin-bottom:20px;
        }

        .card{
            flex:1;
            background:#FEF9FA;
            padding:20px;
            border-radius:25px;
            border:1px solid #6A3A3C;
            text-align:center;
        }

        .card h3{
            color:#6A3A3C;
            margin-bottom:10px;
        }

        .card h1{
            color:#E65F5F;
            margin:0;
            font-size:38px;
        }

        /* Quick Add */
        .quick-add{
            background:#FEF9FA;
            padding:20px;
            border-radius:25px;
            border:1px solid #6A3A3C;
            margin-bottom:20px;
        }

        .quick-add h3{
            color:#6A3A3C;
        }

        .quick-add input{
            width:100%;
            padding:16px;
            border-radius:18px;
            border:1px solid #6A3A3C;
            background:#FEF1F2;
            box-sizing:border-box;
        }

        /* Bottom */
        .bottom{
            display:flex;
            gap:20px;
            height:390px;
        }

        .tasks{
            width:40%;
            background:#FEF9FA;
            border-radius:25px;
            border:1px solid #6A3A3C;
            padding:20px;
            overflow:auto;
        }

        .calendar{
            flex:1;
            background:#FEF9FA;
            border-radius:25px;
            border:1px solid #6A3A3C;
            padding:20px;
        }

        .tasks h3,
        .calendar h3{
            color:#6A3A3C;
        }

        .task-item{
            background:#FEF1F2;
            padding:12px;
            border-radius:15px;
            margin-top:12px;
            border:1px solid #6A3A3C;
        }

    </style>

</head>

<body>

<div class="container">

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="logo">
            Student <span>Needs</span>
        </div>

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

    <!-- Content -->
    <div class="content">

        <!-- Topbar -->
        <div class="topbar">

            <div class="welcome">

                <h2>
                    Let's finish your tasks today!
                </h2>

                <p>
                    Stay productive and manage your activities.
                </p>

            </div>

            <div class="profile-box">

                <img
                    src="{{ asset('images/ikonstroberry.png') }}"
                >

                <div>

                    <div class="profile-name">
                        {{ Auth::user()->name }}
                    </div>

                    <div style="font-size:14px; color:#6A3A3C;">
                        Student Needs
                    </div>

                </div>

            </div>

        </div>

        <!-- Cards -->
        <div class="cards">

            <div class="card">

                <h3>Completed Tasks</h3>

                <h1>{{ $completed }}</h1>

            </div>

            <div class="card">

                <h3>Total Tasks</h3>

                <h1>{{ $total }}</h1>

            </div>

            <div class="card">

                <h3>Pending Tasks</h3>

                <h1>{{ $unfinished }}</h1>

            </div>

        </div>

        <!-- Quick Add -->
        <div class="quick-add">

            <h3>Quick Add Task</h3>

            <form action="{{ route('tasks.store') }}" method="POST">

                @csrf

                <input
                    type="text"
                    name="title"
                    placeholder="Masukkan tugas..."
                >

            </form>

        </div>

        <!-- Bottom -->
        <div class="bottom">

            <div class="tasks">

                <h3>Tasks</h3>

                @foreach($tasks as $task)

                    <div class="task-item">

                        <form
                            action="{{ route('tasks.toggle', $task->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')

                            <label
                                style="
                                    display:flex;
                                    align-items:center;
                                    gap:10px;
                                    cursor:pointer;
                                "
                            >

                                <input
                                    type="checkbox"
                                    onchange="this.form.submit()"
                                    {{ $task->status == 'Completed' ? 'checked' : '' }}
                                >

                                <span

                                    style="

                                        @if($task->status == 'Completed')

                                            text-decoration:line-through;
                                            color:gray;

                                        @else

                                            color:#6A3A3C;

                                        @endif

                                    "

                                >

                                    {{ $task->title }}

                                </span>

                            </label>

                        </form>

                    </div>

                @endforeach

            </div>

            <div class="calendar">

                <div id='calendar'></div>

            </div>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',

        height: 340

    });

    calendar.render();

});

</script>

</body>
</html>