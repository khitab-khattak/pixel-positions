
<x-panel class="text-center">

    <div class="self-start text-sm">{{ $job->employer->name}}</div>
    <div class="py-6 ">
        <h3 class="group-hover:text-blue-600 font-bold text-2xl transition-colors duration-500">
            <a href="{{ $job->url }}">{{ $job->title }}</a>
            
        </h3>
        <p class="text-sm mt-6"> ${{ number_format($job->salary) }}</p>
    </div>
    <div class="flex justify-between  items-center mt-auto">
        <div class="flex gap-1">
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small"/>
            @endforeach
            
        </div>
       
        <img class="w-10 h-10 rounded-xl object-cover" 
        src="{{ asset('storage/' . $job->employer->logo) }}" 
        alt="{{ $job->employer->name }} logo">
     </div>

</x-panel>