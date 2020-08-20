@extends('layouts.app')

@section('title','Нүүр')

@section('og')
<meta property="og:title" content="Studio88" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="/" />
<meta property="og:description" content="Film and Art production." />
@endsection
@section('content')



<div class="uk-padding-remove uk-position-relative">

    <div class="uk-cover-container uk-height-viewport">
        <video uk-cover src="{{ url('video/'.$indexCover->value) }}" autoplay></video>
    </div>

    <div class="uk-position-top">
        @include('partials.navbar')

    </div>

    <div class="social-icons uk-position-bottom">
        <a href="{{$fb->value}}" uk-icon="icon:facebook; ratio:1.5;"></a>
        <a href="{{$in->value}}" uk-icon="icon:instagram; ratio:1.5;"></a>
        <a href="{{$yt->value}}" uk-icon="icon:youtube; ratio:1.5;"></a>
    </div>

</div>
<div class="uk-padding-remove uk-height-large@m">
    <div class="slogan ">
        <div class="slogan-title">Дөрөв дэх хувьсгалд хамтдаа</div>
        <p class="slogan-desc uk-width-1-3@m" style="width: 485px;">
            {{$slogan->value}}

        </p>
    </div>
</div>
<div class="works uk-padding-remove">
    <div uk-filter="target:.short-works">
        <ul class="uk-subnav uk-subnav-pill uk-flex-bottom filter" uk-margin>
            <li class="uk-active" uk-filter-control><a href="#">Бүгд</a></li>
            @foreach($filter as $fil)
            <li class="{{$fil->name}}" uk-filter-control="filter:{{'.'.$fil->name}};group:type"><a href="#">{{$fil->name}}</a></li>
            @endforeach
        </ul>
        <div class="short-works uk-grid-small" uk-grid="masonry:true;">

            @for($i = 0;$i < count($works); $i++) @if($i==2) <div class="{{$works[$i]->type}} uk-width-3-5@m">
                <div class="uk-cover-container sht " style="height: 250px;">
                    <a href="#show-video">
                        <video onclick='return getUrl("{{url('video/'.$works[$i]->video)}}")' uk-cover="autoplay:false">
                            <source src="{{url('video/'.$works[$i]->video)}}">
                        </video>
                    </a>
                </div>
        </div>
        @continue
        @endif
        @if($i==3) <div class="{{$works[$i]->type}} uk-width-2-5@m">
            <div class="uk-cover-container sht " style="height: 250px;">
                <a href="#show-video">
                    <video onclick='return getUrl("{{url('video/'.$works[$i]->video)}}")' uk-cover="autoplay:false">
                        <source src="{{url('video/'.$works[$i]->video)}}">
                    </video>
                </a>
            </div>
        </div>
        @continue
        @endif
        @if($i%2==0) <div class="{{$works[$i]->type}} uk-width-2-5@m">
            <div class="uk-cover-container sht " style="height: 250px;">
                <a href="#show-video">
                    <video onclick='return getUrl("{{url('video/'.$works[$i]->video)}}")' uk-cover="autoplay:false">
                        <source src="{{url('video/'.$works[$i]->video)}}">
                    </video>
                </a>
            </div>
        </div>
        @else
        <div class="{{$works[$i]->type}} uk-width-3-5@m">
            <div class="uk-cover-container sht " style="height: 250px;">
                <a href="#show-video">
                    <video onclick='return getUrl("{{url('video/'.$works[$i]->video)}}")' uk-cover="autoplay:false">
                        <source src="{{url('video/'.$works[$i]->video)}}">
                    </video>
                </a>
            </div>
        </div>
        @endif
        @endfor
    </div>
</div>

<div class="clients uk-padding-remove">
    <div uk-grid class="uk-grid-small uk-flex uk-flex-wrap uk-flex-wrap-around uk-child-width-1-2 uk-child-width-1-5@m">
        @foreach($logos as $logo)
        <div>
            <img class="client-logo" style="height: 150px;" src="{{ url('img/'.$logo->logo) }}" alt="{{$logo->name}}">
        </div>
        @endforeach
    </div>
</div>
<div class="uk-padding-remove feature">
    <div class="uk-grid-small uk-child-width-1-3@m" uk-grid>
        <div>
            <img width="80" src="{{ asset('images/feature1.png') }}" alt="">
            <h1 class="feature-title">
                {{$feature1_desc->value}}
            </h1>
            <p class="feature-desc">{{$feature1->value}}</p>
        </div>
        <div>
            <img width="80" src="{{ asset('images/feature2.png') }}" alt="">
            <h1 class="feature-title">{{$feature2_desc->value}}</h1>
            <p class="feature-desc">{{$feature2->value}}</p>

        </div>
        <div>
            <img width="80" src="{{ asset('images/feature3.png') }}" alt="">
            <h1 class="feature-title">{{$feature3_desc->value}}</h1>
            <p class="feature-desc">{{$feature3->value}}</p>
        </div>
    </div>

</div>

<div id="show-video" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <video width="1024" height="680" id="modVideo" src="" autoplay="false" playsinline controls uk-video></video>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function getUrl(par) {

        document.getElementById("modVideo").src = par;
        UIkit.modal("#show-video").show();
    }
</script>
@endpush