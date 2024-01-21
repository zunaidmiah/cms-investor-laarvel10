@extends('layouts.front')
@section('content')
@include('frontirdata')

<!-- Begin main content -->
<div class="inner-wrapper">
    <div class="sidebar-content fullwidth">
        <div data-elementor-type="wp-page" data-elementor-id="4903" class="elementor elementor-4903" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">



                    <section class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">

                                            <div class="elementor-element elementor-element-7c720c1 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="7c720c1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Latest Reports</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-35793f8 elementor-widget elementor-widget-avante-blog-posts" data-id="35793f8" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                <div class="elementor-widget-container">
                                                    <div class="blog-post-content-wrapper layout-grid">


                                                        <!-- Begin each blog post -->

                                                        @foreach ($Reports as $Report)
                                                        <div class="blog-posts-grid post-187 post type-post status-publish format-standard has-post-thumbnail hentry category-career category-family category-life category-productivity tag-direction tag-vision-goal-setting">
                                                            <div class="post-wrapper smoove disable_tablet" data-move-y="450px" data-rotate-x="24deg" data-delay="200" data-minwidth="769" data-offset="-30%">
                                                                <div class="post-featured-image static">
                                                                    <div class="post-featured-image-hover ">
                                                                        <img src="{{ url('/') }}/{{ $Report->image_file_name }}" class=" smoove disable_tablet" alt="{{ $Report->title }}">
                                                                        <a href="{{ url('/') }}/{{ $Report->pdf_file_name }}" target="_blank"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content-wrapper text-">
                                                                    <div class="post-header">

                                                                        <div class="post-header-title">
                                                                            <h5><a href="{{ url('/') }}/{{ $Report->pdf_file_name }}" target="_blank">{{ $Report->title }}</a></h5>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- End each blog post -->


                                                    </div>
                                                    <br class="clear">
                                                </div>
                                            </div>
                                            <!--<div class="elementor-element elementor-element-d8d28d2 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="d8d28d2" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img width="1494" height="1408" src="/assets/new/upload/home2_morph_bg1.png" class="attachment-full size-full" alt="" >
                                            </div>
                                        </div>
                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
            </div>
        </div>
        <div class="comment_disable_clearer">
        </div>
    </div>
</div>
<!-- End main content -->

