<!DOCTYPE html>
<html>
<head>

    <title>Profile</title>

    <style>

        body{
            font-family:Arial;
            background:#f6f2f2;
            padding:40px;
        }

        .profile{
            width:400px;
            background:white;
            padding:30px;
            border-radius:20px;
        }

    </style>

</head>

<body>

<div class="profile">

    <h1>Profile</h1>

    <p>
        <strong>Name:</strong>
        {{ $user->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $user->email }}
    </p>

</div>

</body>
</html>