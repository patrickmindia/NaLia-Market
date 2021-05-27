@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-indigo-100 text-orange-500 border-none focus:border-indigo-400 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-sm shadow-sm']) !!}>
