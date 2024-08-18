@props(['icon' => 'bx bx-home', 'href' => '#'])

<li {{ $attributes }}>
    <a href="{{ $href }}" class="menu-link">
        <i class="menu-icon tf-icons {{ $icon }}"></i>
        <div class="text-truncate">{{ $slot }}</div>
    </a>
</li>