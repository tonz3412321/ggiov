@extends('layouts.master' , ['title' => 'Sign-up'])

@section('custom_css')
	@parent
	@section('title', 'Signup as page-Billing and Legal')

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
				<div class="row"><span class="options-steps ">1</span> Options </div>
			</div>
			<div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
				<div class="row"><span class="options-steps ">2</span> Personal Info </div>
			</div>
			<div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">    
				<div class="row"><span class="options-steps selected">3</span> Billing & Legal</div>
			</div>
			<div class="WhyChoose col-xs-12 col-md-3 col-lg-3 col-sm-3">
				<div class="row"><span class="options-steps">4</span> Let's Get Started!</div>
			</div>
			<br/>
			<br/>
			<br/>
			<h3>Please Complete the Form Below to Get Started!</h3>  
		
      		<h4 class="">Name and Address</h4>  

			<form role="form" method="post" action="{{ action('SignupAsPageController@postBillingAndLegal') }}">
				<input type="hidden" value="{{$payment_options}}" name="payment_options">
				

			@if ($payment_options === '0')
				<div class="form-group col-xs-3">
					<label>Card Type and Number</label>
					<select name="card_type" class="form-control" required>
						<option value="">Type</option>
						<option value="visa">Visa</option>
						<option value="master card">Master Card</option>
						<option value="american express">American Express</option>
						<option value="discovery">Discovery</option>
					</select>	
				</div>

				<div class="form-group col-xs-4">
					<label>&nbsp;</label>
					<input class="form-control" name="card_number" required placeholder="Number" type="text">
				</div>	

				<div class="form-group col-xs-2">
					<label>&nbsp;</label>
					<input class="form-control" name="card_ccv" required placeholder="CCV" type="text">
				</div>	
				<div class="form-group col-xs-3">
					<label>Total :</label>
					<input class="form-control" name="total" disabled value="${{$total}}" type="text">
				</div>	


				<div class="form-group col-xs-3">
					<label>Expiration</label>
					<select name="card_expiration" class="form-control" required>
						<option value="">Month</option>
						<option value="1">January</option>
						<option value="2">Feburary</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>	
				</div>

				<div class="form-group col-xs-4">
					<label>&nbsp;</label>
					<select name="card_year" class="form-control" required>
						<option value="">Year</option>
						@for ($i = date("Y"); $i > date("Y") - 10; $i--)
						    <option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>	
				</div>

			@else
				<div class="form-group col-xs-9">
					<label>&nbsp;</label>
					<img  src="{{ URL::asset('assets/check_sample.jpg') }}">
				</div>
				<div class="form-group col-xs-3">
					<label>Total :</label>
					<input class="form-control" name="total" disabled value="${{$total}}" type="text">
				</div>	
				<div class="form-group col-xs-12">
					<label>&nbsp;</label>
				</div>
				<div class="form-group col-xs-3">
					<input class="form-control" name="routing_number" required placeholder="Routing Number" type="text">
				</div>

				<div class="form-group col-xs-4">
					<input class="form-control" name="account_number" required placeholder="Account Number" type="text">
				</div>	

				<div class="form-group col-xs-2">
					<input class="form-control" name="check_number" required placeholder="Check #" type="text">
				</div>	

				<div class="form-group col-xs-4">
					<input class="form-control" name="bank_name" required placeholder="Check #" type="text">
				</div>	
				<div class="form-group col-xs-1">
					<input class="form-control" name="understand" required type="checkbox">
				</div>
				<div class="form-group col-xs-4">
					<p>I understand that the next check. 6 checks, or 12 checks will be processed as subsequent numbers of the check number submitted above.</p>
				</div>	

			@endif

				<br>
				<div class="form-group col-xs-6">
					<label>Billing Name and Address (Edit if needed)</label>
					<input type="text" name="billing_firstname" value="{{$persnal_info_data['firstname']}}" placeholder="Firstname" required class="form-control" >
				</div>	
			
				<div class="form-group col-xs-6">
					<label> &nbsp;</label>
					<input type="text" name="billing_lastname" value="{{$persnal_info_data['lastname']}}" placeholder="Lastname" required class="form-control " >
				</div>	

				<div class="form-group col-xs-12">
					<input class="form-control" name="street_address"  value="{{$persnal_info_data['street_address']}}"  placeholder="Street Address" required type="text">
				</div>

				<div class="form-group col-xs-12">
					<input class="form-control" name="city" value="{{$persnal_info_data['city']}}" required placeholder="City" type="text">
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
					<input class="form-control" name="zip" value="{{$persnal_info_data['zip']}}" required placeholder="Zip" type="text">
				</div>	

				<input id="form_billing_and_legal_btn" type="submit" value="" style="display: none;"/>

			</form>
			@if ($payment_options === '0')
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			@else
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			@endif
			<h3>YCA Legal Disclosures</h3>

			<textarea rows="7" cols="102" disabled style="resize: vertical;">
