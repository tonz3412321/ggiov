@extends('layouts.master' , ['title' => 'prices'])

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
                <h1 class="posttitle">PRICING</h1>
            </header>

            <br />

            <div class="entry-container fix justify">

                <div class="entry fix">

                    <h3>DISCOUNTS</h3>
                    <p> While we pride ourselves in offering our customers the lowest possible prices on our services, we feel we must do even more for our friends in the military and special forces.</p>

                       <p> We fully understand and fully support the hard work, dedication, and the sacrifices made by members of the U.S. military and Special Forces. We understand the financial sacrifices made while serving our country. If you are an active member in the following branches (U.S. Army, U.S. Navy, U.S. Air Force, U.S. Marines, U.S. Coast Guard) please provide us with your valid military identification and you will receive a monthly discount of 20% off our regular price.</p>

                        <p>Sign up with a friend or your Spouse and your friend/spouse will receive a monthly discount of 20% off our regular price.</p>

                        <p> We understand that some or our clients may need an extended time period before they reach their credit goals so we offer discounts on a 6 month plan and extend the discount further on a 12 month plan. Active military personnel not only receive a military discount, they also receive our extended service discount. To receive a Friend/Family you must sign up after a current/past enrolled member signs up. Your family member or friend will receive a code when they sign up. You can ask them for the code directly or contact us. The first work YCA shall perform is not credit repair. The First Work includes initial consultation analysis and file set up.</p>

                    <br/>

                    <h3>PLANS</h3>

                    <p><strong>Plan A.</strong> Month to month plans are for those who just a few negative items to remove.</p>
                    <ul>
                        <li>Monthly Client:  $125 first work fee: $125 per month: Cancel any time.</li>
                        <li>Monthly Friend/Family Member:  $100 first work fee: $100 per month: Cancel any time.</li>
                        <li>Monthly Active Military: $100 first work fee: $100 per month: Cancel any time.</li>
                    </ul>
                    <br/>

                    <p><strong>Plan B.</strong> Credit restoration for those who need further assistance and would like to save money.</p>
                    <ul>
                        <li>6 Month Plan Client:  $125 first work fee: $125 payment per month for the next 4 months and $95 per month for the last 2 months</li>
                        <li>6 Month Plan for a Friend/Family Member $100 first work fee: $100 payment per month for the next 4 months and $76 per month for the last 2 months.</li>
                        <li>6 Month Plan for Active Military: $100 first work fee: $100 payment per month for the next 4 months and $76 per month for the last 2 months.</li>
                    </ul>
                    <br/>

                    <p><strong>Plan C.</strong> 12 month plans are for those who have a high number of negative items and would like to receive our best rate.</p>
                    <ul>
                        <li>12 Month Plan Client:  $125 first work fee: $125 payment per month for the next 6 months and $73 per month for the last 6 months</li>
                        <li>12 Month Plan for a Friend/Family Member $100 first work fee: $100 payment per month for the next 6 months and $58 per month for the last 6 months.</li>
                        <li>12 Month Plan for Active Military: $100 first work fee: $100 payment per month for the next 6 months and $58 per month for the last 6 months.</li>
                    </ul>
                    <br/>

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