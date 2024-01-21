<div class="post-wrapper smoove disable_tablet" data-move-y="450px" data-rotate-x="24deg" data-delay="100" data-minwidth="769" data-offset="-30%">
    <div class="post-featured-image static">
        <div class="post-featured-image static">
            <img src="{{ URL::asset('uploads/profiles/'.$profile->image) }}" class=" smoove disable_tablet" alt="{{$profile->name}}">

            <a href="#"></a>
        </div>
    </div>
    <div class="post-content-wrapper text-">
        <div class="post-header">
            <!--<div class="post-detail single-post">
                <span class="post-info-cat">
                <a href="#">Career</a>
                &nbsp;&middot;&nbsp; <a href="#">Family</a>
                &nbsp;&middot;&nbsp; <a href="#">Life</a>
                </span>
            </div>-->
            <div class="post-header-title text-center">
                <h6>{{$profile->name}}</h6>
            </div>
        </div>
        <div class="post-header-wrapper text-center">

                {{$profile->content}}

            <!--<div class="post-button-wrapper">
                <a class="continue-reading" href="#" title="10 Things Successful Mompreneurs Do Different">Continue Reading<span></span></a>
            </div>-->
            <div class="clear" style="margin-10px 0;"></div>
        </div>
    </div>
</div>