DISCLAIMER

 

ELECTRONIC SIGNATURE

By checking the box on our application form that states: "By checking this box and providing my Social Security Number I certify that I am at least 19 years of age, acknowledge that I have read the legal disclosures, and give my electronic signature and limited power of attorney for Your Credit Alliance to perform work on my behalf" you are representing and agreeing that you accept all terms and conditions as if you had physically provided your signature.

LIMITED POWER OF ATTORNEY

This is a Limited Power of Attorney providing Your Credit Alliance with permission to represent you as your disclosed or undisclosed agent when writing, signing, and sending letters to the credit bureaus and other parties as deemed appropriate and in accordance with the purposes described in this Agreement.

You may cancel your electronic authorization and your Limited Power of Attorney at any time by sending Your Credit Alliance an e-mail stating that you retract your electronic authorization. Without this electronic authorization and Limited Power of Attorney, Your Credit Alliance is unable to represent you, and canceling it will terminate this Agreement.

SERVICE 

Your Credit Alliance agrees to help and assist Customer in the credit repair process. That process includes removing obsolete, incorrect, misleading, inaccurate, unknown, and unverifiable information from your credit reports, where possible. Your Credit Alliance will act on Customer’s behalf under federal law to have such information removed or modified on your credit reports. Your Credit Alliance will also work with their clients to have positive items added to Customer’s credit reports.

GUARANTEE

We offer a full refund for any clients that do not receive any negative items removed from their credit report at the completion of a 6 month or 12 month plan. Our clients will also get a full refund If there are not any negative items removed after we have worked on a case for 2+ months. If a previously deleted negative item reappears on our clients report we will take remove the item again at no charge. This is a no questioned asked no hassle money back guarantee. With our money back guarantee and no upfront setup charges it is clear to see that it is important to remove any risk on our clients end.

OUR CONTACT INFORMATION
Your Credit Alliance 1 Tara Boulevard Suite 200 Nashua NH 03062  800-224-0407 FREE local (603) 874-1466 fax (603) 841-3661

OUR CANCELLATION POLICY

Our clients may cancel our services at anytime. If a clients cancels in the middle or end of the month, that client will be billed the following month for the services rendered and no other charges will follow. For those who sign up for a 6 month or 12 month understand that the savings start during the 4th month for a 6 month plan and the 6th month for a 12 month plan. Canceling prior to the month the  savings begin will not initiate an adjustment of the previous months of paid services. Those who signed up with a friend or a spouse will terminate the 20% discount as soon as one of the group cancels.

RIGHT OF CANCELLATION

You may cancel this Agreement without penalty or obligation at any time before midnight on the fifth day following the date on which you signed this agreement. See the attached Notice of Cancellation form for an explanation of this right.

DISCOUNTS

While we pride ourselves in offering our customers the lowest possible prices on our services, we feel we must do even more for our friends in the military and special forces.

