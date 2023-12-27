<x-app-layout>
    <x-slot name="page_title">{{ __('EM | Gallery') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Gallery') }}
            </h2>
            <a href="{{ route('gallery.create') }}" class="flex items-center gap-2 transition-all duration-1000 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-3 rounded">
                {{ __('New') }}
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4">
            @forelse($galleries as $gallery)
                <div class="relative max-w-sm">
                    <img class="rounded-t-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 aspect-video object-cover w-full" src="{{ asset('storage/'.$gallery->image) }}" alt="" />
                    <div class="p-2">
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $gallery->caption }}</p>
                    </div>
                    <div class="inline-flex rounded-md shadow-sm absolute top-4 right-4" role="group">
                        <a href="{{ route('gallery.edit', $gallery) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <button type="submit" form="gallery-delete-{{ $gallery->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <form action="{{ route('gallery.destroy', $gallery) }}" method="post" id="gallery-delete-{{ $gallery->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-3 flex flex-col gap-4 h-72 justify-center items-center">
                    <h3 class="text-3xl text-gray-400 font-bold dark:text-white">
                        {{ __('There are no galleries yet :/') }}
                    </h3>
                    <p class="mb-3 text-gray-300 dark:text-gray-600">
                        {{ __('Click on the new button and create your first event.') }}
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
