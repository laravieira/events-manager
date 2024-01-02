<x-app-layout>
    <h2 class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-20 font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Your Booked Events') }}
    </h2>
    <div class="py-12">
        <div class="overflow-x-scroll no-scrollbar">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-4">
                @forelse($booking as $event)
                    <div class="relative max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg aspect-video object-cover w-full" src="{{ asset($event->image) }}" alt="" />
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
                        <div class="inline-flex rounded-md shadow-sm absolute top-4 right-4" role="group">
                            <a href="{{ route('events.show', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <button type="submit" form="event-delete-{{ $event->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <form action="{{ route('events.destroy', $event) }}" method="post" id="event-delete-{{ $event->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 flex flex-col gap-4 h-16 justify-center items-center">
                        <h3 class="text-3xl text-gray-400 font-bold dark:text-white">
                            {{ __('There are no events yet :/') }}
                        </h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <h2 class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-20 font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Your Saved Events') }}
    </h2>
    <div class="py-12">
        <div class="overflow-x-scroll no-scrollbar">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4">
                @forelse($saved as $event)
                    <div class="relative max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg aspect-video object-cover w-full" src="{{ asset($event->image) }}" alt="" />
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
                        <div class="inline-flex rounded-md shadow-sm absolute top-4 right-4" role="group">
                            <a href="{{ route('events.show', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <button type="submit" form="event-delete-{{ $event->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <form action="{{ route('events.destroy', $event) }}" method="post" id="event-delete-{{ $event->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 flex flex-col gap-4 h-16 justify-center items-center">
                        <h3 class="text-3xl text-gray-400 font-bold dark:text-white">
                            {{ __('There are no events yet :/') }}
                        </h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <h2 class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-20 font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Your Liked Events') }}
    </h2>
    <div class="py-12">
        <div class="overflow-x-scroll no-scrollbar">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4">
                @forelse($liked as $event)
                    <div class="relative max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="rounded-t-lg aspect-video object-cover w-full" src="{{ asset($event->image) }}" alt="" />
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
                        <div class="inline-flex rounded-md shadow-sm absolute top-4 right-4" role="group">
                            <a href="{{ route('events.show', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('events.edit', $event->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-edit"></i>
                            </a>
                            <button type="submit" form="event-delete-{{ $event->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <form action="{{ route('events.destroy', $event) }}" method="post" id="event-delete-{{ $event->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 flex flex-col gap-4 h-16 justify-center items-center">
                        <h3 class="text-3xl text-gray-400 font-bold dark:text-white">
                            {{ __('There are no events yet :/') }}
                        </h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
