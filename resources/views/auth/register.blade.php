<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

<style>
body {
    margin: 0;
    background: #FEF1F2;
    font-family: 'Poppins', sans-serif;
}

/* FULL SCREEN */
.screen {
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.card {
    width: 707px;
    height: 757px;
    background: #fff;
    border-radius: 69px;
    padding: 50px;
    position: relative;
}

/* HEADER */
.header {
    text-align: center;
    margin-top: -120px;
}

.header img {
    width: 200px;
}

.title {
    font-family: 'Baloo 2';
    font-size: 40px;
}

.student { color: #E65F5F; }
.needs { color: #6A3A3C; }

/* FORM */
label {
    display: block;
    margin-top: 15px;
    color: #6A3A3C;
    font-weight: 500;
}

input, select {
    width: 100%;
    height: 70px;
    border-radius: 20px;
    border: 1px solid #6A3A3C;
    background: #FDFAF9;
    padding: 10px;
    font-size: 16px;
}

/* BUTTON */
button {
    width: 200px;
    height: 70px;
    background: #E65F5F;
    border: none;
    border-radius: 25px;
    color: white;
    font-size: 28px;
    font-family: 'Baloo 2';
    position: absolute;
    right: 40px;
    bottom: 40px;
    cursor: pointer;
}

/* LOGIN */
.login {
    position: absolute;
    left: 40px;
    bottom: 40px;
    color: #6A3A3C;
}
.login a {
    color: #E65F5F;
    text-decoration: none;
}
</style>

<div class="screen">

    <div class="card">

        <div class="header">
            <img src="{{ asset('ikonstoberry.png') }}">
            <div class="title">
                <span class="student">Student</span>
                <span class="needs">Needs</span>
            </div>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nama</label>
            <input type="text" name="name">

            <label>Email</label>
            <input type="email" name="email">

            <label>Role</label>
            <select name="role">
                <option>Siswa</option>
                <option>Guru</option>
            </select>

            <label>Password</label>
            <input type="password" name="password">

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation">

            <button type="submit">Daftar</button>

        </form>

        <div class="login">
            Sudah punya akun? <a href="{{ route('login') }}">Login</a>
        </div>

    </div>

</div>