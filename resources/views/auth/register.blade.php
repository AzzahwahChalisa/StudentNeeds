<!DOCTYPE html>
<html>
<head>

    <title>Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#FEF1F2] min-h-screen flex items-center justify-center overflow-hidden">

    <div class="w-[700px] bg-white rounded-[50px] px-14 py-8">

        <!-- Logo -->
        <div class="flex flex-col items-center -mt-4 mb-4">

            <img
                src="{{ asset('images/ikonstroberry.png') }}"
                class="w-[170px]"
            >

            <div class="flex items-center -mt-4">

                <h1 class="text-[38px] font-bold text-[#E65F5F]">
                    Student
                </h1>

                <h1 class="text-[38px] font-bold text-[#6A3A3C] ml-2">
                    Needs
                </h1>

            </div>

        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">

            @csrf

            <!-- Name -->
            <div class="mb-5">

                <label class="block text-[20px] text-[#6A3A3C] mb-2">
                    Nama
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    class="w-full h-[65px] rounded-[25px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 outline-none"
                >

            </div>

            <!-- Email -->
            <div class="mb-5">

                <label class="block text-[20px] text-[#6A3A3C] mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full h-[65px] rounded-[25px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 outline-none"
                >

            </div>

            <!-- Password -->
            <div class="mb-5">

                <label class="block text-[20px] text-[#6A3A3C] mb-2">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    required
                    class="w-full h-[65px] rounded-[25px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 outline-none"
                >

            </div>

            <!-- Confirm Password -->
            <div class="mb-7">

                <label class="block text-[20px] text-[#6A3A3C] mb-2">
                    Confirm Password
                </label>

                <input
                    type="password"
                    name="password_confirmation"
                    required
                    class="w-full h-[65px] rounded-[25px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 outline-none"
                >

            </div>

            <!-- Button -->
            <div class="flex items-center justify-between">

                <a
                    href="{{ route('login') }}"
                    class="text-[#6A3A3C] text-[18px]"
                >
                    Sudah punya akun? Login
                </a>

                <button
                    type="submit"
                    class="w-[200px] h-[65px] rounded-[25px] bg-[#E65F5F] border border-[#6A3A3C] text-white text-[28px] font-bold"
                >
                    Daftar
                </button>

            </div>

        </form>

    </div>

</body>
</html>