@extends('layouts.master' , ['title' => 'testimonials'])

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
            <h1 class="posttitle">Testimonials page</h1>
        </header>

        <div class="row">

            <div class="col-md-12">
                <h4>Submit your own Testimonial</h4>

                <form action="{{ route('post.testimonials') }}" method="post">

                    {{ csrf_field() }}

                    <div class="row form-group">
                        <div class="col-md-2">
                            <label class="control-label">Full Name</label>
                        </div>
                        <div class="col-md-9">
                            <input class="form-control required" name="full_name" placeholder="What is your full name?" required/>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-2">
                            <label class="control-label">Testimonials</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control required" name="testimonial" placeholder="What do you think about our company?" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-offset-2 col-md-9">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>


        <h4>Customer Testimonials ({{ $count }})</h4>

        @if(isset($testimonials))
            @foreach($testimonials as $testimonial)
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <p>"{{ $testimonial->testimonial }}"</p>
                        <i>-{{ $testimonial->full_name }}</i>
                    </div>
                </div>

            @endforeach

        @endif

        <hr />
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