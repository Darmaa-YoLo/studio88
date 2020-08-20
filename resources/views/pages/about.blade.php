@extends('layouts.app')
@section('title','Бидний тухай')

@section('og')
<meta property="og:title" content="Бидний тухай" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="/about" />
<meta property="og:description" content="Бидний тухай." />
@endsection

@section('content')

<div class="uk-padding-remove uk-position-relative">
    <div class="uk-cover-container uk-height-medium">
        <img uk-cover src="{{ url('img/' . $aboutCover->value) }}" alt="">
    </div>
    <div class="uk-position-top">
        @include('partials.navbar')
    </div>
    <div class="uk-position-bottom">
        <div class="current-location-title">Бидний тухай</div>
    </div>
</div>
<div class="uk-padding-remove uk-height-large@m ">
    <div uk-grid class="uk-child-width-1-2@m about">
        <div class="about-grid">
            <div uk-grid class="uk-child-width-1-2@m uk-grid-small">
                @foreach($abouts as $about)
                <div>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ url('img/'.$about->image) }}" alt="">

                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class=" about-slide uk-visible-toggle uk-light" style="display: none;" tabindex="-1" uk-slideshow="autoplay:true;animation: push;autoplay-interval: 2000">

            <ul class="uk-slideshow-items">
                @foreach($abouts as $about)
                <li>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ url('img/'.$about->image) }}" alt="">

                    </div>
                </li>
                @endforeach
            </ul>


        </div>
        <div class="uk-margin-xlarge-top">
            <div class="slogan-title">Бидний зорилго</div>
            <p class="slogan-desc">
                {{$aboutDesc->value}}
            </p>
        </div>
    </div>

    <div class="about-team">
        <div class="slogan-title">Манай баг</div>
        <div style="height: 70px;"></div>
        <div uk-grid class="team-members uk-child-width-1-4@m uk-grid-medium ">
            @foreach($members as $member)
            <div>
                <div class="uk-cover-container uk-height-small">
                    <img uk-cover src="{{ url('img/'.$member->image) }}" alt="">

                </div>
                <div class="team-members-name">{{$member->name}}</div>
                <div class="team-members-role">{{$member->role}}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class=" about-team-slide uk-visible-toggle uk-light" style="display: none" tabindex="-1" uk-slideshow="autoplay:true;animation: push;autoplay-interval: 2000">
        <div class="slogan-title">Манай баг</div>
        <ul class="uk-slideshow-items" style="height: 375px;">
            @foreach($members as $member)
            <div>
                <li>
                    <div>
                        <div class="uk-cover-container uk-height-medium">
                            <img uk-cover src="{{ url('img/'.$member->image) }}" alt="">
                        </div>
                    </div>
                </li>
                <div class="team-members-name">{{$member->name}}</div>
                <div class="team-members-role">{{$member->role}}</div>
            </div>

            @endforeach
        </ul>


    </div>
    @endsection