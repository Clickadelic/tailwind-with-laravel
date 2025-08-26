@props([
    'icon' => null,
    'size' => null,
    'variant' => null,
    'uppercase' => false
])

@php

    $baseFocus = 'focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variantClasses = match($variant) {
        'primary'   => "text-white bg-sky-600 hover:bg-sky-700 $baseFocus focus:ring-sky-600",
        'secondary' => "text-white bg-slate-700 hover:bg-slate-800 $baseFocus focus:ring-slate-600",
        'danger'    => "text-white bg-rose-600 hover:bg-rose-700 $baseFocus focus:ring-rose-600",
        'warning'   => "text-white bg-amber-600 hover:bg-amber-700 $baseFocus focus:ring-amber-600",
        'success'   => "text-white bg-emerald-600 hover:bg-emerald-700 $baseFocus focus:ring-emerald-600",
        'default'   => "bg-neutral-700 hover:bg-neutral-800 $baseFocus focus:ring-neutral-500",
        'ghost'     => "bg-transparent hover:bg-neutral-700 border border-neutral-500 hover:text-slate-100 $baseFocus focus:ring-neutral-500",
        default     => "bg-neutral-700 hover:bg-neutral-800 $baseFocus focus:ring-neutral-500",
    };

    $sizeClasses = match($size) {
        'sm' => 'h-8 rounded-md px-3 text-xs',
        'md' => 'h-9 px-4 py-2 text-sm',
        'lg' => 'h-10 rounded-md px-4',
        'xl' => 'h-12 rounded-md px-6',
        default => 'h-9 px-4 py-2',
    };

    $uppercaseClass = $uppercase ? 'uppercase' : '';
@endphp

<button {{ $attributes->merge([
    'class' => implode(' ', [
        'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm font-medium transition-colors',
        'focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring',
        'disabled:pointer-events-none disabled:opacity-50',
        '[&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0',
        'focus:outline-none focus:ring-2 focus:ring-transparent focus:ring-offset-2',
        'hover:cursor-pointer shadow-sm',
        $sizeClasses,
        $uppercaseClass,
        $variantClasses
    ]),
    'type' => 'button'
]) }} aria-label="{{ $attributes->get('aria-label') ?? $attributes->get('title') }}">
    {{ $icon }}{{ $slot }}
</button>
