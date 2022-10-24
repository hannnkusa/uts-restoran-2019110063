<x-guest-layout>
    <x-slot name="title">Reset Password</x-slot>
    <x-auth-page-left>
        <x-slot name="left">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex items-center justify-center">
                    <h1 class="my-12 text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Reset Password</h1>
                </div>
                <form class="mt-6" method="POST" action="{{ route('password.update') }}" novalidate>
                  @csrf

                  <!-- Password Reset Token -->
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">

                  <div>
                        <x-label for="email">Email Addres</x-label>
                        <x-input type="email" name="email" id="email" value="{{ old('email') ?? $request->email }}" placeholder="Your Email" required />
                        <x-auth-message name="email" />
                  </div>
                  <div class="mt-4">
                        <x-label for="password">Password</x-label>
                        <x-input type="password" name="password" id="password" placeholder="Your New Password" required autofocus />
                        <x-auth-message name="password" />
                  </div>
                  <div class="mt-4">
                        <x-label for="password_confirmation">Confirm Password</x-label>
                        <x-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your Confirmation Password" required />
                  </div>
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-gray-800 rounded-lg hover:bg-gray-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Reset Password
                  </button>
                </form>
              </div>
        </x-slot>
        <x-slot name="right">
            <x-auth-image />
        </x-slot>
    </x-auth-page-left>
</x-guest-layout>
