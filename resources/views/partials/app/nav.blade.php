<nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('root') }}">
                <img src="{{ asset('i/icons/cms-logo.png') }}" alt="{{ config('settings.site_title') }}" width="100">
            </a>
            <div id="toggle-menu" class="navbar-burger burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav">

            @foreach($primaryMenus as $menu)

            <li class="nav-item dropdown">
                <a class="nav-link {{ count($menu->children) ? 'dropdown-toggle' :'' }}" href="{{ $menu->link }}" id="navbarDropdownMenuLink" >
                   {{ $menu->title }}
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  @if(count($menu->children))
                    @include('partials.app.subnav',['childs' => $menu->children])
                  @endif
                </ul>
            </li>

            @endforeach

        </ul>

    </div>
  </div>
</nav>

