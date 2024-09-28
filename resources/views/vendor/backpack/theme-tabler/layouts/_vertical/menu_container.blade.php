@if (backpack_auth()->check())
    <aside data-menu-theme={{ $theme ?? 'system' }} class="{{ backpack_theme_config('classes.sidebar') ?? 'navbar navbar-vertical '.(($right ?? false) ? 'navbar-right' : '').' navbar-expand-lg navbar-'.($theme ?? 'light') }} @if(backpack_theme_config('options.sidebarFixed')) navbar-fixed @endif">
        <div class="container-fluid">
            <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100 d-block d-lg-none">
                @include(backpack_view('layouts.partials.mobile_toggle_btn'), ['forceWhiteLabelText' => true])
                <div class="d-flex flex-row align-items-center">
                    @include(backpack_view('inc.topbar_left_content'))
                    <li class="nav-item me-2">
                        @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                    </li>
                    @include(backpack_view('inc.topbar_right_content'))
                    @include(backpack_view('inc.menu_user_dropdown'))
                </div>
            </ul>
            <div class="container pt-3">
                <h4><i class="las la-city"></i> Empresa X</h4>
                <hr class="mt-2 mb-3">

                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Projetos</h5>
                    <button class="btn btn-primary" style="padding-block: 3px; padding-inline: 7px;">
                        <i class="las la-book"></i> Novo
                    </button>
                </div>

                <input type="text" placeholder="Pesquisar projeto" class="w-100 mt-3 p-1" style="border-radius: 5px; border: #21262D 1px solid; background-color: #010409">
            </div>
            {{-- @includeWhen($shortcuts ?? true, backpack_view('layouts.partials.sidebar_shortcuts'))
            <div class="collapse navbar-collapse" id="mobile-menu">
                <ul class="navbar-nav pt-lg-3">
                    @include(backpack_view('layouts._vertical.sidebar_content_top'))
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div> --}}
        </div>
    </aside>
@endif
