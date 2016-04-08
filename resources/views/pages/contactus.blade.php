@extends('layouts.master' , ['title' => 'contactus'])

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
                <h1 class="posttitle">Contact Us</h1>
            </header>

            <br />

            <div class="entry-container fix justify">

                <div class="row">

                    <div class="col-md-4">
                            <h4>Your Credit Alliance</h4>
                            <p>1 Tara Boulevard Suite 200 </br>
                            Nashua NH 03062 </br>
                            Tool Free 800-224-0407 </br>
                            Local (603)874-1466 </br>
                            Fax (603)841-3661</p>

                            <br/>

                            <strong>Email Contacts</strong>
                            <p>1 Tara Boulevard Suite 200 </br>
                                Nashua NH 03062 </br>
                                Tool Free 800-224-0407 </br>
                                Local (603)874-1466 </br>
                                Fax (603)841-3661</p>
                    </div>

                    <div class="col-md-8">
                        <img height="100%" width="100%" src="/img/contac10.jpg" />
                    </div>

                </div>

                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <iframe
                                width="100%"
                                height="500px"
                                frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key= AIzaSyBHygLuzQVvd6cvXPhjt_SnZcoWszo4uA0
    &q=1+Tara+Blvd+%23200,+Nashua,+NH+03062,+USA" allowfullscreen>
                        </iframe>
                    </div>
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