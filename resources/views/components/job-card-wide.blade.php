@props(['job'])
<x-panel class="flex gap-6 flex-row">
    <div>
        <img class="rounded-xl" src="https://picsum.photos/90/90?random={{ rand(1, 1000) }}" alt="Placeholder 90x90">
    </div>
    
    <div class="flex-1 flex flex-col text-center">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-400">
            {{ $job->title }}
        </h3>
        <p class="text-sm mt-auto text-gray-400">{{ $job->salary }}</p>
    </div>

    <div>
        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
            <x-tag :$tag /> 
            @endforeach
        </div>
    </div>
</x-panel>
