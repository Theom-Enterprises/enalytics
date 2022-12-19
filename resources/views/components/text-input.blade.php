@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-xl shadow-sm border-gray-300 transparent_bg_input text-black focus:border-indigo-300']) !!}>
