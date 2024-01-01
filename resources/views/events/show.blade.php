<x-app-layout>
    <x-slot name="page_title">{{ __('EM | Events') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $event->name }}
            </h2>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <a href="{{ route('events.edit', $event->id) }}" class="flex items-center gap-2 transition-all bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-3 rounded-s-lg border-r">
                    {{ __('Edit') }}
                    <i class="fa-solid fa-edit"></i>
                </a>
                <a href="{{ route('events.index') }}" class="flex items-center gap-2 transition-all bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3  rounded-e-lg">
                    {{ __('Back') }}
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 px-4 space-y-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap sm:flex-nowrap gap-4">
            <div class="bg-white w-full sm:basis-3/5 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                <img class="rounded-t-lg aspect-video object-cover w-full h-full" src="{{ asset($event->image) }}" alt="" />
            </div>
            <div class="relative sm:basis-2/5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <div class="flex gap-4 items-end">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->name }}</h5>
                        <h6 class="mb-2.5 text-sm font-bold tracking-tight text-gray-600 dark:text-white">{{ $event->tickets }} tickets</h6>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $event->start_date }}</span>
                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $event->end_date }}</span>
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->user->name }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->description }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->address }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->city->name }}, {{ $event->country->name }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        @foreach($event->tags as $tag)
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                {{ $tag->name }}
                            </span>
                        @endforeach</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8">
            <div class="p-5 relative w-full flex justify-between items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('Delete Event') }}</h3>
                <button type="submit" form="event-delete-{{ $event->id }}" class="flex items-center gap-2 transition-all bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-3 rounded-lg">
                    {{ __('Delete') }}
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
            <form action="{{ route('events.destroy', $event) }}" method="post" id="event-delete-{{ $event->id }}">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-app-layout>