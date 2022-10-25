<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block w-full px-4 py-3 mt-6 font-semibold text-white transition duration-500 ease-in-out transform bg-gray-800 rounded-lg hover:bg-gray-900 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2']) }}>
    {{ $slot }}
</button>