We fully understand and fully support the hard work, dedication, and the sacrifices made by members of the U.S. military and Special Forces. We understand the financial sacrifices made while serving our country. If you are an active member in the following branches (U.S. Army, U.S. Navy, U.S. Air Force, U.S. Marines, U.S. Coast Guard) please provide us with your valid military identification and you will receive a monthly discount of 20% off our regular price.
Sign up with a friend or your Spouse and your friend/spouse will receive a monthly discount of 20% off our regular price. 
 

CUSTOMER AGREEMENT AND FEES

     As part of the Your Credit Alliance hereinafter referred to as YCA, Customer agrees to:

Assist YCA in the process of disputing items by providing the necessary information to YCA to expedite the credit repair process.
Forward to YCA all correspondence [investigation results, credit reports, score reports, notification letters, etc.] received from the three major credit bureaus, Equifax, TransUnion, and Experian.
Notify Your Credit Alliance of any change in personal information, including: address, change in name, change in email address, or change in any other pertinent information that will affect Your Credit Alliance’s ability to expedite services.
Read, accept, and be bound by the terms and conditions set forth in this agreement.
Authorize YCA to discuss your case with your spouse.
The YCA Warranty will apply only if you meet the above conditions.
Client agrees to pay a first work fee of $125 at the time of sign up. The first work YCA shall perform is not credit repair. The First Work includes initial consultation analysis and file set up.
Client agrees to pay for one of our 3 plans. Plan A. $125 a month with no contractual obligation. Plan B. 6 month plan $125 payment for the first 4 months and $95 payment for the last 2 months. Plan C. 12 month plan $125 payment for the first 6 months and $73 payment for the last 6 months. Client agrees to pay for our services each month. month. Fist payment will be processed 30 days after the sign up date and on the same date every pertaining month to follow by credit card, debit card or ACH direct withdrawal from a savings or checking account. A 20% discount on all fees will be provided for Active Military 
and Family/Friends of a currently/previously enrolled members. 
Client shall pay YCA a first work fee of $125. The Client further agrees to render payment to YCA for the monthly services described in the previous agreement. The first monthly service fee is billed 30 days from the signing date of this contract. Subsequent monthly service fees will be billed monthly on the same calendar date. If a scheduled payment is not satisfied, YCA may, at its discretion, suspend any further work on the Client’s account.
YCA will charge a $10 fee for any bounced payment. YCA’S Warranty will be considered null and void in the event of any missed payments. Performance bonus: if YCA attains a 100% correction / deletion rate prior to the completion of this contract, then the remaining payments under this contract will become due. YCA at its discretion may allow the client to continue these remaining payments under the above stated payment plan.
Client also understands and agrees that you are billed by YCA for services rendered, not for a specific outcome.
Clients agree to mail all correspondence received from YCA within three days to the appropriate agencies, and further agrees to mail all correspondence received from the credit bureaus in their original form to YCA within three days of their receipt by client.
Client further agrees to notify YCA if client has not received answers to correspondence mailed to the credit bureaus within sixty days of the last mailing.
YCA makes no other express or implied promises or guarantees as to the result or outcome of its services except as outlined in this agreement.

NEW HAMPSHIRE SURETY BOND INFORMATION

You, the consumer, have the right to proceed against our Credit Services Organization Surety Bond for any violation of the provisions of Section 359-D:8 and 359-D:11, New Hampshire state regulations, Chapter 359-D. For information or to make a complaint contact; Travelers Casualty and Surety Company One Tower Square Hartford CT 06183 

CONSUMER CREDIT FILE RIGHTS UNDER STATE AND FEDERAL LAW

You have a right to dispute inaccurate information in your credit report by contacting the credit bureau directly. However, neither you nor any credit repair company or credit repair organization has the right to have accurate, current, and verifiable information removed from your credit report. The credit bureau must remove accurate, negative information from your report only if it is over 7 years old. Bankruptcy information can be reported for 10 years.

