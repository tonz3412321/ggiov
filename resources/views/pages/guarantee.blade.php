@extends('layouts.master' , ['title' => 'guarantee'])

@section('title', '')


@section('header')

    @section('upper-right')

        <div class="col-md-5 login">
            <input type="submit" class="btn btn-primary btn-s" value="GET STARTED">
            <input type="submit" class="btn btn-primary btn-s" value="AFFILIATE LOGIN ">
            <input type="submit" class="btn btn-primary btn-s" value="CLIENT LOGIN ">
        </div>

    @stop
@stop



@section('main-content')

    @section('banner')
        @include('partials._banner')
    @stop


<div class="row">
        <div class="col-md-8">
            <header class="post-header fix">
                <h1 class="posttitle">GUARANTEE</h1>
            </header>

            <br />

            <div class="entry-container fix justify">

                <div class="entry fix">
                    <p> We offer a full refund for any clients that do not receive any negative items removed from their credit report at the completion of a 6 month or 12 month plan. Our clients will also get a full refund If there are not any negative items removed after we have worked on a case for 2+ months. If a previously deleted negative item reappears on our clients report we will take remove the item again at no charge.</p>

                </div>

              </div>


        </div>
        <div class="col-md-4">

            @include('partials._sidebar')

        </div>
    </div>




@stop

@section('footer')
@section('upper')
    <div class="strip">
        <div class="container">
            <span>START BUILDING YOUR CREDIT SCORE NOW</span><a href="#">CONTACT US</a>
        </div>
    </div>
@stop
@parent
@stop

@stop