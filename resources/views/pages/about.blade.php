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
        <img uk-cover src="{{ asset('images/about-back.png') }}" alt="">
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
        <div>
            <div uk-grid class="uk-child-width-1-2@m uk-grid-small">
                <div>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ asset('images/about1.png') }}" alt="">

                    </div>
                </div>
                <div>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ asset('images/about2.png') }}" alt="">

                    </div>
                </div>
                <div>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ asset('images/about3.png') }}" alt="">

                    </div>
                </div>
                <div>
                    <div class="uk-cover-container uk-height-medium">
                        <img uk-cover src="{{ asset('images/about4.png') }}" alt="">

                    </div>
                </div>

            </div>
        </div>
        <div>
            <div class="slogan-title">Бидний зорилго</div>
            <p class="slogan-desc">
                Бид анхдагч, шинийг эрэлхийлэгч хүмүүсийг тодотгон гаргаж ирэхийн тулд
                оршдог. Бусад хүмүүс хэвийн байхад бид үргэлж өөрчлөлтийг эрэлхийлэн
                бусдаас ялгарч байдаг.
            </p>
            <p class="slogan-desc">
                Таны зорилгыг бусдад таниулахын тулд бид бүхий л аргыг ашиглах болно .Зүгээр нэг бичлэг хийж янзлахаас илүүтэйгээр бид урагшлах урам зориг өгөхийг эрмэлздэг.
                Бид энд урагш тэмүүлэхэд тань туслах болно.
            </p>
        </div>
    </div>
    <div class="about-team">
        <div class="slogan-title">Манай баг</div>
        <div style="height: 70px;"></div>
        <div uk-grid class="team-members uk-child-width-1-4@m uk-grid-medium ">
            <div>
                <div class="uk-cover-container uk-height-small">
                    <img uk-cover src="{{ asset('images/team1.png') }}" alt="">

                </div>
                <div class="team-members-name">Баярбат</div>
                <div class="team-members-role">Найруулагч</div>
            </div>
            <div>
                <div class="uk-cover-container uk-height-small">
                    <img uk-cover src="{{ asset('images/team2.png') }}" alt="">

                </div>
                <div class="team-members-name">Төрболд</div>
                <div class="team-members-role">Зураглаач</div>
            </div>
            <div>
                <div class="uk-cover-container uk-height-small">
                    <img uk-cover src="{{ asset('images/team3.png') }}" alt="">

                </div>
                <div class="team-members-name">Гэрэлт-Од</div>
                <div class="team-members-role">Продюсер</div>
            </div>
            <div>
                <div class="uk-cover-container uk-height-small">
                    <img uk-cover src="{{ asset('images/team4.png') }}" alt="">

                </div>
                <div class="team-members-name">Ганхуяг</div>
                <div class="team-members-role">Найруулагч</div>
            </div>
        </div>
    </div>
</div>
@endsection