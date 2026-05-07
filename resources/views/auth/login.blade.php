<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StudentNeeds</title>

    @vite('resources/css/app.css')

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FEF1F2] min-h-screen overflow-hidden flex items-center justify-center font-[Poppins] relative">

    <!-- STICKER -->
    <img
        src="{{ asset('images/ikonstroberry.png') }}"
        class="absolute top-[45px] left-[70px] w-[75px] rotate-[-10deg] opacity-90"
    >

    <img
        src="{{ asset('images/ikonstroberry.png') }}"
        class="absolute bottom-[40px] right-[70px] w-[65px] rotate-[12deg] opacity-80"
    >

    <!-- MAIN CONTAINER -->
    <div class="w-[1440px] h-[1024px] flex overflow-hidden">

        <!-- LEFT -->
        <div class="w-1/2 relative flex flex-col items-center justify-center">

            <!-- LOGO -->
            <div class="absolute top-[110px] flex flex-col items-center">

                <img
                    src="{{ asset('images/ikonstroberry.png') }}"
                    class="w-[90px] mb-5"
                >

                <div class="flex gap-2">

                    <h1 class="text-[52px] leading-none font-bold font-['Baloo_2'] text-[#E65F5F]">
                        Student
                    </h1>

                    <h1 class="text-[52px] leading-none font-bold font-['Baloo_2'] text-[#6A3A3C]">
                        Needs
                    </h1>

                </div>

            </div>

            <!-- CHARACTER -->
            <div class="relative flex items-center justify-center">

                <!-- soft background -->
                <div class="absolute w-[420px] h-[420px] rounded-full bg-[#F8D5D8] opacity-60 blur-2xl"></div>

                <!-- mascot -->
                <img
                    src="{{ asset('images/maskotstroberry.png') }}"
                    class="relative w-[420px] z-10 drop-shadow-[0_15px_30px_rgba(0,0,0,0.10)]"
                >

            </div>

            <!-- QUOTE -->
            <p class="absolute bottom-[70px] text-[#8B6666] text-[18px] tracking-wide">
                organize your school life easier 🍓
            </p>

        </div>

        <!-- RIGHT -->
        <div class="w-1/2 bg-white flex items-center relative">

            <!-- floating sticker -->
            <img
                src="{{ asset('images/ikonstroberry.png') }}"
                class="absolute top-[90px] right-[110px] w-[55px] rotate-[15deg] opacity-80"
            >

            <!-- FORM -->
            <div class="w-[590px] ml-[85px]">

                <!-- TITLE -->
                <h2 class="text-[72px] leading-[80px] font-bold font-['Baloo_2'] text-[#E65F5F] mb-4">
                    Welcome back!
                </h2>

                <!-- SUBTITLE -->
                <p class="text-[24px] text-[#6A3A3C] font-medium mb-[70px]">
                    Login to continue to StudentNeeds
                </p>

                <!-- EMAIL -->
                <div class="mb-[40px]">

                    <label class="block text-[22px] text-[#6A3A3C] font-medium mb-4">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"

                        class="w-full h-[82px] rounded-[28px] border border-[#D8B7B7] bg-[#FFFDFD] px-7 text-[20px] outline-none focus:border-[#E65F5F] focus:ring-2 focus:ring-pink-100 transition-all"
                    >

                </div>

                <!-- PASSWORD -->
                <div class="mb-[65px]">

                    <label class="block text-[22px] text-[#6A3A3C] font-medium mb-4">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"

                        class="w-full h-[82px] rounded-[28px] border border-[#D8B7B7] bg-[#FFFDFD] px-7 text-[20px] outline-none focus:border-[#E65F5F] focus:ring-2 focus:ring-pink-100 transition-all"
                    >

                </div>

                <!-- BUTTON -->
                <button
                    class="w-full h-[82px] rounded-[28px] bg-[#E65F5F] text-white text-[38px] font-bold font-['Baloo_2'] hover:opacity-90 transition-all duration-300 shadow-[0_8px_20px_rgba(230,95,95,0.15)]"
                >
                    Login
                </button>

                <!-- REGISTER -->
                <p class="text-center text-[18px] text-[#6A3A3C] mt-[30px]">

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

</body>
</html>