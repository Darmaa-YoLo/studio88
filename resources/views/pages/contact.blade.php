@extends('layouts.app')

@section('title','Холбоо барих')

@section('og')
<meta property="og:title" content="Холбоо барих" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="/contact" />
<meta property="og:description" content="Холбоо барих." />
@endsection

@section('content')
<div class="uk-padding-remove uk-position-relative">
    <div class="uk-cover-container uk-height-medium">
        <img uk-cover src="{{ asset('images/contact-back.png') }}" alt="">
    </div>
    <div class="uk-position-top">
        @include('partials.navbar')
    </div>
    <div class="uk-position-bottom">
        <div class="current-location-title">Холбоо барих</div>
    </div>
</div>
<div class="uk-padding-remove uk-height-large@m">
    <div class="uk-grid-small uk-child-width-expand@m contact" uk-grid>
        <div class="uk-width-2-5@m">
            <div class="slogan-title uk-margin-large-bottom">Бидэнтэй холбогдоорой</div>
            <div class="uk-margin-medium-bottom">
                <p class="contact-sub uk-text-light">И-мэйл</p>
                <p class="contact-desc uk-text-light">mail@mail.com</p>
            </div>
            <div class="uk-margin-medium-bottom">
                <p class="contact-sub uk-text-light">Утас</p>
                <p class="contact-desc uk-text-light">+976 99114456</p>
            </div>
            <div class="uk-margin-medium-bottom">
                <p class="contact-sub uk-text-light">Хаяг</p>
                <p class="contact-desc uk-text-light">Студи 88 продакшн, Gutal Office 7-давхар
                    19-хороо, Улаанбаатар хот
                    11000, Монгол улс</p>
            </div>
        </div>
        <div>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B3%D1%83%D1%82%D0%B0%D0%BB%20%D0%BE%D1%84%D1%84%D0%B8%D1%81&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }
                </style>
            </div>
        </div>
    </div>
</div>
@endsection