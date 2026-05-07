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

<body class="bg-[#FEF1F2] w-screen h-screen overflow-hidden relative font-[Poppins]">

    <!-- RIGHT WHITE AREA -->
    <div class="absolute right-0 top-0 w-[780px] h-screen bg-white"></div>

    <!-- LEFT LOGO -->
    <div class="absolute left-[192px] top-[82px]">

        <!-- IMAGE -->
        <img
            src="{{ asset('images/maskotstroberry.png') }}"
            class="w-[266px] h-[266px] object-contain"
        >

        <!-- TITLE -->
        <div class="flex mt-[-10px] ml-[0px]">

            <h1 class="font-['Baloo_2'] font-bold text-[48px] text-[#E65F5F] leading-[77px]">
                Student
            </h1>

            <h1 class="font-['Baloo_2'] font-bold text-[48px] text-[#6A3A3C] leading-[77px] ml-[10px]">
                Needs
            </h1>

        </div>

    </div>

    <!-- RIGHT CONTENT -->
    <div class="absolute left-[788px] top-[130px]">

        <!-- TITLE -->
        <h2 class="font-['Baloo_2'] font-bold text-[64px] leading-[103px] text-[#E65F5F]">
            Welcome back!
        </h2>

        <!-- SUBTITLE -->
        <p class="font-medium text-[24px] leading-[36px] text-[#6A3A3C] mt-[-8px] mb-[70px]">
            Login to continue to StudentNeeds
        </p>

        <!-- EMAIL -->
        <div class="mb-[40px]">

            <label class="block text-[20px] font-medium text-[#6A3A3C] mb-[14px]">
                Email
            </label>

            <input
                type="email"
                name="email"

                class="w-[589px] h-[80px] bg-[#FDFAF9] border border-[#6A3A3C] rounded-[29px] px-[28px] text-[20px] outline-none"
            >

        </div>

        <!-- PASSWORD -->
        <div class="mb-[140px]">

            <label class="block text-[20px] font-medium text-[#6A3A3C] mb-[14px]">
                Password
            </label>

            <input
                type="password"
                name="password"

                class="w-[589px] h-[80px] bg-[#FDFAF9] border border-[#6A3A3C] rounded-[29px] px-[28px] text-[20px] outline-none"
            >

        </div>

        <!-- LOGIN BUTTON -->
        <button
            class="w-[589px] h-[80px] bg-[#E65F5F] border border-[#6A3A3C] rounded-[29px]
            font-['Baloo_2'] font-bold text-[40px] leading-[64px] text-white"
        >
            Login
        </button>

        <!-- REGISTER -->
        <p class="text-[24px] leading-[36px] font-medium text-[#6A3A3C] mt-[42px] ml-[85px]">

            Belum punya akun?

            <a
                href="{{ route('register') }}"
                class="text-[#E65F5F]"
            >
                Daftar di sini
            </a>

        </p>

    </div>

</body>
</html>