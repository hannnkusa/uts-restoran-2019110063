<x-guest-layout>
    <x-slot name="title">Login</x-slot>
    <x-auth-page-right>
        <x-slot name="left">
            <x-auth-image/>
        </x-slot>
        <x-slot name="right">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex items-center justify-center">
                    <h1 class="my-12 text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Sign In</h1>
                </div>
                <!-- <x-auth-social /> -->
                <form class="mt-6" method="POST" action="{{ route('login') }}" novalidate>
                  @csrf
                  <div>
                    <x-label for="email">Email</x-label>
                    <x-input type="email" name="email" id="email" :value="old('email')" placeholder="Your Email " required autofocus />
                    <x-auth-message name="email" />
                  </div>
                  <div class="mt-4">
                    <x-label for="password">Password</x-label>
                    <x-input type="password" name="password" id="password" placeholder="Your Password" required />
                    <x-auth-message name="password" />
                  </div>
                  <div class="mt-2 text-right">
                    <a href="{{ route('password.request') }}" class="text-sm font-semibold leading-relaxed text-indigo-600 hover:text-indigo-900 focus:text-indigo-900">Forgot Password?</a>
                  </div>
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-indigo-800 rounded-lg hover:bg-indigo-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Log In
                  </button>
                </form>
                <p class="mt-8 text-center text-indigo-500">Don't have an account? <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-900">Sign Up here</a></p>
            </div>
        </x-slot>
    </x-auth-page-right>
</x-guest-layout>


