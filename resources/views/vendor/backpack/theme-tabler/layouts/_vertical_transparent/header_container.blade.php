<header class="d-print-none {{ backpack_theme_config('classes.topHeader') ?? 'd-none d-lg-block px-3 navbar navbar-expand-md' }}">
    <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xl' }} d-flex justify-content-between">
        <div class="collapse navbar-collapse align-items-center">
            <ul class="navbar-nav pt-lg-3">
                @include(backpack_view('inc.sidebar_content'))
            </ul>
        </div>

        <div class="navbar-nav">
            @include(backpack_view('inc.menu'))
        </div>
    </div>
</header>