<!DOCTYPE html>
<html>
<head>

    <title>Tasks</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

        .sidebar{
            width:260px;
            height:100vh;
            background:#FEF9FA;
            padding:25px;
            padding-right:35px;
            box-sizing:border-box;
            border-right:1px solid #6A3A3C;
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

    </style>

</head>

<body>

<div class="container">

    @include('components.sidebar')

    <div class="flex-1 p-6 bg-[#FEF1F2] overflow-hidden">

        <h1 class="text-3xl font-bold text-[#6A3A3C] mb-5">
            Tasks
        </h1>

        <!-- Add Task -->
        <div class="bg-white rounded-[25px] p-6 mb-6 border border-[#6A3A3C]">

            <h2 class="text-xl font-bold text-[#6A3A3C] mb-5">
                Add New Task
            </h2>

            <form
                action="{{ route('tasks.store') }}"
                method="POST"
                class="space-y-4"
            >

                @csrf

                <input
                    type="text"
                    name="title"
                    placeholder="Task title"
                    class="w-full h-[55px] rounded-[18px] border border-[#6A3A3C] px-5 bg-[#FDFAF9] outline-none"
                >

                <textarea
                    name="description"
                    placeholder="Task description"
                    class="w-full h-[90px] rounded-[18px] border border-[#6A3A3C] px-5 py-4 bg-[#FDFAF9] outline-none"
                ></textarea>

                <input
                    type="date"
                    name="deadline"
                    class="w-full h-[55px] rounded-[18px] border border-[#6A3A3C] px-5 bg-[#FDFAF9] outline-none"
                >

                <button
                    type="submit"
                    class="w-[180px] h-[55px] rounded-[18px] bg-[#E65F5F] text-white font-bold text-lg"
                >
                    Add Task
                </button>

            </form>

        </div>

        <!-- Task Cards -->
        <div class="grid grid-cols-2 gap-5 overflow-y-auto max-h-[420px] pr-2">

            @foreach($tasks as $task)

                <div class="bg-white rounded-[22px] p-5 border border-[#6A3A3C]">

                    <div class="flex justify-between items-start mb-3">

                        <h2 class="text-xl font-bold text-[#6A3A3C]">
                            {{ $task->title }}
                        </h2>

                        <!-- STATUS BADGE -->
                        <span

                            style="

                                @if($task->status == 'Pending')

                                    background:#FEF3C7;
                                    color:#B45309;

                                @elseif($task->status == 'Progress')

                                    background:#DBEAFE;
                                    color:#1D4ED8;

                                @elseif($task->status == 'Completed')

                                    background:#DCFCE7;
                                    color:#15803D;

                                @endif

                            "

                            class="
                                px-3 py-1 rounded-full
                                font-semibold text-sm
                            "
                        >

                            {{ $task->status }}

                        </span>

                    </div>

                    <!-- DESCRIPTION -->
                    <p class="text-gray-600 mb-3 text-sm">
                        {{ $task->description }}
                    </p>

                    <!-- DEADLINE -->
                    <p class="text-[#6A3A3C] font-semibold text-sm mb-4">

                        Deadline:
                        {{ $task->deadline }}

                    </p>

                    <!-- ACTION -->
                    <div class="flex gap-3 items-center">

                        <!-- UPDATE STATUS -->
                        <form
                            action="{{ route('tasks.update', $task->id) }}"
                            method="POST"
                            class="flex gap-2 items-center"
                        >

                            @csrf
                            @method('PATCH')

                            <select
                                name="status"

                                style="

                                    @if($task->status == 'Pending')

                                        background:#FEF3C7;
                                        color:#B45309;

                                    @elseif($task->status == 'Progress')

                                        background:#DBEAFE;
                                        color:#1D4ED8;

                                    @elseif($task->status == 'Completed')

                                        background:#DCFCE7;
                                        color:#15803D;

                                    @endif

                                "

                                class="
                                    px-3 py-2 rounded-[12px]
                                    border border-[#6A3A3C]
                                    font-semibold text-sm outline-none
                                "
                            >

                                <option
                                    value="Pending"
                                    {{ $task->status == 'Pending' ? 'selected' : '' }}
                                >
                                    Pending
                                </option>

                                <option
                                    value="Progress"
                                    {{ $task->status == 'Progress' ? 'selected' : '' }}
                                >
                                    Progress
                                </option>

                                <option
                                    value="Completed"
                                    {{ $task->status == 'Completed' ? 'selected' : '' }}
                                >
                                    Completed
                                </option>

                            </select>

                            <button
                                type="submit"
                                class="px-4 py-2 rounded-[12px] bg-green-100 text-green-700 font-semibold text-sm"
                            >
                                Save
                            </button>

                        </form>

                        <!-- DELETE -->
                        <form
                            action="{{ route('tasks.destroy', $task->id) }}"
                            method="POST"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="px-4 py-2 rounded-[12px] bg-red-100 text-red-700 font-semibold text-sm"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</div>

</body>
</html>