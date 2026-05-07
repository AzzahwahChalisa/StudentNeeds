<h1>Assignment List</h1>

@foreach($tasks as $task)

    <div>
        <h2>{{ $task->title }}</h2>

        <p>{{ $task->description }}</p>

        <p>Deadline: {{ $task->deadline }}</p>

        <p>Status: {{ $task->status }}</p>

        @if($task->status != 'completed')

            <form action="/tasks/{{ $task->id }}/complete" method="POST">

                @csrf
                @method('PATCH')

                <button type="submit">
                    Mark as Completed
                </button>

            </form>

        @endif

        <hr>
    </div>

@endforeach