<div id="navbar"  uk-sticky="show-on-up: true;animation: uk-animation-slide-top;" class="uk-padding-remove navbar uk-height-small">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left studio-logo">
            <a href="{{ url('/') }}" class="uk-paddig-remove uk-logo">
                <img  src="{{ url('img/'.$logo->value) }}" alt="">
            </a>
        </div>
        <div class="uk-navbar-right studio-menu">
            <a href="" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target:#menu; animation: uk-animation-fade"></a>
        </div>
    </nav>

</div>