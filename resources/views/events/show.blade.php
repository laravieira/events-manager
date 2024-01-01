<x-app-layout>
    <x-slot name="page_title">{{ __('EM | Events') }}</x-slot>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $event->name }}
            </h2>
            @auth
                <div class="inline-flex rounded-md shadow-sm" role="group" x-data="{
                    liked: @js($liked),
                    saved: @js($saved),
                    joined: @js($joined),
                    onLike() {
                        axios.get('/api/like/{{ $event->id  }}').then(response => {
                            this.liked = response.data;
                        }).catch(console.error);
                    },
                    onSave() {
                        axios.get('/api/save/{{ $event->id  }}').then(response => {
                            this.saved = response.data;
                        }).catch(console.error);
                    },
                    onJoin() {
                        axios.get('/api/booking/{{ $event->id  }}').then(response => {
                            this.joined = response.data;
                        }).catch(console.error);
                    }
                }">
                    <button type="button"
                            class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white"
                            @click="onLike"
                            :class="liked && 'bg-red-500 hover:bg-red-600'">
                        <span x-text="liked ? @js(__('Deslike')) : @js(__('Like'))"></span>
                        <i class="fa-solid fa-heart"></i>
                    </button>
                    <button type="button"
                            class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white"
                            @click="onSave"
                            :class="saved && 'bg-red-500 hover:bg-red-600'">
                        <span x-text="saved ? @js(__('Unsave')) : @js(__('Save'))"></span>
                        <i class="fa-solid fa-bookmark"></i>
                    <button type="button"
                            class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-l border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white"
                            @click="onJoin"
                            :class="joined && 'bg-red-500 hover:bg-red-600'">
                        <span x-text="joined ? @js(__('Leave')) : @js(__('Join'))"></span>
                        <i class="fa-solid fa-user-plus"></i>
                    </button>
                    @if($event->user->id === auth()->user()->id)
                        <a href="{{ route('events.edit', $event->id) }}" class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-l border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            {{ __('Edit') }}
                            <i class="fa-solid fa-edit"></i>
                        </a>
                    @endif
                    <a href="{{ back()->getTargetUrl() }}" class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-l border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        {{ __('Back') }}
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
            @else
                <a href="{{ back()->getTargetUrl() }}" class="flex gap-3 items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    {{ __('Back') }}
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            @endauth
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
        @auth
            @if($event->user->id === auth()->user()->id)
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
            @endif
        @endauth
        <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8" x-data="{
            open: @js($errors->any()),
        }">
            <div class="p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full mb-5 flex justify-between items-center">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('Comments') }}</h3>
                    @auth
                        <button type="submit" class="flex items-center gap-2 transition-all bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded-lg" @click="open = !open">
                            {{ __('Add Comment') }}
                            <i class="fa-solid fa-comment"></i>
                        </button>
                    @endauth
                </div>
                <form action="{{ route('comments.store', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600" :class="open ? 'block' : 'hidden'">
                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                            <label for="comment" class="sr-only">{{ __('Your comment') }}</label>
                            <textarea name="content" id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                        </div>
                        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                {{ __('Post comment') }}
                            </button>
                            @error('comment')
                                <p class="ms-auto text-xs text-red-500 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </form>
                <ol class="relative mt-10 border-s border-gray-200 dark:border-gray-700">
                    @forelse($comments as $comment)
                        <li class="relative mb-10 ms-4 p-4 pt-2 space-y-1 hover:bg-gray-600/10 transition-all">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-3 -left-[1.4rem] border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <div class="flex items-end gap-2">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $comment->user->name }}</h3>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $comment->created_at }}</time>
                            </div>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ $comment->content }}</p>
                            @if($comment->user->id === auth()->id())
                                <div class="inline-flex rounded-md shadow-sm absolute top-2 right-2" role="group">
{{--                                    <a href="{{ route('comments.update', $comment->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-green-100 hover:text-green-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">--}}
{{--                                        <i class="fa-solid fa-edit"></i>--}}
{{--                                    </a>--}}
                                    <button type="submit" form="comment-delete-{{ $comment->id }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <form action="{{ route('comments.destroy', $comment->id) }}" method="post" id="comment-delete-{{ $comment->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            @endif
                        </li>
                    @empty
                        <li class="relative mb-10 ms-4">
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{ __('No comments yet') }}</p>
                        </li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</x-app-layout>
