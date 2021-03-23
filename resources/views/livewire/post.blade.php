<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $posts[0]->title }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-7 py-4">

            <h1 class="text-5xl mb-3">{{ $posts[0]->title }}</h1>
            <hr /><br />
            <p class="text-2xl">{{ $posts[0]->body }}</p>
        </div>
    </div>
</div>
