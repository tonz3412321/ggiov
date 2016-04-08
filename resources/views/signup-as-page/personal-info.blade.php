@extends('layouts.master', ['title' => 'Sign-up'])

@section('custom_css')
	@parent
	<link href="{{ URL::asset('css/signup-as-page/style.css') }}" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
				<div class="row"><span class="options-steps ">1</span> Options </div>
			</div>
			<div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
				<div class="row"><span class="options-steps selected">2</span> Personal Info </div>
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
			@if ($customer_type_signup === 'an affiliate partner')
      		<h2 class="signup-as-underline">Affiliate form</h2>  
      		@else 
      		<h4 class="">Name and Address</h4>  
      		@endif

			<form class="main-form-submit" role="form" method="post" action="{{ action('SignupAsPageController@postPersonalInfo') }}">
				{{ csrf_field() }}
				<div class="form-group col-xs-6">
					<input class="form-control" name="firstname" 
							required placeholder="First name" type="text"
							value="{{(isset($persnal_info_data['firstname'])) ? $persnal_info_data['firstname'] : ''}}" >
				</div>
				<div class="form-group col-xs-6">
					<input class="form-control" name="lastname" required placeholder="Last name" type="text"
							value="{{(isset($persnal_info_data['lastname'])) ? $persnal_info_data['lastname'] : ''}}" >
				</div>
				@if ($customer_type_signup !== 'an affiliate partner')
				<div class="form-group col-xs-12">
					<input class="form-control" name="street_address" required placeholder="Street Address" type="text"
							value="{{(isset($persnal_info_data['street_address'])) ? $persnal_info_data['street_address'] : ''}}">
				</div>
				<div class="form-group col-xs-12">
					<input class="form-control" name="city" required placeholder="City" type="text"
							value="{{(isset($persnal_info_data['city'])) ? $persnal_info_data['city'] : ''}}">
				</div>		
				<div class="form-group col-xs-3">
					<select name="state" class="form-control" required>
						<option value="">State</option>
						@foreach ($states as $state)
							@if ($state['key'] == $persnal_info_data['state'])
								<option value="{{ $state['key'] }}" selected >{{ $state['value'] }}</option>
							@else
							    <option value="{{ $state['key'] }}">{{ $state['value'] }}</option>
							@endif
						@endforeach
					</select>	
				</div>

				<div class="form-group col-xs-3">
					<input class="form-control" name="zip" required placeholder="Zip" type="text"
							value="{{(isset($persnal_info_data['zip'])) ? $persnal_info_data['zip'] : ''}}">
				</div>	


				<div class="form-group col-xs-3">
					<input class="form-control input-medium bfh-phone" name="dob" required placeholder="DOB" type="text" data-format="dd/dd/dddd"
							value="{{(isset($persnal_info_data['dob'])) ? $persnal_info_data['dob'] : ''}}">
				</div>	


				<div class="form-group col-xs-3">
					<input class="form-control input-medium bfh-phone" name="social_security" required placeholder="Social Security" type="text"
							data-format="ddd-ddd-dddd"
							value="{{(isset($persnal_info_data['social_security'])) ? $persnal_info_data['social_security'] : ''}}">
				</div>						
				@endif
				<div class="form-group col-xs-4">
					<label>Primary Phone</label>
					<input type="text" name="primary_phone" required class="form-control input-medium bfh-phone" data-format="(ddd) ddd-dddd"
						value="{{(isset($persnal_info_data['primary_phone'])) ? $persnal_info_data['primary_phone'] : ''}}">
				</div>	

				<div class="form-group col-xs-4">
					<label>Secondary Phone</label>
					<input type="text" name="secondary_phone" required class="form-control input-medium bfh-phone" data-format="(ddd) ddd-dddd"
						value="{{(isset($persnal_info_data['secondary_phone'])) ? $persnal_info_data['secondary_phone'] : ''}}">
				</div>	

				
				<div class="form-group {{($customer_type_signup === 'an affiliate partner') ? 'col-xs-6' : 'col-xs-10'}}">
					<label>Email Address</label>
					<input class="form-control" name="email" required placeholder="Email" type="email"
							value="{{(isset($persnal_info_data['email'])) ? $persnal_info_data['email'] : ''}}">
				</div>						
				@if ($customer_type_signup !== 'an affiliate partner')
				<div class="form-group col-xs-2">
					<label> &nbsp;</label>
					<input class="form-control" name="affiliate_id" placeholder="Affiliate ID" type="text"
						value="{{(isset($persnal_info_data['affiliate_id'])) ? $persnal_info_data['affiliate_id'] : ''}}">
				</div>	

				<div class="form-group col-xs-10">
					<input class="form-control" name="re_type_email" required placeholder="Re-Type Email" type="email">
				</div>		

				<input type="hidden" name="agreements_option" >
				<input type="hidden" name="credit_report_options" >
				<input type="hidden" name="enrollment_plan_option" >
				<input type="hidden" name="payment_options" >
				@else
				<div class="form-group col-xs-6">
					<label>Company</label>
					<input class="form-control" name="company" required placeholder="Company" type="text"
							value="{{(isset($persnal_info_data['company'])) ? $persnal_info_data['company'] : ''}}">
				</div>

				<div class="form-group col-xs-6">
					<label>Fax</label>
					<input class="form-control" name="fax"  placeholder="Fax" type="text"
							value="{{(isset($persnal_info_data['fax'])) ? $persnal_info_data['fax'] : ''}}">
				</div>

				<div class="form-group col-xs-6">
					<label>Website Url</label>
					<input class="form-control" name="website_url"  placeholder="Website Url" type="text"
							value="{{(isset($persnal_info_data['website_url'])) ? $persnal_info_data['website_url'] : ''}}">
				</div>

				<div class="form-group col-xs-12">
					<p>If you were referred to us by one of our current affiliate partners please enter the name below.</p>
				</div>

				<div class="form-group col-xs-6">
					<label>First name</label>
					<input class="form-control" name="referred_firstname"  placeholder="First name" type="text"
							value="{{(isset($persnal_info_data['referred_firstname'])) ? $persnal_info_data['referred_firstname'] : ''}}">
				</div>

				<div class="form-group col-xs-6">
					<label>Last name</label>
					<input class="form-control" name="referred_lastname"  placeholder="Last name" type="text"
							value="{{(isset($persnal_info_data['referred_lastname'])) ? $persnal_info_data['referred_lastname'] : ''}}">
				</div>
				<div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
				@endif
				<input id="form_personal_info_btn" type="submit" value="" style="display: none;"/>
			</form>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			@if ($customer_type_signup !== 'an affiliate partner')
			<h3>Services and Enrollement Plans</h3>
			<form role="form" method="post" action="{{ action('SignupAsPageController@postPersonalInfo') }}">
				<input id="agreement_option_submit" type="submit" style="display: none;">
				<p>
					<font face="Arial">
						<font size="2"><b>Agreements:</b><br></font>

						<p>
							<input name="agreement_checkbox" required  type="checkbox">
							<span class="small grey">
								<font size="2">Yes</font>
							</span>
							<font size="2">I understand that a 3 bureau report is a requirement to become enrolled. <br></font>
						</p>

							

						<p>
							<input name="agreement_checkbox" required  type="checkbox">
							<span class="small grey">
								<font size="2">Yes</font>
							</span>
							<font size="2">I understand the billing date below.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$billing_date}}
							</font>
						</p>
						
						<font size="2">
							<br>
							<br>
							<br>
							<b>Credit Report Options:&nbsp;&nbsp; </b><br>
							Rapid Repair is the fastest and most convenient way to get started on your 
							credit repair. <br>
							If you choose rapid repair you are giving us permission to act on your behalf 
							and pull your <br>
							credit report directly into our system. Rapid start will cost you absolutely 
							nothing and it will <br>
							enable us to get started right away. <b><br>
							</b> <br>
						</font>

						@if (isset($persnal_info_data['credit_report_options'])) 
							<input name="credit_report_options" value="0" tabindex="3" type="radio"
							{{($persnal_info_data['credit_report_options'] == '0') ? 'checked' : ''}}>
						@else 
							<input name="credit_report_options" value="0" tabindex="3" type="radio" checked>
						@endif

						<span class="blue">
							<font size="2">Yes I want Rapid
							</font>
						</span>
						<font size="2">
							<span id="QStitle0" class="blue"> Repair</span>
							<span id="QStitle0"> - We attain your credit reports</span><br>
						</font>

						@if (isset($persnal_info_data['credit_report_options'])) 
							<input name="credit_report_options" value="1" tabindex="3" type="radio"
							{{($persnal_info_data['credit_report_options'] == '1') ? 'checked' : ''}}>
						@else 
							<input name="credit_report_options" value="1" tabindex="3" type="radio" >
						@endif

						<font size="2">I 
							want to purchase and provide you with my report. 
							To order your credit report <a href="https://www.privacyguard.com/">CLICK HERE</a>&nbsp;&nbsp; 
						</font>
					</font>
				</p>

				<p>
					<font face="Arial">
						<p>
							<input name="agreement_checkbox" required  type="checkbox">

							<span class="small grey">
								<font size="2">Yes</font>
							</span>
							<font size="2">I agree to pay today ${{$first_work_fee}} first work fee<br>
								<br>
								Billing for my enrolment plan will begin next month.
								Choose Your Enrollment Plan.<br>
								<br>
							</font>
						</p>

						@if (isset($persnal_info_data['enrollment_plan_option'])) 
							<input name="enrollment_plan_option" value="plan_a" tabindex="3" type="radio"
							{{($persnal_info_data['enrollment_plan_option'] == 'plan_a') ? 'checked' : ''}}>
						@else 
							<input name="enrollment_plan_option" value="plan_a" tabindex="3" type="radio" checked>
						@endif

						<font size="2">Plan A. ${{$plan_a[0]}} Monthly payment until canceled.&nbsp; <br>
						</font>

						@if (isset($persnal_info_data['enrollment_plan_option'])) 
							<input name="enrollment_plan_option" value="plan_b" tabindex="3" type="radio"
							{{($persnal_info_data['enrollment_plan_option'] == 'plan_b') ? 'checked' : ''}}>
						@else 
							<input name="enrollment_plan_option" value="plan_b" tabindex="3" type="radio" checked>
						@endif

						<font size="2">Plan B. ${{$plan_b[0]}} Monthly payment&nbsp; for the next 4 months &amp; ${{$plan_b[1]}} per month for the last 2 months <br>
						</font>

						@if (isset($persnal_info_data['enrollment_plan_option'])) 
							<input name="enrollment_plan_option" value="plan_c" tabindex="3" type="radio"
							{{($persnal_info_data['enrollment_plan_option'] == 'plan_c') ? 'checked' : ''}}>
						@else 
							<input name="enrollment_plan_option" value="plan_c" tabindex="3" type="radio" checked>
						@endif

						<font size="2">Plan 
							C. ${{$plan_c[0]}} Monthly payment&nbsp; for the next 6 months &amp; ${{$plan_c[1]}} per month for the last 6 months 
						</font>
					</font>
				</p>


				<p>
					<font face="Arial">
						<b><font size="2">Payment Options:</font></b>
						<font size="2"><br>
						</font>
						@if (isset($persnal_info_data['credit_report_options'])) 
							<input name="payment_options" value="0" tabindex="3" type="radio"
							{{($persnal_info_data['payment_options'] == '0') ? 'checked' : ''}}>
						@else 
							<input name="payment_options" value="0" tabindex="3" type="radio" checked>
						@endif
						<font size="2"> 
							Signing up with a Credit Card<br>
						</font>
						@if (isset($persnal_info_data['credit_report_options'])) 
							<input name="payment_options" value="1" tabindex="3" type="radio"
							{{($persnal_info_data['payment_options'] == '1') ? 'checked' : ''}}>
						@else 
							<input name="payment_options" value="1" tabindex="3" type="radio" checked>
						@endif
						<font size="2"> 
							Signing up with a Check
						</font>
					</font>
				</p>

			</form>
			@endif
			<input type="submit" class="btn btn-s orange-button" value="Continue">
        </div>  
      
      </div>

      
    </div>
  
  </div>
	  
