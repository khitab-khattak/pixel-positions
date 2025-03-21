
<x-panel class="text-center">

    <div class="self-start text-sm">{{ $job->employer->name}}</div>
    <div class="py-6 ">
        <h3 class="group-hover:text-blue-600 font-bold text-2xl transition-colors duration-500">{{ $job->title }}</h3>
        <p class="text-sm mt-6">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between  items-center mt-auto">
        <div class="flex gap-1">
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small"/>
            @endforeach
            
        </div>
        <img class="rounded-xl" src="https://picsum.photos/42/42?random={{ rand(1, 1000) }}" alt="Placeholder">

    </div>

</x-panel>