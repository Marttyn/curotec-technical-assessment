<x-layout>
    <div class="h-full mx-auto px-4 py-6 sm:px-6 lg:px-8 bg-gray-200 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-gray-700/20">
            <div class="px-6 py-4 flex flex-col">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Posts</h2>
                    <button data-modal-target="create-post-modal" data-modal-toggle="create-post-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                        New Post
                    </button>
                </div>
                <ul class="divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <li class="py-4">
                            <a href="/posts/{{ $post->id }}" class="block hover:bg-gray-100 dark:hover:bg-gray-700">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $post->title }}</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300 line-clamp-2">{{ $post->content }}</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">By {{ $post->author }}
                                    on {{ $post->created_at->format('F j, Y') }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('posts.create')
</x-layout>
