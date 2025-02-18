<nav>
    <a href="{{ route('home') }}" wire:navigate>
        <i class="nf nf-fa-home"></i>
        <span class="a">Home</span>
    </a>

    <a href="#practitioners" {{-- wire:navigate --}}>
        <i class="nf nf-fa-stethoscope"></i>
        <span class="a">Practitioners</span>
    </a>

    @livewire('components.logout')
</nav>
