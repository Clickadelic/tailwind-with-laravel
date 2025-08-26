@props([
    'icon' => null,
    'size' => null,
    'variant' => null,
    'asButton' => false,
    'uppercase' => false
])

@php

    $asButton = $asButton ? 'button' : 'a';
    $buttonStyle = $asButton ? 'px-4 py-2 rounded shadow-sm' : '';
    $uppercaseClass = $uppercase ? 'uppercase' : '';
    
    $baseFocus = 'focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variantClasses = match($variant) {
        'primary'   => "text-sky-600 hover:text-sky-800 $baseFocus focus:ring-sky-800",
        'secondary' => "text-slate-600 $baseFocus focus:ring-slate-600",
        'danger'    => "text-rose-600 $baseFocus focus:ring-rose-600",
        'warning'   => "text-amber-500 hover:text-amber-600 $baseFocus focus:ring-amber-600",
        'success'   => "text-emerald-600 hover:emerald-800 $baseFocus focus:ring-emerald-800",
        'default'   => "text-neutral-600 hover:text-neutral-800 $baseFocus focus:ring-neutral-500",
        'ghost'     => "bg-transparent hover:bg-neutral-700 border border-neutral-500 hover:text-slate-100 $baseFocus focus:ring-neutral-500",
        default     => "text-slate-800 hover:text-slate-900 $baseFocus focus:ring-neutral-500",
    };

    $sizeClasses = match($size) {
        'sm' => 'h-8 rounded-md px-3 text-xs',
        'md' => 'h-9 px-4 py-2 text-sm',
        'lg' => 'h-10 rounded-md px-4',
        'xl' => 'h-12 rounded-md px-6',
        default => '',
    };

@endphp

<{{ $asButton }} {{ $attributes->merge([
    'class' => implode(' ', [
        'inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors',
        'focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring',
        'disabled:pointer-events-none disabled:opacity-50',
        '[&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0',
        'focus:outline-none focus:ring-2 focus:ring-transparent focus:ring-offset-2',
        'hover:cursor-pointer',
        $sizeClasses,
        $uppercaseClass,
        $variantClasses,
        $buttonStyle
    ]),
    'href' => $attributes->get('href'),
]) }} aria-label="{{ $attributes->get('aria-label') ?? $attributes->get('title') }}">
    {{ $icon }}{{ $slot }}
</{{ $asButton }}>
