@extends('layouts.master' , ['title' => 'home'])

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

@section('banner')
    @include('partials._banner')
@stop



@section('main-content')

    <div class="row">
      <div class="col-md-8 steps">
        <img src="assets/steps.jpg" alt="Steps"/>
        
        <div class="why-choose-yca">
          
          <h2>Why Choose Your Credit Alliance?</h2></br>
          <div class="clearfix-10px"></div>
          <div class="clearfix-10px"></div>
          <div class="WhyChoose col-xs-12 col-md-4 col-lg-4 col-sm-4">
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> 100% bonded</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> 24/7 Account Access</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Affiliate Referral Program</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Board Certified Credit Consultants</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Easy Set-Up Process</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Fico Specialists</div>
          </div>
          <div class="WhyChoose col-xs-12 col-md-4 col-lg-4 col-sm-4">
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Friends/Family Discounts</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Full Refund Guarantee</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Get Fast Results</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> High Website Security</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Licensed Credit Repair Company</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Low Rates</div>
          </div>
          <div class="WhyChoose col-xs-12 col-md-4 col-lg-4 col-sm-4">
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Military Discounts</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Mobile Friendly Dashboard</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> No Contractual Obligation</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Online Report Tracking</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Personalized Credit Strategy</div>
              <div class="row"><span class="Correct glyphicon glyphicon-ok"></span> Unlimited Disputes</div>
          </div>

        </div>
      
    <div class="row">
      <div class="col-md-12 badges">
        <img src="assets/badges.jpg" alt="badges">
        <div class="col-md-6 credit-score">
          <h3>What Determines Your Credit Score</h3>
          <img src="assets/fico_chart.png" alt="FICO Graph">
        </div>
        <div class="col-md-6 help">
          <h3>Helping clients remove questionable negative items, including:</h3>
          <div class="col-md-6">
            <ul style="color: red;">
              <li><span class="Correct glyphicon glyphicon-stop"></span> Bankrupptcies</li>
              <li><span class="Correct glyphicon glyphicon-stop"></span> Charge offs</li>
              <li><span class="Correct glyphicon glyphicon-stop"></span> Collection phone calls</li>
              <li><span class="Correct glyphicon glyphicon-stop"></span> Collections</li>
              <li><span class="Correct glyphicon glyphicon-stop"></span> Foreclosures</li>
              <li><span class="Correct glyphicon glyphicon-stop"></span> Identity thefts</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul style="color: red;">
                <li><span class="Correct glyphicon glyphicon-stop"></span> Inquiries</li>
                <li><span class="Correct glyphicon glyphicon-stop"></span> Judgments</li>
                <li><span class="Correct glyphicon glyphicon-stop"></span> Late payments</li>
                <li><span class="Correct glyphicon glyphicon-stop"></span> Repossessions</li>
                <li><span class="Correct glyphicon glyphicon-stop"></span> Student Loans</li>
                <li><span class="Correct glyphicon glyphicon-stop"></span> Tax Liens</li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 rights">
            <h3>Know your rights</h3>
            <div class="clearfix-10px"></div>
              <div class="col-md-4">
                <div class="col-md-3">
                  <img src="assets/pdf.png" width="70%" alt="Document">
                </div>
                <div class="col-md-8 pdfComment">
                  The Fair Credit Billing Act <span>(FCRA)</span>
                </div>
                </div>
                <div class="clearfix-10px"></div>
                <div class="col-md-4">
                  <div class="col-md-3">
                    <img src="assets/pdf.png" width="70%" alt="Document">
                  </div>
                  <div class="col-md-8 pdfComment">
                   Fair Credit Reporting Act <span>(FCRA)</span>
                  </div>
                </div>
                <div class="clearfix-10px"></div>
                <div class="col-md-4">
                  <div class="col-md-3">
                    <img src="assets/pdf.png" width="70%" alt="Document">
                  </div>
                  <div class="col-md-8 pdfComment">
                    The Fair Debt Collections Practices Act <span>(FDCPA)</span>
                  </div>
                </div>
        </div>
      </div>
    </div>
      </div>
      <div class="col-md-4 sidebar">
         @include('partials._sidebar')
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

@section('custom-javascript')
<script>$( document ).ready(function() {
	$('#header-element .login input[type=submit]').click(function(event) {
	   var buttonValue = event.target.value.trim().toUpperCase();
	   switch (buttonValue) {
	   	case 'GET STARTED' :
	   		getStarted();
	   	break;

	   	case 'AFFILIATE LOGIN' :
	   		affiliateLogin();
	   	break;

	   	case 'CLIENT LOGIN' :
	   		clientLogin();
	   	break;
	   }
	});

	var getStarted = function () {
		window.location = '{{URL::to("/signup-as-page")}}';
	};

	var affiliateLogin = function () {
		alert('affiliateLogin');
	};

	var clientLogin = function () {
		alert('clientLogin');
	};


});</script>
@stop