<x-guest-layout>

    <div class="min-h-screen bg-[#FFF6F8] flex items-center justify-center relative overflow-hidden">

        <!-- background blob -->
        <div class="absolute top-[-80px] left-[-80px] w-[300px] h-[300px] bg-pink-200 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute bottom-[-100px] right-[-100px] w-[350px] h-[350px] bg-rose-200 rounded-full blur-3xl opacity-40"></div>

        <!-- main card -->
        <div class="w-[1100px] h-[650px] bg-white rounded-[45px] shadow-2xl flex overflow-hidden z-10">

            <!-- LEFT SIDE -->
            <div class="w-1/2 bg-gradient-to-b from-pink-200 to-rose-300 relative flex flex-col justify-center items-center p-12">

                <!-- floating strawberries -->
                <div class="absolute top-10 left-10 text-4xl rotate-[-15deg]">🍓</div>
                <div class="absolute bottom-12 right-14 text-5xl rotate-[10deg]">🍓</div>
                <div class="absolute top-32 right-20 text-3xl">✨</div>

                <!-- circle illustration -->
                <div class="w-[280px] h-[280px] bg-white/40 backdrop-blur-md rounded-full flex items-center justify-center shadow-lg mb-8 border border-white/30">
                    <div class="text-[120px]">🍓</div>
                </div>

                <h1 class="text-5xl font-black text-white drop-shadow-md mb-4 tracking-wide">
                    StudentNeeds
                </h1>

                <p class="text-white text-center text-lg leading-relaxed max-w-[350px]">
                    Belajar lebih rapi,
                    tugas lebih teratur,
                    dan sekolah jadi lebih seru ✨
                </p>

            </div>

            <!-- RIGHT SIDE -->
            <div class="w-1/2 flex items-center justify-center bg-[#FFFDFD]">

                <form method="POST"
                      action="{{ route('login') }}"
                      class="w-[78%]">

                    @csrf

                    <h2 class="text-4xl font-black text-gray-800 mb-2">
                        Welcome Back!
                    </h2>

                    <p class="text-gray-400 mb-10 text-lg">
                        Login ke akun kamu dulu 🍓
                    </p>

                    <!-- EMAIL -->
                    <div class="mb-5">

                        <x-input-label
                            for="email"
</x-guest-layout>