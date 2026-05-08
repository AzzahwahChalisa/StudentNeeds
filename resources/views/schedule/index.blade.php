<!DOCTYPE html>
<html>
<head>

    <title>Schedule</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

    </style>

</head>

<body>

<div class="container">

    @include('components.sidebar')

    <div class="flex-1 p-8 bg-[#FEF1F2] min-h-screen">

        <h1 class="text-4xl font-bold text-[#6A3A3C] mb-8">
            Schedule
        </h1>

        <!-- Calendar -->
        <div class="bg-white rounded-[30px] p-6 border border-[#6A3A3C] mb-8">

            <div id='calendar'></div>

        </div>

        <div class="grid grid-cols-2 gap-6">


                    </div>

                </div>

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