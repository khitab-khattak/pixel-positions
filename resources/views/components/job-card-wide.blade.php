@props(['job'])
<x-panel class="flex gap-6 flex-row">
    <div>
        <img class="w-20 h-20 rounded-xl object-cover" 
        src="{{ asset('storage/' . $job->employer->logo) }}" 
        alt="{{ $job->employer->name }} logo">   
    </div>
    
    <div class="flex-1 flex flex-col text-center">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-400">
           <a href="/jobs">{{ $job->title }}</a> 
        </h3>
        <p class="text-sm mt-auto text-gray-400"> ${{ number_format($job->salary) }}</p>
    </div>

    <div>
        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
            <x-tag :$tag /> 
            @endforeach
        </div>
    </div>
</x-panel>
