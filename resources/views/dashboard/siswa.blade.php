<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <style>

        body{
            margin:0;
            font-family:Arial;
            background:#f6f2f2;
        }

        .container{
            display:flex;
        }

        .sidebar{
            width:220px;
            height:100vh;
            background:white;
            padding:20px;
        }

        .sidebar a,
        .sidebar button{
            display:block;
            width:100%;
            margin-top:15px;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#f8dede;
            text-decoration:none;
            color:black;
            cursor:pointer;
        }

        .content{
            flex:1;
            padding:30px;
        }

        .cards{
            display:flex;
            gap:20px;
        }

        .card{
            width:200px;
            background:white;
            padding:20px;
            border-radius:20px;
            text-align:center;
        }

        .quick-add{
            background:white;
            padding:20px;
            margin-top:20px;
            border-radius:20px;
        }

        .quick-add input{
            width:100%;
            padding:15px;
            border:none;
            border-radius:10px;
            background:#f8dede;
        }

        .bottom{
            display:flex;
            gap:20px;
            margin-top:20px;
        }

        .tasks{
            width:40%;
            background:white;
            border-radius:20px;
            padding:20px;
        }

        .calendar{
            flex:1;
            background:white;
            border-radius:20px;
            padding:20px;
        }

        .task-item{
            background:#f8dede;
            padding:10px;
            border-radius:10px;
            margin-top:10px;
        }

    </style>

</head>

<body>

<div class="container">

    @include('components.sidebar')

    <div class="content">

        <h2>Let's finish your tasks today!</h2>

        <div class="cards">

            <div class="card">
                <h3>Task Selesai</h3>
                <h1>{{ $completed }}</h1>
            </div>

            <div class="card">
                <h3>Total Task</h3>
                <h1>{{ $total }}</h1>
            </div>

            <div class="card">
                <h3>Task Belum Selesai</h3>
                <h1>{{ $unfinished }}</h1>
            </div>

        </div>

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

        <div class="bottom">

            <div class="tasks">

                <h3>Tasks</h3>

                @foreach($tasks as $task)

                    <div class="task-item">

                        <form
                            action="{{ route('tasks.update', $task->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('PATCH')

                            <input
                                type="checkbox"
                                onchange="this.form.submit()"
                                {{ $task->is_completed ? 'checked' : '' }}
                            >

                            {{ $task->title }}

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

        initialView: 'dayGridMonth'

    });

    calendar.render();

});

</script>

</body>
</html>