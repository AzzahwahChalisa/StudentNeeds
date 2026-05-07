<h1>Daftar Tugas</h1>

@foreach($tasks as $task)
    <div>
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
        <small>XP: {{ $task->xp_reward }}</small>
        <hr>
    </div>
@endforeach