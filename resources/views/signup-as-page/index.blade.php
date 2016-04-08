@extends('layouts.master' , ['title' => 'Sign-up'])

@section('custom_css')

	<link href="{{ URL::asset('css/signup-as-page/style.css') }}" rel="stylesheet">
@stop

@section('header')
    @parent
		@section('upper-right')

			<div class="col-md-5 login-signup-as">

	        <div class="form-group in-line">
	          <label class="control-label" for="input-username">Username</label>
	          <input type="text" name="username" id="input-username" class="form-control" />
	        </div>
	        <div class="form-group in-line2">
	          <label class="control-label" for="input-password">Password</label>
	          <input type="text" name="password" id="input-password" class="form-control" />
	        </div>
	        <input type="submit" class="btn btn-primary btn-s" value="CLIENT LOGIN">

			</div>

		@stop
@stop




@section('main-content')
  <div class="container">
    <div class="row">

    	<div class="col-md-4  sidebar-right">
      	<br/>    
      	<br/>    
      	<br/>    
      	<br/>    
      	<br/>  
      	<br/>
      	<br/> 
        <div class="testimonials left-side-portion">
        	<h2>Our Packages</h2>
					<p>Plan A.</p>
					<p>Month to month plans are for those who just a few negative items to remove.</p>
					<p>Monthly Client:</p>
					<p>$125 first work fee: $125 per month: Cancel any time.</p>
					<p>Monthly Friend/Family Member: $100 first work fee:</p>
					<p>$100 per month: Cancel any time.</p>
					<p>Monthly Active Military: $100 first work fee:</p>
					<p>$100 per month: Cancel any time.</p>
					<br/>
					<p>Plan B.</p>
					<p>Credit restoration for those who need further assistance and would like to save money.</p>
					<p>6 Month Plan Client:</p>
					<p>$125 first work fee:</p>
					<p>$125 payment per month for the next 3 months and $95 per month for the last 2 months</p>
					<p>6 Month Plan for a Friend/Family Member</p>
					<p>$100 first work fee:</p>
					<p>$100 payment per month for the next 3 months and $76 per month for the last 2 months.</p>
					<br/>
					<p>Plan C.</p>
					<p>12 month plans are for those who have a high number of negative items and would like to receive our best rate.</p>
					<p>12 Month Plan Client :</p>
					<p>$125 first work fee:</p>
					<p>$125 payment per month for the next 5 months and $73 per month for the last 6 months.</p>
					<p>12 Month Plan for a Friend/Family Member</p>
					<p>$100 first work fee:</p>
					<p>$100 payment per month for the next 5 months and $58 per month for the last 6 months.</p>
					<p>12 Month Plan for Active Military:</p>
					<p>$100 first work fee:</p>
					<p>$100 payment per month for the next 5 months and $58 per month for the last 6 months.</p>
					<br/>
					<p>First work fee:</p>
					<p>The first work YCA shall perform is not credit repair.</p>
					<p>The First work includes initial consultation analysis and file set up.</p>
        </div>
      	        
        <div class="testimonials right-side-portion">
        		<h2>Billing Cycle</h2>	
        		<p>Each month your payment will be processed for the services provided during the previous month and will be processed exactly 30 day from your sign up date.</p>
        		<p>Today's date is.</p>
						<p>Your payment will be processed on?</p>
						<p>If your payment date happens to fall on a holiday</p>
						<p>the payment will be processed on the next business day.</p>
        </div>
       
      </div>


      <div class="col-md-8 steps sidebar-left">
      	<br/>    
      	<br/>    
      	<br/>    
      	<br/>    
      	<br/>  
      	<br/>
      	<br/> 
        <div class="why-choose-yca right-side-portion">
          <h2>Just 3 simple steps</h2></br>
          <div class="clearfix-10px"></div>
          <div class="clearfix-10px"></div>
          <div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
              <div class="row"><span class="options-steps selected">1</span> Options </div>
          </div>
          <div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
              <div class="row"><span class="options-steps ">2</span> Personal Info </div>
          </div>
          <div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">    
              <div class="row"><span class="options-steps">3</span> Billing & Legal</div>
          </div>
         	<div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
              <div class="row"><span class="options-steps">4</span> Let's Get Started!</div>
          </div>
          <br/>
          <br/>
          <br/>
      		<h3>Please Complete the Form Below to Get Started!</h3>  

      		<h2 class="signup-as-underline">Signing up as:</h2>  


      		<form class="radio-button-group-customer-type-signup" 
      			  id="form_signup_page" role="form" method="post" action="{{ action('SignupAsPageController@validatePromotionCode') }}">



					  <input type="radio" name="customer_type_signup" value="first time client" 
					  		{{($customer_type_signup == 'first time client')? 'checked' : ''}}> First time client <br>
					  <input type="radio" name="customer_type_signup" value="an affiliate partner"
					  		{{($customer_type_signup == 'an affiliate partner')? 'checked' : ''}}> An Affiliate Partner <br>
					  <input type="radio" name="customer_type_signup" value="friend / family member"
					  		{{($customer_type_signup == 'friend / family member')? 'checked' : ''}}> Friend/Family Member <br>
					  <input type="radio" name="customer_type_signup" value="active military member"
					  		{{($customer_type_signup == 'active military member')? 'checked' : ''}}> Active Military Member <br>
					

					<h2 class="how-you-heard-about-us">How you heard about us?</h2>  

						<select name="how_you_heard_about_us" required>
						  <option value="">Select</option>
						  <option value="billboard">Billboard</option>
						  <option value="other-outdoor-ad">Other Outdoor Ad</option>
						  <option value="better-business-bureau">Better Business Bureau</option>
						  <option value="internet-search">Internet Search</option>
						  <option value="mortgage-lender">Mortgage Lender</option>
						  <option value="client-referral">Client Referral</option>
						  <option value="auto-dealer">Auto Dealer</option>
						  <option value="coupon-in-the-mail">Coupon in the mail</option>
						  <option value="email">Email</option>
						  <option value="social-media">Social Media</option>
						  <option value="television">Television</option>
						  <option value="radio">Radio</option>
						  <option value="lawyer">Lawyer</option>
						  <option value="realtor">Realtor</option>
							<option value="call-center">Call Center</option>
							<option value="word-of-mouth">Word of mouth</option>
							<option value="accountant">Accountant</option>
							<option value="tax-preparer">Tax Preparer</option>
						</select>

				    <p>If you are a friend or family member of a current or past client, an active military or your received a promotional code Please enter it below. To receive our discount code you must first contact Your Credit Alliance with a proper military ID, or the client ID of your friend/family and we will provide you with the code from there.. If we are running a promotion and you received a code please enter it below now. </p>
					Promotion Code
					{{ csrf_field() }}
					<div>
						<input type="text" name="promotion_code"></div>
						<input type="submit" id="signup-as-page-btn" value="" style="display: none;">
					<br/>

			</form>
					
			<br/>
			<br/>
			<input type="submit" class="btn btn-s orange-button" value="CONTINUE">
        </div>  
      
      </div>

      
    </div>
  
  </div>
	  