You have a right to obtain a copy of your credit report from a credit bureau. You may be charged a reasonable fee. There is no fee, however, if you have been turned down for credit, employment, insurance, or a rental dwelling because of information in your credit report within the preceding 60 days. The credit bureau must provide someone to help you interpret the information in your credit file. You are entitled to receive a free copy of your credit report if you are unemployed and intend to apply for employment in the next 60 days, if you are a recipient of public welfare assistance, or if you have reason to believe that there is inaccurate information in your credit report due to fraud.

You have a right to sue a credit repair organization that violates the Credit Repair Organization Act. You have the right to sue a credit services organization if it misleads you. This law prohibits deceptive practices by credit repair organizations.

You have the right to cancel your contract with any credit repair organization for any reason within five days from the date you signed it.

Credit bureaus are required to follow reasonable procedures to ensure that the information they report is accurate. However, mistakes may occur.

You may, on your own, notify a credit bureau in writing that you dispute the accuracy of information in your credit file. The credit bureau must then reinvestigate and modify or remove inaccurate or incomplete information. The credit bureau may not charge any fee for this service. Any pertinent information and copies of all documents you have concerning an error should be given to the credit bureau.

If the credit bureau's reinvestigation does not resolve the dispute to your satisfaction, you may send a brief statement to the credit bureau, to be kept in your file, explaining why you think the record is inaccurate. The credit bureau must include a summary of your statement about disputed information with any report it issues about you.

The Federal Trade Commission regulates credit bureaus and credit repair organizations. For more information contact:
The Public Reference Branch
Federal Trade Commission
Washington, D.C. 20580
 

NOTICE OF CANCELLATION

You may cancel this contract, without any penalty or obligation within 5 days from the date the contract is signed.

If you cancel, any payment made by you under this contract must be returned within 10 days following receipt by Your Credit Alliance of your cancellation notice. 

To cancel this contract, mail or deliver a signed and dated copy of this cancellation notice, or any other written notice, to  __Your Credit Alliance__  at  __1 Tara Boulevard Suite 200 Nashua NH 03062__  not later than midnight of the 5th day which begins after the date the contract is signed by you.

I hereby cancel this transaction.

Date:_____________

Signature:________________________

			</textarea>

			<h4>Please Check the Box Below:</h4>

			<div class="form-group col-xs-1">
				<input class="form-control" name="agreement" required  type="checkbox">
			</div>	

			<div class="form-group col-xs-11">
				<p>By way of checking this box I <span>{{$persnal_info_data['firstname']}}  {{$persnal_info_data['lastname']}}</span> confirm that I have read and agree to the legal discloure, I am 19 years old or greater and I offer a limited power of attorney and my electronic signature to Your Credit repair work on my behalf. I understand that Your Credit Alliance will email me a PDF formatted copy of the full legal disclosure via email shortly after I complete the enrolment process.</p>
			</div>	

			@if ($payment_options === '1')
			<div class="form-group col-xs-1">
				<input class="form-control" name="acknowledge" required  type="checkbox">
			</div>	
			<div class="form-group col-xs-11">
				<p>By providing your bank account information you authorize us to initiate either an electronic debit or to create and process a demaind draft for recurring monthly payments begining today to cover the first work fee. You acknowledge that payments may post to your account from 0-4 business days from your scheduled payment date. You also acknowledge that the origination of ACH transactions to your account must comply with the provisioning of United State law..</p>
			</div>	
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
@section('custom-javascript')
<script>$( document ).ready(function() {
	$('input[type=submit]').click(function(event) {
	   var buttonValue = event.target.value.trim().toUpperCase();
	   switch (buttonValue) {
	   	case 'CONTINUE' :
	   		onSubmitStep3();
	   	break;
	   }
	});

	var onSubmitStep3 = function () {
		
@if ($payment_options === '0')
		if (!$('input[name=agreement]')[0].checked) {
			return;
		}
@else
		if (!$('input[name=agreement]')[0].checked || !$('input[name=acknowledge]')[0].checked) {
			return;
		}
@endif

		
		$('#form_billing_and_legal_btn')[0].click();
	};

});</script>
@stop