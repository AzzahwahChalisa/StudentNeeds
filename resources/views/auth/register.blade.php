<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FEF1F2] min-h-screen flex items-center justify-center px-4 py-6 overflow-hidden">

    <div class="w-full max-w-[760px] bg-white rounded-[55px] px-16 py-8 shadow-sm">

        <!-- Logo -->
        <div class="flex flex-col items-center -mt-16 mb-6">

            <img src="{{ asset('images/ikonstroberry.png') }}"
                class="w-[170px] h-[170px] object-contain">

            <div class="-mt-6 flex items-center">

                <h1 class="text-[38px] font-bold text-[#E65F5F]">
                    Student
                </h1>

                <h1 class="text-[38px] font-bold text-[#6A3A3C] ml-2">
                    Needs
                </h1>

            </div>

        </div>

        <form method="POST"
            action="{{ route('register') }}">

            @csrf

            <!-- Error Message -->
            @if ($errors->any())

                <div class="mb-5 p-4 rounded-[20px] bg-red-100 border border-red-400 text-red-700">

                    <ul class="list-disc pl-5">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <!-- Name -->
            <div class="mb-5">

                <label class="block text-[18px] font-medium text-[#6A3A3C] mb-2">
                    Nama
                </label>

                <input id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    class="w-full h-[65px] rounded-[24px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 text-[18px] text-[#6A3A3C] focus:ring-0 focus:outline-none">

            </div>

            <!-- Email -->
            <div class="mb-5">

                <label class="block text-[18px] font-medium text-[#6A3A3C] mb-2">
                    Email
                </label>

                <input id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    class="w-full h-[65px] rounded-[24px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 text-[18px] text-[#6A3A3C] focus:ring-0 focus:outline-none">

            </div>

            <!-- Password -->
            <div class="mb-5">

                <label class="block text-[18px] font-medium text-[#6A3A3C] mb-2">
                    Password
                </label>

                <input id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="w-full h-[65px] rounded-[24px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 text-[18px] text-[#6A3A3C] focus:ring-0 focus:outline-none">

            </div>

            <!-- Confirm Password -->
            <div class="mb-7">

                <label class="block text-[18px] font-medium text-[#6A3A3C] mb-2">
                    Confirm Password
                </label>

                <input id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="w-full h-[65px] rounded-[24px] border border-[#6A3A3C] bg-[#FDFAF9] px-5 text-[18px] text-[#6A3A3C] focus:ring-0 focus:outline-none">

            </div>

            <!-- Bottom -->
            <div class="flex items-center justify-between gap-4">

                <a href="{{ route('login') }}"
                    class="text-[18px] text-[#6A3A3C] hover:text-[#E65F5F] transition">

                    Sudah punya akun? Login

                </a>

                <button type="submit"
                    class="w-[200px] h-[65px] rounded-[24px] bg-[#E65F5F] border border-[#6A3A3C] text-white text-[24px] font-bold hover:bg-[#d94c4c] transition">

                    Daftar

                </button>

            </div>

        </form>

    </div>

</body>

</html>