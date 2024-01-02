<x-base-layout>
    <div class="py-12">
        <h2 class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-10 font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galleries') }}
        </h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4">
            @forelse($galleries as $gallery)
                <div class="relative max-w-sm">
                    <img class="rounded-t-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 aspect-video object-cover w-full" src="{{ asset('https://raw.laravieira.me/'.$gallery->image) }}" alt="" />
                    <div class="p-2">
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $gallery->caption }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-3 flex flex-col gap-4 h-72 justify-center items-center">
                    <h3 class="text-3xl text-gray-400 font-bold dark:text-white">
                        {{ __('There are no galleries yet :/') }}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
</x-base-layout>
