<li class="menu-item">
    <a href="{{ route($link) }}" class="nav-link {{ route($link) == request()->url() ? 'active' : ''}} text-black-50">
    <span>
        <i class="{{ $icon }}"></i>
        {{ $name }}
    </span>
    </a>
</li>
