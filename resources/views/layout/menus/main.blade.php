{{-- <ul class="navbar-nav m-auto mb-2 mb-lg-0 menuList">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('/main') }}">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/services') }}">Services informatiques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " aria-current="page" href="{{ url('/nouveautes') }}">Nouveautés</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Nous joindre</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " aria-current="page" href="{{ url('/carrieres') }}">Carrières</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
    </li>

</ul> --}}

<ul class="navbar-nav m-auto mb-2 mb-lg-0 menuList">
    @foreach ($items as $menu_item)
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{ $menu_item->link() }}">
                {{ $menu_item->title }}
            </a>
        </li>
    @endforeach
</ul>
