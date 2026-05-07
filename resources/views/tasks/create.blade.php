<h1>Add Assignment</h1>

<form action="/tasks" method="POST">
    @csrf

    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <div>
        <label>Deadline</label>
        <input type="date" name="deadline">
    </div>

    <br>

    <br>
    <button type="submit">
        SUBMIT
    </button>
</form>