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
        <img uk-cover src="{{ asset('images/index-back.png') }}" alt="">
    </div>
    <div class="uk-position-top">
        @include('partials.navbar')

    </div>
    <div class="social-icons uk-position-bottom">
        <a href="" uk-icon="icon:facebook; ratio:1.5;"></a>
        <a href="" uk-icon="icon:instagram; ratio:1.5;"></a>
        <a href="" uk-icon="icon:youtube; ratio:1.5;"></a>
    </div>

</div>
<div class="uk-padding-remove uk-height-large@m">
    <div class="slogan ">
        <div class="slogan-title">Дөрөв дэх хувьсгалд хамтдаа</div>
        <p class="slogan-desc uk-width-1-3@m" style="width: 485px;">
            Таны хүссэн үйлчилгээг бид чанарын өндөр түвшинд хүйцэтгэж өгнө. Бид өөрсдийн хийж буй ажлууддаа үргэлж шинийг эрэлхийлж, чанарыг дээдэлж ажилладаг
        </p>
    </div>
</div>
<div class="works uk-padding-remove">
    <div uk-filter="target: .js-filter">
        <ul class="uk-subnav uk-subnav-pill filter" uk-margin>
            <li uk-filter-control="filter: [data='white']; group: data"><a href="#">White</a></li>
            <li uk-filter-control="filter: [data='blue']; group: data"><a href="#">Blue</a></li>
            <li uk-filter-control="filter: [data='black']; group: data"><a href="#">Black</a></li>
        </ul>
    </div>

    <div class="uk-grid-small js-filter" uk-grid="masonry: true">
        <div data="black" class="uk-width-1-5">
            <div class="uk-cover-container uk-height-large">
                <img uk-cover src="{{ asset('images/work1.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-2-5">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work2.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-3-5">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work3.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-4-5">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work4.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-2-3">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work5.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work5.png') }}" alt="">
            </div>
        </div>
        <div class="uk-width-2-3">
            <div class="uk-cover-container uk-height-medium">
                <img uk-cover src="{{ asset('images/work6.png') }}" alt="">
            </div>
        </div>

    </div>
</div>

<div class="clients uk-padding-remove">
    <div uk-grid class="uk-grid-small uk-flex uk-flex-wrap uk-flex-wrap-around uk-child-width-1-2 uk-child-width-1-5@m">
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('clients/logo4.png') }}" alt="">
        </div>
    </div>
</div>
<div class="uk-padding-remove feature">
    <div class="uk-grid-small uk-child-width-1-3@m" uk-grid>

        <div>
            <img width="80" src="{{ asset('images/feature1.png') }}" alt="">
            <h1 class="feature-title">
                Шинэлэг санаа
            </h1>
            <p class="feature-desc">Дахин давтагдашгүй өвөрмөц санааг бид хэрэгжүүлнэ </p>
        </div>
        <div>
            <img width="80" src="{{ asset('images/feature2.png') }}" alt="">
            <h1 class="feature-title">Мэгэжлийн хамт олон</h1>
            <p class="feature-desc">Салбартаа нэр хүндтэй, олон жилийн туршлагатай гишүүдээс бүрдсэн</p>

        </div>
        <div>
            <img width="80" src="{{ asset('images/feature3.png') }}" alt="">
            <h1 class="feature-title">Чанартай гүйцэтгэл</h1>
            <p class="feature-desc">Таны хүсэл зорилгыг бид чанарын өндөр түвшинд хийж өгнө.</p>


        </div>
    </div>

</div>
@endsection