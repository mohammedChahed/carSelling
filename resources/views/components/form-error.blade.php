@props(['name'=>"required"])

@php
    $messages = $errors->get($name);
@endphp

@if($messages && count($messages) > 0)
    <ul {{ $attributes->merge(['class' => 'text-red-600 text-sm mt-1 list-disc pl-5']) }}>
        @foreach($messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
