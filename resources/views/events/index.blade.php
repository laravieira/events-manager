<x-app-layout>
    <x-slot name="page_title">{{ __('EM | Events') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Events') }}
            </h2>
            <a href="{{ route('events.create') }}" class="flex items-center gap-2 transition-all duration-1000 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-3 rounded">
                {{ __('New') }}
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left">{{ __('Name') }}</th>
                                <th class="text-left">{{ __('Description') }}</th>
                                <th class="text-left">{{ __('Start') }}</th>
                                <th class="text-left">{{ __('End') }}</th>
                                <th class="text-left">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td class="border px-4 py-2">{{ $event->name }}</td>
                                    <td class="border px-4 py-2">{{ $event->country->name }}</td>
                                    <td class="border px-4 py-2">{{ $event->city->name }}</td>
                                    <td class="border px-4 py-2">{{ $event->address }}</td>
                                    <td class="border px-4 py-2"><img src="{{ $event->image }}" alt="Alt"/></td>
                                    <td class="border px-4 py-2">{{ $event->description }}</td>
                                    <td class="border px-4 py-2">{{ $event->start_date }}</td>
                                    <td class="border px-4 py-2">{{ $event->end_date }}</td>
{{--                                    <td class="border px-4 py-2">{{ $events->tags.join(', ') }}</td>--}}
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('events.show', $event->id) }}" class="flex items-center gap-2 transition-all duration-1000 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded">
                                            {{ __('Show') }}
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('events.edit', $event->id) }}" class="flex items-center gap-2 transition-all duration-1000 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-3 rounded">
                                            {{ __('Edit') }}
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center gap-2 transition-all duration-1000 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-3 rounded">
                                                {{ __('Delete') }}
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