<!-- Begin main content -->
<div class="inner-wrapper">
    <div class="sidebar-content fullwidth">
        <div data-elementor-type="wp-page" data-elementor-id="3455" class="elementor elementor-3455" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">

                    <section class="elementor-element elementor-element-f152b61 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f152b61" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-8223f91 elementor-column elementor-col-100 elementor-top-column" data-id="8223f91" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">

                                            <div class="elementor-element elementor-element-f152b61 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="f152b61" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Latest Announcements</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-31c48e8 elementor-widget elementor-widget-avante-blog-posts" data-id="31c48e8" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                <div class="elementor-widget-container">
                                                    <div class="blog-post-content-wrapper layout-classic">
                                                        <!-- Begin each blog post -->

                                                        @foreach($latestannouncements as $latest)
                                                        <div class="blog-posts-classic post-203 post type-post status-publish format-video has-post-thumbnail hentry category-career category-family category-life tag-direction tag-vision-goal-setting post_format-post-format-video">
                                                            <div class="post-wrapper" style="margin: 0 0 -100px 0; padding: 0">

                                                                <div class="post-content-wrapper text-">
                                                                    <div class="post-header">
                                                                        <div class="post-detail single-post">
                                                                            <div class="label label-danger">
                                                                                <?php $strDate = strtotime($latest->date_of_publishing); ?>
                                                                                {{ date("d M, Y",$strDate) }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="post-header-title">
                                                                            @if(isset($details_annc[$latest->category]))
                                                                            <h6><a href="{{ url('/') }}/{{$details_annc[$latest->category]}}/{{ $latest->id }}">{{ $latest->title }} </a></h6>
                                                                            @else
                                                                            <h6><a href="">{{ $latest->title }} </a></h6>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                        <!-- End each blog post -->
                                                        @endforeach

                                                    </div>
                                                    <br class="clear">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-8223f91 elementor-column elementor-col-100 elementor-top-column" data-id="8223f91" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">

                                            <div class="elementor-element elementor-element-f152b61 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="f152b61" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Latest Media News</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-31c48e8 elementor-widget elementor-widget-avante-blog-posts" data-id="31c48e8" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                <div class="elementor-widget-container">
                                                    <div class="blog-post-content-wrapper layout-classic">
                                                        <!-- Begin each blog post -->
                                                        @foreach($latestnews as $latest)
                                                        @if(!is_null($latest))

                                                        <div class="blog-posts-classic post-203 post type-post status-publish format-video has-post-thumbnail hentry category-career category-family category-life tag-direction tag-vision-goal-setting post_format-post-format-video">
                                                            <div class="post-wrapper" style="margin: 0 0 -100px 0; padding: 0">

                                                                <div class="post-content-wrapper text-">
                                                                    <div class="post-header">
                                                                        <div class="post-detail single-post">
                                                                            <div class="label label-danger">{{ date("d M, Y",$latest->date) }}</div>
                                                                        </div>
                                                                        <div class="post-header-title">
                                                                            <h6><a href="{{ URL::to('media_news/news/news_centre_latest_media_news_details?show=' . $latest->id) }}">{{ $latest->title }}</a></h6>
                                                                            <!--<h6><a href="http://medianews.investor.com.my/news/news_centre_latest_media_news_details?show={{ $latest->id }}">{{ $latest->title }}</a></h6>-->
                                                                        </div>
                                                                        {{-- <small><cite title="Source Title">{{  $latest->footer }}</cite></small> --}}
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br class="clear">
                                                        @endif
                                                        @endforeach
                                                        <!-- End each blog post -->


                                                    </div>
                                                    <br class="clear">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>



                </div>
            </div>
        </div>
        <div class="comment_disable_clearer">
        </div>
    </div>
</div>
<!-- End main content -->

<!-- Begin main content -->
<div class="inner-wrapper">
    <div class="sidebar-content fullwidth">
        <div data-elementor-type="wp-page" data-elementor-id="4903" class="elementor elementor-4903" data-elementor-settings="[]">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">

                    <section class="elementor-element elementor-element-8649ee0 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="8649ee0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay">
                        </div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-2b66284 elementor-column elementor-col-100 elementor-top-column" data-id="2b66284" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-ec6652e elementor-widget__width-inherit elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading" data-id="ec6652e" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">{{strip_tags($page[0]->left_inner_block_title1)}}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-25a090d elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="25a090d" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">{{strip_tags($page[0]->left_inner_block_title2)}}</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-48175a7 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-align-center elementor-widget elementor-widget-icon-list" data-id="48175a7" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">

                                                        <li class="elementor-icon-list-item">
                                                            <a href="mailto:amirulashraf@majuperak.com.my"><span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="far fa-envelope"></i></span>
                                                                <span class="elementor-icon-list-text">{{strip_tags($page[0]->left_inner_block_content1)}}</span>
                                                            </a>
                                                        </li>
                                                        <li class="text-brown">{{strip_tags($page[0]->left_inner_block_content2)}}</li>
                                                    </ul>

                                                    <div id="mail88_api">
                                                        <form action="/api/script" id="mail88ApiForm" method="post" accept-charset="utf-8">
                                                            <input type="hidden" name="data[AutoSubscriber][api]" value="59239faa-40b0-4de7-a1aa-0e5cc0a80118" id="AutoSubscriberApi">
                                                            <p class="elementor-icon-list-text">First Name <span class="text-brown">*</span>
                                                                <input name="data[AutoSubscriber][firstname]" class="input-xxlarge" title="* This field is required." placeholder="first name" required="1" maxlength="50" type="text" id="AutoSubscriberFirstname">
                                                                <span class="elementor-icon-list-text">Last Name <span class="text-brown">*</span></span>
                                                                <input name="data[AutoSubscriber][lastname]" class="input-xxlarge" title="* This field is required." placeholder="last name" required="1" maxlength="50" type="text" id="AutoSubscriberLastname">

                                                                <span class="elementor-icon-list-text">E-mail Address <span class="text-brown">*</span></span>
                                                                <input name="data[AutoSubscriber][email]" class="input-xxlarge" title="* This field is required." placeholder="email address" required="1" maxlength="100" type="text" id="AutoSubscriberEmail">

                                                                <br class="clear">
                                                            <div class="margin_top_10px"></div>
                                                            <input type="submit" name="Submit" value="Subscribe" class="button"></p>
                                                            <input type="hidden" name="data[AutoSubscriber][type]" value="XXL" id="AutoSubscriberType">
                                                        </form>
                                                        <script>
                                                            var form = document.getElementById("mail88ApiForm");
                                                            var formOriginal = document.getElementById('mail88_api').innerHTML;
                                                            form.onsubmit = function(e) {
                                                                // stop the regular form submission
                                                                e.preventDefault();
                                                                var data = {};
                                                                for (var i = 0, ii = form.length; i < ii; ++i) {
                                                                    var input = form[i];
                                                                    if (input.name) {
                                                                        data[input.name] = input.value;
                                                                    }
                                                                }
                                                                console.log(data);
                                                                addData(data, formOriginal);
                                                                return false;
                                                            }

                                                            function addData(data, formOriginal) {

                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "http://s1.e-mail88.com/api/subscriber.json",
                                                                    data: data,
                                                                    // contentType: "application/json; charset=utf-8",
                                                                    crossDomain: true,
                                                                    dataType: "json",
                                                                    success: function(data, status, jqXHR) {
                                                                        alert(data.message);
                                                                        //console.log(jqXHR);
                                                                        if (data.message == "Subscriber Saved") {
                                                                            var formDiv = document.getElementById("mail88_api");

                                                                            var AutoSubscriberFirstname = document.getElementById('AutoSubscriberFirstname');
                                                                            if (typeof(AutoSubscriberFirstname) != 'undefined' && AutoSubscriberFirstname != null) {
                                                                                document.getElementById('AutoSubscriberFirstname').value = '';
                                                                            }

                                                                            var AutoSubscriberLastname = document.getElementById('AutoSubscriberLastname');
                                                                            if (typeof(AutoSubscriberLastname) != 'undefined' && AutoSubscriberLastname != null) {
                                                                                document.getElementById('AutoSubscriberLastname').value = '';
                                                                            }

                                                                            document.getElementById('AutoSubscriberEmail').value = '';
                                                                        }
                                                                    },
                                                                    error: function(data, jqXHR, status) {
                                                                        console.log(jqXHR);
                                                                        alert('Fail : ' + data.message);
                                                                        //alert('fail' + status.code);
                                                                    }
                                                                });
                                                                return false;

                                                            }

                                                            function unsubscribe(obj) {
                                                                var form = document.getElementById("mail88ApiForm");
                                                                var data = {};
                                                                for (var i = 0, ii = form.length; i < ii; ++i) {
                                                                    var input = form[i];
                                                                    if (input.name) {
                                                                        data[input.name] = input.value;
                                                                    }
                                                                }
                                                                data['data[AutoSubscriber][status_id]'] = '0';
                                                                data['data[AutoSubscriber][subType]'] = 'unsubs';
                                                                addData(data, formOriginal);
                                                                return false;
                                                                /*
                                                                form.onsubmit = function (e) {
                                                                  // stop the regular form submission
                                                                  e.preventDefault();
                                                                  var data = {};
                                                                  for (var i = 0, ii = form.length; i < ii; ++i) {
                                                                    var input = form[i];
                                                                    if (input.name) {
                                                                      data[input.name] = input.value;
                                                                    }
                                                                  }
                                                                  data['data[AutoSubscriber][status_id]'] = 0;
                                                                  console.log(data);
                                                                  addData(data, formOriginal);
                                                                  return false;
                                                                }
                                                                */
                                                                return false;
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="comment_disable_clearer">
        </div>
    </div>
</div>
<!-- End main content -->



@stop