@props([
    'type' => 'success', // success atau error
    'message' => '',
    'duration' => 3000, // default 5 detik
])

@php
    $bgColor = $type === 'success' ? 'bg-green-100 border-green-300 text-green-800' : 'bg-red-100 border-red-300 text-red-800';
@endphp

<div 
    x-data="{ show: true }" 
    x-init="setTimeout(() => show = false, {{ $duration }})" 
    x-show="show" 
    x-transition.duration.500ms
    {{ $attributes->merge(['class' => "relative mb-4 p-4 border rounded-md $bgColor"]) }}
>
    <button @click="show = false" class="absolute top-2 right-2 text-sm font-bold {{ $type === 'success' ? 'text-green-700 hover:text-green-900' : 'text-red-700 hover:text-red-900' }}">
        &times;
    </button>

    @if ($type === 'error' && is_array($message))
        <ul class="list-disc pl-5 space-y-1">
            @foreach ($message as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $message }}</p>
    @endif
</div>
