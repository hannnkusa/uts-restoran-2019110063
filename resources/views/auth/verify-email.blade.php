<x-guest-layout>
    <x-slot name="title">Verify Email</x-slot>
    <x-auth-page-left>
        <x-slot name="left">
            <div class="w-full py-32 lg:py-6 lg:h-100">
                <div class="flex flex-col items-center justify-center space-y-8">
                    <img src="{{ asset('img/icon/mailing.svg') }}" class="w-36 h-36" alt="">
                    <h1 class="text-2xl font-semibold tracking-tighter text-indigo-800 sm:text-3xl title-font">Verify Email</h1>
                    <div class="text-base text-indigo-600 text-center">
                        An email has been sent to {{ Auth::user()->email }}. If you have not received the email after a few minutes, please check your spam folder.
                    </div>
                </div>
                <form method="POST" action="{{ route('verification.send') }}" novalidate>
                  @csrf
                  <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-indigo-800 rounded-lg hover:bg-indigo-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                    Resend Email
                  </button>
                </form>
                <a class="block w-full px-4 py-3 mt-6 font-semibold text-indigo-800 transition duration-500 ease-in-out transform bg-white rounded-lg border border-indigo-800 hover:border-indigo-900 hover:bg-indigo-900 hover:text-white focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 text-center">Contact Support</a>
              </div>
        </x-slot>
        <x-slot name="right">
            <x-auth-image />
        </x-slot>
    </x-auth-page-left>
</x-guest-layout>
