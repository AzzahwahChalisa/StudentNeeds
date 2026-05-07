<h1>Tambah Tugas</h1>

<form action="/tasks" method="POST">
    @csrf

    <div>
        <label>Judul</label>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Deskripsi</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <div>
        <label>Deadline</label>
        <input type="date" name="deadline">
    </div>

    <br>

    <div>
        <label>XP Reward</label>
        <input type="number" name="xp_reward">
    </div>

    <br>

    <button type="submit">
        Simpan Tugas
    </button>
</form>