@stop

@section('footer') 
	@parent
@show

@section('custom_javascripts')
<script>$( document ).ready(function() {
	$('input[type=submit]').click(function(event) {
	   var buttonValue = event.target.value.trim().toUpperCase();
	   switch (buttonValue) {
	   	case 'CONTINUE' :
	   		signupAsPageContinuebutton();
	   	break;
	   }
	});

	var discountField = false;
	var changePromotionCodeAttribute = function () {
		var options = null;
		$('input[name=customer_type_signup]').each(function () {
			if (this.checked) {
				options =  this.value;
			}
		});
		var promotionCode = $('input[name=promotion_code]');
		var parentElem = promotionCode.parent();
		switch (options) {
            case 'first time client':
            case 'an affiliate partner':
            	promotionCode.remove();
            	parentElem[0].innerHTML = '<input type="text" name="promotion_code" disabled>';
            	discountField = false;
                break;
            case 'friend / family member':
            case 'active military member':
               	promotionCode.remove();
            	parentElem[0].innerHTML = '<input type="text" name="promotion_code" required>';
            	discountField = true;
                break;
        }
	};
	
	$('input[name=customer_type_signup]').change(changePromotionCodeAttribute);
	changePromotionCodeAttribute();

	var signupAsPageContinuebutton = function () {

		if($("input[name = 'promotion_code']").val()=='' && $("input[name = 'promotion_code']").is(':enabled'))
		{
			$("input[name = 'promotion_code']").focus();
			alert('Promotion field is required');
		}
		else{
			var promotionCode = $('input[name=promotion_code]')[0].value;
			if (discountField) {
				$.ajax({
					type: "POST",
					url : "{{ action('SignupAsPageController@checkPromotionCode') }}",
					data : {
						promotion_code: promotionCode,
						_token: $("input[name = '_token']").val()

					}
				}).then(function (response) {
					if (response[0]) {
						$('#signup-as-page-btn')[0].click();
						alert('tama')
					} else {
						alert("It was a discount code invalid code please enter a valid code or click on the first time client option.");
					}
				});
			} else {
				$('#signup-as-page-btn')[0].click();
			}
		}

		
	};

});</script>
@stop