@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center pt-1 text-sm uppercase font-medium leading-5 text-gray-900 focus:outline-none transition'
            : 'inline-flex items-center pt-1 uppercase leading-5 text-gray-500 hover:text-orange-700 focus:text-orange-700 hover:font-semibold focus:font-semibold transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
