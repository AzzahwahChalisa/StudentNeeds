<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StudentNeeds Login</title>

    @vite('resources/css/app.css')

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FEF1F2] min-h-screen font-[Poppins]">

    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- LEFT BRAND -->
        <div class="relative lg:w-[45%] w-full flex justify-center">
            <!-- LEFT STICKERS (responsive) -->
            <img
                src="{{ asset('images/ikonstroberry.png') }}"
                alt="Sticker"
                class="absolute left-8 top-10 w-16 rotate-[-10deg] hidden sm:block"
            >
            <img
                src="{{ asset('images/ikonstroberry.png') }}"
                alt="Sticker"
                class="absolute right-6 bottom-10 w-14 rotate-[15deg] hidden sm:block"
            >

            <div class="w-full flex flex-col items-center justify-center px-6 py-10 lg:py-0">
                <img
                    src="{{ asset('images/maskotstroberry.png') }}"
                    alt="Mascot"
                    class="w-[240px] sm:w-[300px] object-contain"
                >

                <div class="flex items-center mt-[-6px]">
                    <h1 class="font-['Baloo_2'] text-4xl sm:text-[52px] font-bold text-[#E65F5F]">
                        Student
                    </h1>
                    <h1 class="font-['Baloo_2'] text-4xl sm:text-[52px] font-bold text-[#6A3A3C] ml-3">
                        Needs
                    </h1>
                </div>
            </div>
        </div>

        <!-- RIGHT FORM -->
        <div class="lg:w-[55%] w-full bg-white px-6 sm:px-10 py-10 lg:py-16 flex items-center justify-center">
            <div class="w-full max-w-[560px]">
                <h2 class="font-['Baloo_2'] text-[40px] sm:text-[64px] font-bold text-[#E65F5F] leading-[1.1]">
                    Welcome back!
                </h2>

                <p class="text-[16px] sm:text-[24px] text-[#6A3A3C] font-medium mt-3 mb-8">
                    Login to continue to StudentNeeds
                </p>

                <form method="POST" action="{{ route('login') }}" class="w-full">
                    @csrf

                    <!-- EMAIL -->
                    <div class="mb-6">
                        <label class="block text-[16px] sm:text-[20px] text-[#6A3A3C] font-medium mb-3">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            class="w-full h-[56px] sm:h-[72px] bg-[#FDFAF9] border border-[#6A3A3C] rounded-[29px] px-6 sm:px-[28px] text-[16px] sm:text-[20px] outline-none"
                        >

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-3">
                            <label class="text-[16px] sm:text-[20px] text-[#6A3A3C] font-medium">
                                Password
                            </label>

                            <a
                                href="{{ route('password.request') }}"
                                class="text-[#E65F5F] text-sm sm:text-base hover:underline"
                            >
                                Forgot password?
                            </a>
                        </div>

                        <div class="relative">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                class="w-full h-[56px] sm:h-[72px] bg-[#FDFAF9] border border-[#6A3A3C] rounded-[29px] px-6 sm:px-[28px] text-[16px] sm:text-[20px] outline-none pr-16"
                            >

                            <button
                                type="button"
                                id="togglePassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#6A3A3C]"
                                aria-label="Show password"
                                title="Show/Hide password"
                            >
                                <!-- simple eye icon -->
                                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- REMEMBER + SUBMIT -->
                    <div class="flex items-center justify-between mb-8">
                        <label class="flex items-center gap-2 text-sm sm:text-base text-[#6A3A3C]">
                            <input type="checkbox" name="remember" class="h-4 w-4 accent-[#E65F5F]" {{ old('remember') ? 'checked' : '' }}>
                            <span>Remember me</span>
                        </label>
                    </div>

                    <!-- STATUS -->
                    @if (session('status'))
                        <div class="mb-4 p-3 rounded-lg bg-green-50 text-green-700 text-sm">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button
                        type="submit"
                        class="w-full h-[64px] sm:h-[80px] bg-[#E65F5F] border border-[#6A3A3C] rounded-[29px] text-white font-['Baloo_2'] text-[32px] sm:text-[40px] font-bold"
                    >
                        Login
                    </button>
                </form>

                <!-- REGISTER -->
                <p class="text-[16px] sm:text-[22px] text-[#6A3A3C] font-medium mt-6">
                    Belum punya akun?
                    <a
                        href="{{ route('register') }}"
                        class="text-[#E65F5F] font-semibold hover:underline"
                    >
                        Daftar di sini
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const toggle = document.getElementById('togglePassword');
            const input = document.getElementById('password');
            if (!toggle || !input) return;

            toggle.addEventListener('click', function () {
                const isPassword = input.type === 'password';
                input.type = isPassword ? 'text' : 'password';
            });
        })();
    </script>

</body>
</html>
