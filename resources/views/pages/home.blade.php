<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Үндсэн хэсэг</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>

    <div class="uk-grid-collapse uk-child-width-1-3@m uk-background-secondary" uk-grid>
        <div class="sets">
            <a href="/index">
                <div class="uk-animation-toggle">
                    <div class="uk-cover-container uk-animation-scale-up " uk-height-viewport>
                        <div uk-cover class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{asset('images/cover1.jpg')}}" uk-img>
                            <h1 class="titles uk-text-bold">Studio 88</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="sets">
            <a href="#">
                <div class="uk-animation-toggle ">
                    <div class="uk-cover-container uk-animation-scale-up " uk-height-viewport>
                        <div uk-cover class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{asset('images/cover2.jpg')}}" uk-img>
                            <h1 class="titles uk-text-bold">Casting</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="sets">
            <a href="#">
                <div class="uk-animation-toggle ">
                    <div class="uk-cover-container uk-animation-scale-up " uk-height-viewport>
                        <div uk-cover class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{asset('images/cover3.jpg')}}" uk-img>
                            <h1 class="titles uk-text-bold">Live TV</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script>
        $('.sets').hover(function() {
            var id = $(this).children().children().children().children().children();
            $(id).toggleClass('site-hovered');
        });
    </script>
</body>

</html>