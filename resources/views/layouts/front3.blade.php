<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.fronthead')
    <style>


        .elementor-5733 .elementor-element.elementor-element-3fa2ab8:not(.elementor-motion-effects-element-type-background),
        .elementor-5733 .elementor-element.elementor-element-3fa2ab8 > .elementor-motion-effects-container > .elementor-motion-effects-layer   {

            background-image: url('/uploads/banners/{{$banner}}');
            background-repeat: no-repeat;
            background-position: center top;
            height: 400px;
            width: 100%;

        }
    </style>
</head>
<body data-rsssl="1" class="home page-template-default page page-id-4074 theme-avante woocommerce-no-js menu-transparent lightbox-black leftalign footer-reveal elementor-default elementor-page elementor-page-4074">
<div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000">
    <div class="loader-inner">
        <div id="loader">
            <div class="imgloading-container">
                <span style="background-image: url(/assets/new/images/index/loading_logo.jpg);"></span>
            </div>
            <img alt="loader image" src="/assets/new/images/index/loading_logo.jpg">
        </div>
    </div>
    <div class="loader-section section-fade">
    </div>
    <div class="loader-close-button" style="display: none;">
        <span class="screen-reader-text">Close</span>
    </div>
</div>
<div id="perspective" style="">
    <!-- Begin mobile menu -->
    <a id="btn-close-mobile-menu" href="javascript:;"></a>
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-content">
            <div class="menu-main-menu-container">
                <ul id="mobile_main_menu" class="mobile-main-nav">
                    @include('includes.fronttopmenu')

                </ul>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">
        <div id="elementor-header" class="main-menu-wrapper">
            <div data-elementor-type="wp-post" data-elementor-id="3141" class="elementor elementor-3141" data-elementor-settings="[]">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <!--<section class="elementor-element elementor-element-29ca933 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-element elementor-element-74ee551 elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-01f3d0b elementor-icon-list--layout-inline elementor-mobile-align-center elementor-tablet-align-center elementor-widget elementor-widget-icon-list"  data-element_type="widget"  data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                                        <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i></span>
                                                        <span class="elementor-icon-list-text">+605-501-9888</span>

                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                        <a href="mailto:info@majuperak.com.my"><span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="far fa-envelope"></i></span>
                                                        <span class="elementor-icon-list-text">info@majuperak.com.my</span>
                                                        </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-16c268c elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f2226e3 elementor-widget__width-auto elementor-hidden-phone elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button"  data-element_type="widget"  data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                        <i aria-hidden="true" class="far fa-comment"></i></span>
                                                        <span class="elementor-button-text">Enquiry</span>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>-->
                        <section class="elementor-element elementor-element-4398f8f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-f49fd9c elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-419171e elementor-widget elementor-widget-image" >
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <a data-elementor-open-lightbox="" href="{{ URL::to('cms') }}">
                                                                <img src="/assets/new/images/index/logo.png" width="228" height="54" class="attachment-full size-full" alt="Lien Hoe Corporation Berhad"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-60aa1ba elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-bdc46b3 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-avante-navigation-menu"  data-element_type="widget"  data-widget_type="avante-navigation-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="themegoods-navigation-wrapper menu_style1">
                                                            <div class="menu-main-menu-container">
                                                                <ul id="nav_menu40" class="nav">
                                                                    @include('includes.fronttopmenu')
                                                                    <li class='menu-item'><a href="#"></a>
                                                                        <ul class="sub-menu">

                                                                        </ul>
                                                                    </li>
                                                                    <li class='menu-item'><a href="#"></a>
                                                                        <ul class="sub-menu">

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--<div class="elementor-element elementor-element-4639a93 elementor-widget__width-auto elementor-widget elementor-widget-avante-search"  data-element_type="widget"  data-widget_type="avante-search.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="avante-search-icon">
                                                            <a data-open="tg_search_4639a93" href="javascript:;"><i aria-hidden="true" class="fas fa-search"></i></a>
                                                        </div>
                                                        <div id="tg_search_4639a93" class="avante-search-wrapper">
                                                            <div class="avante-search-inner">
                                                                <form id="tg_search_form_4639a93" class="tg_search_form autocomplete_form" method="get" action="#" data-result="autocomplete_4639a93" data-open="tg_search_4639a93">
                                                                    <div class="input-group">
                                                                        <input id="s" name="s" placeholder="Search for anything" autocomplete="off" value="">
                                                                        <span class="input-group-button">
                                                                        <button aria-label="Search for anything" type="submit"><i aria-hidden="true" class="fas fa-search"></i></button>
                                                                        </span>
                                                                    </div>
                                                                    <br class="clear">
                                                                    <div id="autocomplete_4639a93" class="autocomplete" data-mousedown="false">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="elementor-element elementor-element-fbb8940 elementor_mobile_nav elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon"  data-element_type="widget"  data-widget_type="icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-wrapper">
                                                            <a class="elementor-icon" href="javascript:;">
                                                                <i aria-hidden="true" class="fas fa-ellipsis-v"></i></a>
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
        </div>


        <!-- Begin content -->
        <div id="page-content-wrapper" class="">
            <div class="inner">

                <!-- Begin main content -->
                <div class="inner-wrapper">
                    <div class="sidebar-content fullwidth">
                        <div data-elementor-type="wp-page" data-elementor-id="5733" class="elementor elementor-5733" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-element elementor-element-3fa2ab8 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="3fa2ab8" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;}">
                                        <div class="elementor-background-overlay">
                                        </div>
                                        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 700 10" preserveaspectratio="none">
                                                <path class="elementor-shape-fill" d="M350,10L340,0h20L350,10z"></path>
                                            </svg>
                                        </div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-40e67d2 elementor-column elementor-col-50 elementor-top-column" data-id="40e67d2" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-743f879 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="743f879" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h1 class="elementor-heading-title elementor-size-default"> @if (!(Request::is('/')))  Bursa Announcements @else Investor Relations @endif</h1>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8ed8d57 elementor-widget elementor-widget-text-editor" data-id="8ed8d57" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <div class="lqd-lines split-unit lqd-unit-animation-done">
                                                                            We are continuously identifying new and diverse revenue streams and tapping new feeder market.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--<div class="elementor-element elementor-element-c72b7a7 elementor-view-stacked elementor-widget__width-auto elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c72b7a7" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="icon.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-wrapper">
                                                                        <a class="elementor-icon" href="#" target="_blank">
                                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                            <!--<div class="elementor-element elementor-element-c155751 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="c155751" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <span class="elementor-heading-title elementor-size-default"><a href="#" target="_blank">learn more about us</a></span>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0a79024 elementor-column elementor-col-50 elementor-top-column" data-id="0a79024" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-79c5f49 elementor-absolute elementor-widget elementor-widget-image" data-id="79c5f49" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:360,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_disable&quot;:&quot;mobile&quot;,&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="314" height="314" src="/assets/new/upload/home3_oval_bg.png" class="attachment-full size-full" alt="">
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

            @yield('content')

            <!-- Begin main content -->
                <div class="inner-wrapper">
                    <div class="sidebar-content fullwidth">
                        <div data-elementor-type="wp-page" data-elementor-id="4708" class="elementor elementor-4708" data-elementor-settings="[]">

                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-element elementor-element-cafac80 elementor-section-stretched elementor-section-height-min-height  elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="cafac80" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-cafac80 elementor-column elementor-col-100 elementor-top-column" data-id="cafac80" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap">
                                                        <div class="elementor-widget-wrap">
                                                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d994.1465376627762!2d101.077996!3d4.667633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ce8f64d966044e0!2sMajuperak%20Holdings%20Berhad!5e0!3m2!1sen!2smy!4v1603374302125!5m2!1sen!2smy" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                                                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q={{ $page->right_block1_content }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

            </div>
        </div>


    </div>
</div>
@include('includes.frontfooter')
@include('includes.frontscripts')
</body>

</html>

{{--!1m14--}}
{{--    !1m8--}}
{{--        !1m3--}}
{{--            !1d994.1465376627762--}}
{{--            !2d101.077996--}}
{{--            !3d4.667633--}}
{{--        !3m2--}}
{{--            !1i1024--}}
{{--            !2i768--}}
{{--        !4f13.1--}}
{{--        !3m3--}}
{{--                !1m2--}}
{{--                    !1s0x0%3A0x2ce8f64d966044e0--}}
{{--                    !2sMajuperak%20Holdings%20Berhad--}}
{{--        !5e0--}}
{{--!3m2--}}
{{--!1sen--}}
{{--!2smy--}}
{{--!4v1603374302125--}}
{{--!5m2--}}
{{--!1sen--}}
{{--!2smy--}}