@extends('layouts.app')

@section('title','Хийсэн ажлууд')

@section('og')
<meta property="og:title" content="Хийсэн ажлууд" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="/portfolio" />
<meta property="og:description" content="Хийсэн ажлууд." />
@endsection

@section('content')
<div class="uk-padding-remove uk-position-relative">
    <div class="uk-cover-container uk-height-medium">
        <img uk-cover src="{{ url('img/' . $portfolioCover->value) }}" alt="">
    </div>
    <div class="uk-position-top">
        @include('partials.navbar')
    </div>
    <div class="uk-position-bottom">
        <div class="current-location-title">Хийсэн ажлууд</div>
    </div>
</div>



<div class="uk-padding-remove uk-height-medium@m">
    <div class="portfolio">
        <div uk-grid class="uk-child-width-expand@m">
            <div class="uk-width-1-2@m">
                <div class="slogan-title uk-margin-small-bottom">Бидний хийсэн ажлууд</div>
                <div class="slogan-desc uk-margin-medium-bottom">{{$portfolioDesc->value}}</div>
            </div>
            <div class="uk-width-1-2@m uk-align-center">

            </div>
        </div>
    </div>
</div>
<div class="uk-padding-remove works">
    <div uk-filter="target: .all-works">
        <ul class="uk-subnav uk-subnav-pill filter" uk-margin>
            <li class="uk-active" uk-filter-control><a href="#">Бүгд</a></li>
            @foreach($filter as $fil)
            <li uk-filter-control="{{'.'.$fil->name}}"><a href="#">{{$fil->name}}</a></li>

            @endforeach
        </ul>
        <div class="all-works uk-grid-small uk-child-width-1-4@m" uk-grid="masonry:true;">
            @foreach($works as $work)
            <div class="{{$work->type}}">
                <div class="uk-cover-container sht prop">
                    <a href="#show-video" uk-toggle>
                        <video  onclick='return getUrl("{{url('video/'.$work->video)}}")' uk-cover="autoplay:false" >
                            <source src="{{url('video/'.$work->video)}}">
                        </video>
                    </a>
                    <!-- <img uk-cover src="{{url('img/'. $work->video)}}" alt=""> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div id="show-video" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <video id="modVideo" src="" autoplay="false" playsinline controls uk-video></video>
    </div>
</div>

@endsection

@push('scripts')
<script>
    var h = [
        "350",
        "300",
        "370",
        "280",
        "390",
        "350",
        "300",
        "370",
        "280",
        "390",
        "350",
        "300",
        "370",
        "280",
        "390"
    ];

    var ele = document.querySelectorAll(".prop");
    var r;
    var e;
    for (var i = 0; i < 15; i++) {
        r = Math.floor(Math.random() * h.length);
        e = h[r];
        ele[i].style.height = `${e}px`;


    }

    function getUrl(par) {

        document.getElementById("modVideo").src = par;
    }
</script>
@endpush