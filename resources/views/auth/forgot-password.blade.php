<x-guest-layout>
    <x-slot name="title">Forgot Password</x-slot>
    <x-auth-page-right>
        <x-slot name="left">
            <x-auth-image/>
        </x-slot>
        <x-slot name="right">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex flex-col items-center justify-center space-y-8">
                    <img src="{{ asset('img/icon/lock-forgot-password.svg') }}" class="w-36 h-36" alt="">
                    <h1 class="text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Forgot Password</h1>
                    <div class="text-base text-indigo-600 text-center">
                        Enter the email associated with your account and we'll send an email with instructions to reset your password.
                    </div>
                </div>
                <form class="mt-8" method="POST" action="{{ route('password.email') }}" novalidate>
                  @csrf
                  <div>
                    <x-label for="email">Email Address</x-label>
                    <x-input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email " required autofocus />
                  </div>
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-indigo-800 rounded-lg hover:bg-indigo-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Send Email
                  </button>
                </form>
                <p class="mt-8 text-center text-indigo-500">Already remembered your account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-900">Sign In here</a></p>
              </div>
        </x-slot>
    </x-auth-page-right>
</x-guest-layout>
