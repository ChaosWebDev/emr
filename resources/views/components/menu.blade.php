<nav>
    <a href="{{ route('home') }}" wire:navigate>
        <i class="nf nf-fa-home"></i>
        <span class="a">Home</span>
    </a>

    @livewire('components.logout')
</nav>
