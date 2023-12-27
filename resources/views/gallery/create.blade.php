<x-app-layout>
    <x-slot name="page_title">{{ __('EM | New Gallery') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('New Gallery') }}
            </h2>
            <a href="{{ route('gallery.index') }}" class="flex items-center gap-2 transition-all duration-1000 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-3 rounded">
                {{ __('Back') }}
                <i class="rotate-180 fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('gallery.store') }}"
                      method="POST"
                      enctype="multipart/form-data"
                      class="p-4 rounded-md">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="caption" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Caption') }}
                        </label>
                        <input type="text"
                               name="caption"
                               id="caption"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('caption')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2" x-data="{
                        file: null,
                        onFileChange(event) {
                            this.file = event.target.files.item(0);
                        }
                    }">
                        <label for="image" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Image') }}
                        </label>
                        <input type="file"
                               name="image"
                               id="image"
                               accept="image/*"
                                 x-on:change="onFileChange($event)"
                               class="hidden w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        <div class="flex justify-stretch">
                            <label x-show="!file" for="image" class="flex justify-between items-center gap-2 transition-all duration-1000 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                {{ __('Upload Image') }}
                                <i class="fas fa-upload text-gray-400"></i>
                            </label>
                            <label x-show="file" for="image" class="flex justify-between items-center gap-2 transition-all duration-1000 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                <span x-text="file?.name" class="truncate"></span>
                                <i class="fas fa-check text-green-700"></i>
                            </label>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                            class="w-full px-4 py-2 mt-2 text-base font-semibold text-center text-white transition-all ease-in-out transform bg-blue-500 border-blue-600 rounded-md hover:bg-blue-600 hover:border-blue-700 focus:outline-none focus:ring-blue-500 focus:ring-offset-blue-200 focus:ring-2">
                        {{ __('Create') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
