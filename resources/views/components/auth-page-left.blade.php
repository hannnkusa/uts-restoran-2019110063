<section class="flex flex-col items-center h-screen bg-indigo-100 md:flex-row ">
    <div class="flex w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 items-left justify-left lg:justify-center lg:flex-col">
      {{ $left }}
    </div>
    <div class="relative hidden w-full h-screen bg-indigo-400 lg:block md:w-1/3 lg:w-2/3">
      {{ $right }}
    </div>
</section>
