@props(['title' => ''])

<x-base-layout :$title >
    <x-layouts.header />
    @hasSection('content')
        @yield('content')
    @else
        {{ $slot ?? '' }}
    @endif
    
    
</x-base-layout>