<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('root') }}">
                <span class="icon">{!! icon('home') !!}</span>
                <span>CMS</span>
            </a>
            <button onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');" class="button is-dark navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                @include('partials.admin.nav.single', ['link' => route('admin.dashboard.index'), 'text' => __('admin.dashboard.index'), 'icon' => 'target'])
                @include('partials.admin.nav.dropdown', ['resource' => 'page', 'icon' => 'file'])
                @include('partials.admin.nav.logout', ['class' => 'is-hidden-tablet'])
             </div>
        </div>
        <div class="navbar-end is-hidden-mobile">
            @include('partials.admin.nav.logout')
        </div>
    </div>
</nav>
