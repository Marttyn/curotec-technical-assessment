<x-layout>
    <div class="min-h-screen bg-gray-200 dark:bg-gray-800">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow dark:shadow-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ route('posts.index') }}" class="flex items-center text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                            <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Posts
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <article class="prose prose-lg prose-headings:font-serif prose-headings:font-bold prose-headings:tracking-tight prose-p:leading-relaxed prose-p:text-gray-700 dark:prose-p:text-gray-300 prose-a:text-blue-600 dark:prose-a:text-blue-400 prose-a:hover:text-blue-800 dark:prose-a:hover:text-blue-300 prose-code:text-gray-900 dark:prose-code:text-gray-100 prose-code:bg-gray-100 dark:prose-code:bg-gray-800 prose-code:rounded prose-code:px-2 prose-code:py-1 dark:bg-gray-800">
                <!-- Hero Section -->
                <div class="space-y-6 mb-12">
                    <h1 class="text-4xl font-serif font-bold text-gray-900 dark:text-white tracking-tight">
                        {{ $post->title }}
                    </h1>
                    <div class="flex items-center space-x-4 text-gray-600 dark:text-gray-400">
                        <span class="font-medium">{{ $post->author }}</span>
                        <span class="text-gray-400">•</span>
                        <span>{{ $post->created_at->format('F j, Y') }}</span>
                        <span class="text-gray-400">•</span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <!-- Post Content -->
                <div class="prose prose-lg max-w-none dark:text-white">
                    {!! nl2br(e($post->content)) !!}
                </div>
            </article>
        </main>
    </div>
</x-layout>
