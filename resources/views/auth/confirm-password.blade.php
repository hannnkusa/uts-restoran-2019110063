<x-guest-layout>
    <x-slot name="title">Confirm Password</x-slot>
    <x-auth-page-right>
        <x-slot name="left">
            <x-auth-image/>
        </x-slot>
        <x-slot name="right">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex flex-col items-center justify-center space-y-8">
                    <img src="{{ asset('img/icon/lock-password.svg') }}" class="w-36 h-36" alt="">
                    <h1 class="text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Confirm Password</h1>
                    <div class="text-base text-indigo-600 text-center">
                        This is a secure area of the application. Please confirm your password before continuing.
                    </div>
                </div>
                <form class="mt-6" method="POST" action="{{ route('password.confirm') }}" novalidate>
                  @csrf
                  <div>
                    <x-label for="password">Password</x-label>
                    <x-input type="password" name="password" id="password" placeholder="Your Password" required autofocus />
                    <x-auth-message name="password" />
                  </div>
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-indigo-800 rounded-lg hover:bg-indigo-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Confirm
                  </button>
                </form>
              </div>
        </x-slot>
    </x-auth-page-right>
</x-guest-layout>
