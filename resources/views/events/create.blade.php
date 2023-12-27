<x-app-layout>
    <x-slot name="page_title">{{ __('EM | New Event') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('New Event') }}
            </h2>
            <a href="{{ route('events.index') }}" class="flex items-center gap-2 transition-all duration-1000 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-3 rounded">
                {{ __('Back') }}
                <i class="rotate-180 fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('events.store') }}"
                      method="POST"
                      enctype="multipart/form-data"
                      class="p-4 rounded-md"
                      x-data="{
                        country: null,
                        city: null,
                        cities: [],
                        onCountryChange(event) {
                            axios.get('/api/countries/' + event.target.value)
                                .then(response => {
                                    this.cities = response.data.cities;
                                });
                        }
                      }">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="name" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Name') }}
                        </label>
                        <input type="text"
                               name="name"
                               id="name"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="country_id" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Select a country') }}
                        </label>
                        <select name="country_id"
                                id="country_id"
                                x-model="country"
                                x-on:change="onCountryChange($event)"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option value="">{{ __('Select a country') }}</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="city_id" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Select a city') }}
                        </label>
                        <select name="city_id"
                                id="city_id"
                                x-model="city"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option value="">{{ __('Select a city') }}</option>
                            <template x-for="city in cities" :key="city.id">
                                <option x-bind:value="city.id" x-text="city.name"></option>
                            </template>
                        </select>
                        @error('city_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="address" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Address') }}
                        </label>
                        <input type="text"
                               name="address"
                               id="address"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('address')
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
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="start_date" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Start Date') }}
                        </label>
                        <input type="datetime-local"
                               name="start_date"
                               id="start_date"
                               class="block dark:[color-scheme:dark] w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('start_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="end_date" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('End Date') }}
                        </label>
                        <input type="datetime-local"
                               name="end_date"
                               id="end_date"
                               class="block dark:[color-scheme:dark] w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('end_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="tickets" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('tickets') }}
                        </label>
                        <input type="number"
                               name="tickets"
                               id="tickets"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"/>
                        @error('tickets')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="description" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Description') }}
                        </label>
                        <textarea name="description"
                                  id="description"
                                  cols="30"
                                  rows="10"
                                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <label for="tags" class="block self-center text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ __('Tags') }}
                        </label>
                        <ul class="items-center flex-wrap w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            @foreach($tags as $tag)
                                <li class="dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="tag-{{ $tag->id }}" name="tags[]" type="checkbox" value="{{ $tag->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="tag-{{ $tag->id }}" class="select-none w-full py-3 pr-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $tag->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        @error('tags')
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
