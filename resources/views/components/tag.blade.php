<link rel="stylesheet" href="../assets/css/tag.css">
@props(['size' => 'base'])
@php
    $classes = 'tag bg-white/10 transition-colors duration-300 hover:bg-white/25 rounded-xl   font-bold';
    if ($size == 'base') {
      $classes .= " px-5 py-1 text-sm";
    }
    if ($size == 'small') {
      $classes .=" text-xs px-3 py-1";
    }
@endphp

<a class="{{ $classes }}" href="#">
    {{ $slot }}
</a>
