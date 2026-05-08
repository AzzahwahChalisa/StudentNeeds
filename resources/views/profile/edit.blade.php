<x-app-layout>
    <div class="min-h-screen bg-[#FEF1F2] py-10 px-6">

        <div class="max-w-7xl mx-auto">

            <!-- Header -->
            <div class="bg-[#FEF9FA] border border-[#6A3A3C] rounded-[29px] p-6 flex justify-between items-center">

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