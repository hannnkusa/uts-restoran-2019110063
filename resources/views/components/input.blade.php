@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-indigo-100 ext-gray-800 focus:border-indigo-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2']) !!}>
