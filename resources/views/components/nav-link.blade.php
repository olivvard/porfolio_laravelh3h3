@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'navbar-active' : 'text-secondary' }}">
    {{ $slot }}
</a>