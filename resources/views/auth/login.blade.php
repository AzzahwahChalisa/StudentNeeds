<x-guest-layout>

                <!-- PASSWORD -->
                <div class="mb-6">

                    <x-input-label
                        for="password"
                        :value="__('Password')"
                        class="text-gray-600 font-semibold mb-2"
                    />

                    <x-text-input
                        id="password"
                        class="block w-full rounded-3xl border-0 bg-pink-50 p-5 focus:ring-pink-300 shadow-sm text-lg"
                        type="password"
                        name="password"
                        required
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <!-- remember -->
                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-pink-300 text-pink-400 focus:ring-pink-300"
                        >
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-sm text-pink-500 hover:text-pink-600 hover:underline font-semibold">
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <!-- BUTTON -->
                <button
                    class="w-full bg-gradient-to-r from-pink-400 to-rose-400 hover:scale-[1.02] hover:shadow-2xl transition-all duration-300 text-white py-5 rounded-3xl font-bold text-lg"
                >
                    Log In
                </button>

                <!-- REGISTER -->
                <p class="text-center text-gray-400 mt-8 text-sm">
                    Don't have an account?

                    <a href="{{ route('register') }}"
                       class="text-pink-500 font-bold hover:underline ml-1">
                        Register
                    </a>
                </p>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>