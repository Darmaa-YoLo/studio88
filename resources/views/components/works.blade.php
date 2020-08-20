<div class="uk-padding-remove uk-margin-small-bottom">
    <div class="uk-grid-small all-works uk-child-width-1-4@m" uk-grid="masonry:true;">
        @for($i=0;$i<$w;$i++)
            <div class="uk-cover-container child">
                <img uk-cover src="{{asset('images/work1.png')}}" alt="">
            </div>
        @endfor
        <div class="uk-cover-container child tag-blue">
                <img uk-cover src="{{asset('images/work2.png')}}" alt="">
        </div>
    </div>
</div>