@extends('layouts.front')
@section('content')
                   
<!-- Info white-->
                                         
@foreach ($profiles as $k => $profile)
@if ($k < 2)

<!-- Begin each blog post 1-->
<div class="col-md-4"></div>
                                <div class="col-md-4">    
                                        @include('includes.profile_loop')
                                    </div><!-- end col-md-4-->
                          <!-- End each blog post -->
              
                <div class="col-md-4"></div>
                <br class="clear"><!-- end col-md-4-->
@endif
@endforeach
<?php
$tempprofiles= $profiles->slice(2);
$chunks = $tempprofiles->chunk(3);
$temp = $chunks->last();
?>
 
@foreach ($chunks as $chunk)
<div class="row">   
@if ($chunk->count() % 3 == 0)
        
    @foreach ($chunk as $profile)
    <div class="col-md-4">    

        @include('includes.profile_loop')


    </div>
    @endforeach

    @elseif ($chunk->count() % 2 == 0)
    <div class="col-md-2"></div>
    @foreach ($chunk as $profile)
    <div class="col-md-4">    

        @include('includes.profile_loop')


    </div>
    @endforeach

    @elseif ($chunk->count() % 1 == 0)
    <div class="col-md-4"></div>
    @foreach ($chunk as $profile)
    <div class="col-md-4">    

        @include('includes.profile_loop')


    </div>
    @endforeach
    
    @endif  
</div>
  
@endforeach
        <!-- End Info Resalt-->
        
@stop