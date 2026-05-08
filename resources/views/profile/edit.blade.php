<x-app-layout>

    <style>
        nav {
            display: none !important;
        }
    </style>

    <div class="min-h-screen bg-[#FEF1F2] py-10 px-6">

        <div class="max-w-7xl mx-auto">

            <!-- Custom Navbar -->
            <div class="bg-[#FEF9FA] border border-[#6A3A3C] rounded-[29px] px-8 py-5 flex justify-between items-center">

                <!-- Left -->
                <div class="flex items-center gap-10">

                    <a href="{{ route('dashboard') }}"
                        class="text-[24px] font-semibold text-[#6A3A3C] hover:text-[#E65F5F] transition">

                        Dashboard

                    </a>

                </div>

                <!-- Right -->
                <div class="relative group">

                    <button
                        class="flex items-center gap-2 px-5 py-3 rounded-[20px] border border-[#6A3A3C] bg-[#FEF1F2] text-[#6A3A3C] font-semibold hover:bg-[#ffdfe3] transition">

                        {{ Auth()->user()?->name }}

                        <svg class="w-4 h-4 fill-current"
                            viewBox="0 0 20 20">

                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />

                        </svg>

                    </button>

                    <!-- Dropdown -->
                    <div
                        class="absolute right-0 mt-2 w-48 bg-white border border-[#6A3A3C] rounded-[20px] shadow-lg hidden group-hover:block z-50">

                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-3 text-[#6A3A3C] hover:bg-[#FEF1F2] rounded-t-[20px]">

                            Profile

                        </a>

                        <form method="POST"
                            action="{{ route('logout') }}">

                            @csrf

                            <button type="submit"
                                class="w-full text-left px-4 py-3 text-[#6A3A3C] hover:bg-[#FEF1F2] rounded-b-[20px]">

                                Logout

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Header -->
            <div class="mt-10 bg-[#FEF9FA] border border-[#6A3A3C] rounded-[29px] p-6 flex justify-between items-center">

                <h1 class="text-[36px] font-bold text-[#6A3A3C]">
                    Profile
                </h1>

                <div class="flex items-center gap-4">

                    <img src="{{ asset('images/ikonstroberry.png') }}"
                        class="w-24 h-24 rounded-full object-cover">

                    <div>
                        <h2 class="text-[24px] font-bold text-[#E65F5F]">
                            Student
                        </h2>

                        <h2 class="text-[24px] font-bold text-[#6A3A3C] -mt-2">
                            Needs
                        </h2>
                    </div>

                </div>

            </div>

            <!-- Profile Information -->
            <div class="mt-10 bg-[#FEF9FA] border border-[#6A3A3C] rounded-[29px] p-8">

                @include('profile.partials.update-profile-information-form')

            </div>

            <!-- Delete Account -->
            <div class="mt-10 bg-[#FEF9FA] border border-[#6A3A3C] rounded-[29px] p-8">

                @include('profile.partials.delete-user-form')

            </div>

        </div>

    </div>

</x-app-layout>