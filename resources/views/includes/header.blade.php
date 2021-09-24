<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <button class="button" style="vertical-align:middle"><span>{{ __('misc.homepage_title') }}</span></button>
        </a>
        @yield('introduction_text')
    </div>
</div>
