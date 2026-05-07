<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StudentNeeds Login</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF7FA] min-h-screen flex items-center justify-center overflow-hidden relative">

    <!-- background -->
    <div class="absolute top-[-120px] left-[-120px] w-[420px] h-[420px] bg-pink-200 rounded-full blur-3xl opacity-40"></div>

    <div class="absolute bottom-[-120px] right-[-120px] w-[420px] h-[420px] bg-rose-200 rounded-full blur-3xl opacity-40"></div>

    <!-- CARD -->
    <div class="w-[1200px] h-[700px] bg-white rounded-[55px] shadow-[0_20px_80px_rgba(255,182,193,0.35)] flex overflow-hidden relative z-10">

        <!-- LEFT -->
        <div class="w-1/2 bg-gradient-to-br from-pink-300 via-rose-300 to-pink-400 relative flex flex-col items-center justify-center p-16">

            <!-- floating -->
            <div class="absolute top-10 left-10 text-5xl">🍓</div>
            <div class="absolute bottom-10 right-10 text-4xl">✨</div>

            <!-- circle -->
            <div class="w-[340px] h-[340px] rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center mb-10">

                <div class="text-[150px]">
                    🍓
                </div>

            </div>

            <h1 class="text-6xl font-black text-white mb-5">
                StudentNeeds
            </h1>

            <p class="text-white text-center text-xl max-w-[350px] leading-relaxed">
                Belajar lebih rapi,
                tugas lebih teratur,
                dan sekolah jadi lebih seru ✨
            </p>

        </div>

        <!-- RIGHT -->
        <div class="w-1/2 flex items-center justify-center bg-[#FFFDFD]">

            <form
                method="POST"
                action="{{ route('login') }}"
                class="w-[72%]"
            >

                @csrf

                <h2 class="text-5xl font-black text-gray-800 mb-3">
                    Welcome Back!
                </h2>

                <p class="text-gray-400 text-lg mb-10">
                    Login ke akun kamu dulu 🍓
                </p>

                <!-- EMAIL -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-semibold mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full bg-pink-50 border-0 rounded-3xl p-5 text-lg focus:ring-2 focus:ring-pink-300 outline-none"
                        required
                    >

                </div>

                <!-- PASSWORD -->
                <div class="mb-6">

                    <label class="block text-gray-700 font-semibold mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="w-full bg-pink-50 border-0 rounded-3xl p-5 text-lg focus:ring-2 focus:ring-pink-300 outline-none"
                        required
                    >

                </div>

                <!-- remember -->
                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-2 text-sm text-gray-500">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded text-pink-400"
                        >

                        Remember me

                    </label>

                    <a
                        href="{{ route('password.request') }}"
                        class="text-pink-500 hover:underline text-sm font-medium"
                    >
                        Forgot Password?
                    </a>

                </div>

                <!-- button -->
                <button
                    class="w-full bg-gradient-to-r from-pink-400 to-rose-400 text-white py-5 rounded-3xl text-lg font-bold hover:scale-[1.02] transition-all duration-300 shadow-lg"
                >
                    Log In
                </button>

                <!-- register -->
                <p class="text-center text-gray-400 mt-8">

                    Don't have an account?

                    <a
                        href="{{ route('register') }}"
                        class="text-pink-500 font-bold hover:underline"
                    >
                        Register
                    </a>

                </p>

            </form>

        </div>

    </div>

</body>
</html>