@stop

@section('footer') 
	@parent
@show
@section('javascript-libraries')
	@parent
	<script src="{{ URL::asset('cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js') }}"></script> 
@stop
@section('custom_javascripts')
<script>$( document ).ready(function() {
	$('input[type=submit]').click(function(event) {
	   var buttonValue = event.target.value.trim().toUpperCase();
	   switch (buttonValue) {
	   	case 'CONTINUE' :
	   		onSubmitStep2();
	   	break;
	   }
	});

	var onSubmitStep2 = function () {

		var listOption = ['agreements_option', 'credit_report_options', 'enrollment_plan_option', 'payment_options'];

		for (var i = 0, len = listOption.length; i < len; i++) {
			$('input:radio[name=' + listOption[i] + ']').each(function () {
				if (this.checked) {
					$('input:hidden[name=' + listOption[i] + ']').val(this.value);
				}
			});
		};

		var count_main_form_input = 0;
		$('.main-form-submit input[required], .main-form-submit select[required]').each(function () {
			if (this.value !== '') {
				count_main_form_input += 1;
			}
		});
		if (count_main_form_input < 12) {
			$('#form_personal_info_btn')[0].click();
		} else {
			var count_checks_agreement = 0;
			$('input:checkbox[name=agreement_checkbox]').each(function () {
				if (this.checked) {
					count_checks_agreement += 1;
				}
			});

			if (count_checks_agreement < 3) {
				$('#agreement_option_submit')[0].click();
			} else {
				$('#form_personal_info_btn')[0].click();
			}
		}
		
	};

});</script>
@stop