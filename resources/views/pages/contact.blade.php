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
        <img uk-cover src="{{ url('img/' . $contactCover->value) }}" alt="">
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
                <p class="contact-desc uk-text-light">{{$mail->value}}</p>
            </div>
            <div class="uk-margin-medium-bottom">
                <p class="contact-sub uk-text-light">Утас</p>
                <p class="contact-desc uk-text-light">{{$phone->value}}</p>
            </div>
            <div class="uk-margin-medium-bottom">
                <p class="contact-sub uk-text-light">Хаяг</p>
                <p class="contact-desc uk-text-light">{{$address->value}}</p>
            </div>
        </div>
        <div>
            <div id="map">

            </div>
        </div>
    </div>
</div>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwVpiAjQXqTXwa60bb7KFx_dRYJxWPgw&callback=initMap">

</script>
@endsection

@push('scripts')
<script>
    function initMap() {
        var loc = "{{$map->value}}";
        var alt = loc.split(',');
        var studio = {
            lat: parseFloat(alt[0]),
            lng: parseFloat(alt[1])
        };
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: studio,
        });
        var marker = new google.maps.Marker({
            position: studio,
            map: map
        });
    }
</script>
@endpush