<x-guest-layout>
    <x-slot name="title">Register</x-slot>
    <x-auth-page-left>
        <x-slot name="left">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex items-center justify-center">
                    <h1 class="my-12 text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Sign Up</h1>
                </div>
                <form class="mt-6" method="POST" action="{{ route('register') }}" novalidate>
                  @csrf
                  <div>
                    <x-label for="name">Name</x-label>
                    <x-input type="name" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus />
                    <x-auth-message name="name" />
                  </div>
                  <div class="mt-4">
                    <x-label for="email">Email Address</x-label>
                    <x-input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" required />
                    <x-auth-message name="email" />
                  </div>
                  <div class="mt-4">
                    <x-label for="password">Password</x-label>
                    <x-input type="password" name="password" id="password" placeholder="Your Password" required />
                    <x-auth-message name="password" />
                </div>
                  <div class="mt-4">
                    <x-label for="password_confirmation">Confirm Password</x-label>
                    <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your Confirmation Password" required />
                    <x-auth-message name="password_confirmation" />
                </div>
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-indigo-800 rounded-lg hover:bg-indigo-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Register
                  </button>
                </form>
                <p class="mt-8 text-center text-indigo-500">Already have an account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-900">Sign In here</a></p>
            </div>
        </x-slot>
        <x-slot name="right">
            <x-auth-image />
        </x-slot>
    </x-auth-page-left>
</x-guest-layout>
