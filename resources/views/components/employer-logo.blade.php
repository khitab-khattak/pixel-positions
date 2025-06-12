@php
    $logoPath = $job->employer->logo 
        ? asset('storage/' . $job->employer->logo) 
        : 'https://via.placeholder.com/80?text=Logo';
@endphp

<img class="w-20 h-20 rounded-xl object-cover"
     src="{{ $logoPath }}"
     alt="{{ $job->employer->name }} logo">

