@extends('layouts.master')

@section('head')
	@parent
	@section('title', 'Signup as page-Congrats')

	<link href="{{ URL::asset('css/signup-as-page/style.css') }}" rel="stylesheet">
@stop

@section('header')
			
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




@section('main-content')
  <div class="container">
    <div class="row">
    	<br><br><br><br><br><br><br><br><br>

    	@if ($customer_type_signup === 'an affiliate partner')
    	<p>
			<span class="t-welcome-letter">
				Thank you for choosing Your Credit Alliance to be your affiliate partner. We would like to extend a warm welcome to you.<br><br>
			We will begin setting up your account  immediately. Once completed, you will receive an email notification with instructions how to access our client web portal. A board certified credit consultant will also attempt to contact you by telephone to formally welcome you to our service and to your commission structure and show you how to keep track of your clients credit reports. <br><br>
			We look forward to working with you. <br><br>
			</span>
		</p>
		<hr>
		<p>
			<span class="t-welcome-letter">Your Credit Alliance <br>
			1 Tara Boulevard Suite 200 <br>
			Nashua NH 03062<br>
			<br>
			</span>
		</p>	
    	@else

   
		<p>
			<span class="t-welcome-letter">
				Thank you for choosing Your Credit Alliance 
			would like to extend a warm welcome to you.<br><br>
			We will begin setting up your case immediately. Once completed, you will receive 
			an email notification with instructions how to access our client web portal. A 
			board certified credit consultant will also attempt to contact you by telephone 
			within two weeks to formally welcome you to our service and to go over the 
			welcome packet you will be receiving.<br><br>
			In the meantime, if we have not yet pulled your credit reports and attached them 
			to your case, please send us legible copies of your credit reports at your 
			earliest convenience. To obtain current copies please visit 
			</span>
			<font size="2" face="Arial">
				<a href="https://www.privacyguard.com/">https://www.privacyguard.com/</a> 
			</font>
			<span class="t-welcome-letter">and mail them to:</span>
		</p>

		<hr>
		<p>
			<span class="t-welcome-letter">Your Credit Alliance <br>
			1 Tara Boulevard Suite 200 <br>
			Nashua NH 03062<br>
			<br>
			You may print your receipt below. 
			</span>
		</p>

		<p>
			<span style="font-size: 11px; line-height: 12px">Your Credit Alliance<br>
			FOR YOUR RECORDS<br>
			Order Number: <font color="#FF0000"><b>1454717923-14688-2021</b></font><br>
			Order Date: <font color="#000"><b>{{$date_time}}</b></font><br>
			Service Plan: <font color="#000"><b>{{$service_plan}}</b></font><br>
			Price: <font color="#000"><b>${{$price}} first work fee / ${{$price}} monthly</b></font><br>
			<br>
			PAYMENT DUE DATE: <font color="#FF0000"><b>02/10/2016</b></font><br>
			AMOUNT TO PAY: <font color="#000"><b>${{$price}}</b></font><br>
			<br>
			-----------------------------------------------------------<br>
			<b>Client Information</b><br>
			-----------------------------------------------------------<br>
			Name: <font color="#000">{{$name}}</font><br>
			Address: <font color="#000">{{$address}}</font><br>
			Primary Phone: <font color="#FF0000"><span class="skype_c2c_print_container notranslate">{{$primary_phone}}</span><span id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" data-numbertocall="+16038895447" data-numbertype="paid" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span class="skype_c2c_textarea_span" id="non_free_num_ui"><img width="0" height="0" class="skype_c2c_logo_img" src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/call_skype_logo.png"><span class="skype_c2c_text_span">{{$primary_phone}}</span><span class="skype_c2c_free_text_span"></span></span></span></span> </font><br>
			Alternate Phone: @if($secondary_phone != '')
								 <font color="#FF0000"><span class="skype_c2c_print_container notranslate">{{$secondary_phone}}</span><span id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" data-numbertocall="+16038895447" data-numbertype="paid" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span class="skype_c2c_textarea_span" id="non_free_num_ui"><img width="0" height="0" class="skype_c2c_logo_img" src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/call_skype_logo.png"><span class="skype_c2c_text_span">{{$secondary_phone}}</span><span class="skype_c2c_free_text_span"></span></span></span></span> </font><br>
						 	 @endif	
			Email: <font color="#000">{{$email}}</font><br>
			Date of Birth: <font color="#000">{{$dob}}</font><br>
			SSN: <font color="#000">xxx-xxx-{{$ssn}}</font><br>
			<br>
			-----------------------------------------------------------<br>
			<b>Billing Information</b><br>
			-----------------------------------------------------------<br>
			Payment Method: ACH<br>
			ABA/Routing Number: <font color="#FF0000">122101706</font><br>
			Account Number: <font color="#FF0000">xxxxxxxx75</font><br>
			Account Type: <font color="#FF0000">CHECKING</font></span>
		</p>

		<p class="bodycopy"><strong><span style="font-size: 9pt">ELECTRONIC SIGNATURE</span></strong></p>

		<p class="bodycopy">
			<span style="font-size: 9pt">By checking the box on our 
			application form that states: "By checking this box and providing my Social 
			Security Number <br>
			I certify that I am at least 19 years of age, acknowledge that I have read the 
			legal disclosures, and give my electronic signature <br>
			and limited power of attorney for Your Credit Alliance to perform work on my 
			behalf" you are representing and agreeing that <br>
			you accept all terms and conditions as if you had physically provided your 
			signature.</span>
		</p>

		<p class="bodycopy">
			<strong><span style="font-size: 9pt">LIMITED POWER OF ATTORNEY</span></strong>
		</p>

		<p>
			<span style="font-size: 9pt">This is a Limited Power of Attorney providing Your Credit Alliance with permission to represent you as your disclosed or <br>
				undisclosed agent when writing, signing, and sending letters to the credit 
				bureaus and other parties as deemed appropriate and <br>
				in accordance with the purposes described in this Agreement.
			</span>
		</p>

		<p>
			<span style="font-size: 9pt">You may cancel your electronic authorization and 
			your Limited Power of Attorney at any time by sending Your Credit Alliance <br>
			an e-mail stating that you retract your electronic authorization. Without this 
			electronic authorization and Limited Power of <br>
			Attorney, Your Credit Alliance is unable to represent you, and canceling it will 
			terminate this Agreement.</span>
		</p>

		<p class="bodycopy"><b><span style="font-size: 9pt">SERVICE <br>
			<br>
			</span></b><span style="font-size: 9pt">Your Credit Alliance agrees to help and 
			assist Customer in the credit repair process. That process includes removing 
			obsolete,<br>
			incorrect, misleading, inaccurate, unknown, and unverifiable information from 
			your credit reports, where possible. Your Credit <br>
			Alliance will act on Customer’s behalf under federal law to have such 
			information removed or modified on your credit reports. <br>
			Your Credit Alliance will also work with their clients to have positive items 
			added to Customer’s credit reports. A monthly fee <br>
			will be charged for work provided by YCA the previous month</span>
		</p>

		<p class="bodycopy"><b><span style="font-size: 9pt">GUARANTEE</span></b></p>

		<p class="bodycopy"><span style="font-size: 9pt">We offer a full refund for any 
			clients that do not receive any negative items removed from their credit report 
			at the completion of <br>
			a 6 month or 12 month plan. Our clients will also get a full refund If there are 
			not any negative items removed after we have worked <br>
			on a case for 2+ months. If a previously deleted negative item reappears on 
			our&nbsp;clients report we will take remove the item again at <br>
			no charge. This is a no questioned asked no hassle money back guarantee. With 
			our money back guarantee and no upfront setup <br>
			charges it is clear to see that it is important to remove any risk on our 
			clients end. </span>
		</p>

		<p class="bodycopy"><strong><span style="font-size: 9pt">OUR CONTACT INFORMATION<br>
			</span></strong><span style="font-size: 9pt">Your Credit Alliance 1 Tara 
			Boulevard Suite 200 Nashua NH 03062 800-224-0407 local <span class="skype_c2c_print_container notranslate">(603) 874-1466</span><span id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" data-numbertocall="+16038741466" data-numbertype="paid" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span class="skype_c2c_textarea_span" id="non_free_num_ui"><img width="0" height="0" class="skype_c2c_logo_img" src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/call_skype_logo.png"><span class="skype_c2c_text_span">(603) 874-1466</span><span class="skype_c2c_free_text_span"></span></span></span></span> fax (603) 
			841-3661 </span>
		</p>

		<p class="bodycopy"><strong><span style="font-size: 9pt">OUR CANCELLATION POLICY</span></strong></p>
		<p class="bodycopy"><span style="font-size: 9pt">Our clients may cancel our 
		services at anytime. If a clients cancels in the middle or end of the month, 
		that client will be billed the <br>
		following month for the services rendered and no other charges will follow. For 
		those who sign up for a 6 month or 12 month <br>
		understand that the savings start during the 4th month for a 6 month plan and 
		the 6th month for a 12 month plan. Canceling prior <br>
		to the month the&nbsp; savings begin will not initiate an adjustment of the previous 
		months of paid services. Those who signed up with <br>
		a friend or a spouse will terminate the 20% discount as soon as one of the group 
		cancels. </span></p>

				<p class="bodycopy"><strong><span style="font-size: 9pt">RIGHT OF CANCELLATION<br>
		<br>
		You may cancel this Agreement without penalty or obligation at any time before 
		midnight on the fifth day following the <br>
		date on which you signed this agreement. See the attached Notice of Cancellation 
		form for an explanation of this right.</span></strong></p>

				<p class="bodycopy"><strong><span style="font-size: 9pt">DISCOUNTS</span></strong></p>

				<span style="font-size: 9pt">While we pride ourselves in offering our customers 
		the lowest possible prices on our services, we feel we must do even more for our
		<br>
		friends in the military and special forces.<br>
		<br>
		We fully understand and fully support the hard work, dedication, and the 
		sacrifices made by members of the U.S. military and Special <br>
		Forces. We understand the financial sacrifices made while serving our country. 
		If you are an active member in the following branches <br>
		(U.S. Army, U.S. Navy, U.S. Air Force, U.S. Marines, U.S. Coast Guard) please 
		provide us with your valid military identification and <br>
		you will receive a monthly discount of 20% off our regular price. </span>


		<p><span style="font-size: 9pt">Sign up with a friend or your Spouse and your 
		friend/spouse will receive a monthly discount of 20% off our regular price. <br>
		&nbsp;</span></p>

		<p class="bodycopy"><strong><span style="font-size: 9pt">CUSTOMER AGREEMENT
		</span></strong><span style="font-size: 9pt; font-weight: 700">AND FEES</span></p>

		<p><span style="font-size: 9pt">&nbsp;&nbsp; &nbsp;&nbsp;As part of the Your Credit Alliance
		<span class="rendered_qtext">hereinafter referred to as </span>YCA, Customer 
		agrees to:</span></p>

		<ol>
			<li><span style="font-size: 9pt">Assist YCA in the process of disputing 
			items by providing the necessary information to YCA to expedite the credit
			<br>
			repair process. </span></li>
			<li><span style="font-size: 9pt">Forward to YCA all correspondence 
			[investigation results, credit reports, score reports, notification letters, 
			etc.] <br>
			received from the three major credit bureaus, Equifax, TransUnion, and 
			Experian. </span></li>
			<li><span style="font-size: 9pt">Notify Your Credit Alliance of any change 
			in personal information, including: address, change in name, change in <br>
			email address, or change in any other pertinent information that will affect 
			Your Credit Alliance’s ability to expedite services. </span></li>
			<li><span style="font-size: 9pt">Read, accept, and be bound by the terms and 
			conditions set forth in this agreement. </span></li>
			<li><span style="font-size: 9pt">Authorize YCA to discuss your case with 
			your spouse. </span></li>
			<li><span style="font-size: 9pt">The YCA Warranty will apply only if you 
			meet the above conditions.</span></li>
			<li><span style="font-size: 9pt; background-color: #FFFFFF">Client agrees to 
			pay a first work fee of $125 at the time of sign up. </span>
			<span style="font-size: 9pt">
			<span style="font-family; color: rgb(0,0,0); font-style: normal; font-variant: normal">
			The first work YCA shall perform is not credit repair. <br>
			The First Work includes </span>initial consultation analysis and file set 
			up.</span></li>
			<li><span style="font-size: 9pt; background-color: #FFFFFF">Client agrees to 
			pay for one of our 3 plans. Plan A. $125 a month with no contractual 
			obligation. Plan B. 6 month plan <br>
			$125 payment for the first 4 months and $95 payment for the last 2 months. 
			Plan C. 12 month plan $125 payment for <br>
			the first 6 months and $73 payment for the last 6 months. Client agrees to 
			pay for our services each month. Fist payment will<br>
			be processed 30 days after the sign up date and on the same date every 
			pertaining month to follow by credit card, debit card or <br>
			ACH direct withdrawal from a savings or checking account. A 20% discount on 
			all fees will be provided for Active Military <br>
			and Family/Friends of a currently/previously enrolled members. </span></li>
			<li><span style="font-size: 9pt; font-family: Times New Roman">Client shall 
			pay YCA a first work fee of $125. The Client further agrees to render 
			payment to YCA for the monthly services <br>
			described in the previous agreement. The first monthly service fee is billed 
			30 days from the signing date of this contract. <br>
			Subsequent monthly service fees will be billed monthly on the same calendar 
			date. If a scheduled payment is not satisfied, <br>
			YCA may, at its discretion, suspend any further work on the Client’s 
			account. </span></li>
			<li><span style="font-family: Times New Roman"><span style="font-size: 9pt">
			YCA will charge a $10 fee for any bounced payment. YCA’S Warranty will be 
			considered null and void in the event of any <br>
			missed payments. Performance bonus: if YCA attains a 100% correction / 
			deletion rate prior to the completion of this contract, <br>
			then the remaining payments under this contract will become due. YCA at its 
			discretion may allow the client to continue these <br>
			remaining payments under the above stated payment plan.</span></span></li>
			<li><span style="font-size: 9pt">Client also understands and agrees that you 
			are billed by <span style="font-family: Times New Roman">YCA</span> for 
			services rendered, not for a specific outcome.</span></li>
			<li><span style="font-size: 9pt">Clients agree to mail all correspondence 
			received from <span style="font-family: Times New Roman">YCA</span> within 
			three days to the appropriate agencies, and further agrees <br>
			to mail all correspondence received from the credit bureaus in their 
			original form to <span style="font-family: Times New Roman">YCA</span> 
			within three days of their receipt by client.</span></li>
			<li><span style="font-size: 9pt">Client further agrees to notify
			<span style="font-family: Times New Roman">YCA</span> if client has not 
			received answers to correspondence mailed to the credit bureaus within sixty
			<br>
			days of the last mailing.</span></li>
			<li>
			<p class="MsoNormal">
			<span style="font-size: 9pt; font-family: Times New Roman">YCA</span><span style="font-size: 9pt"> 
			makes no other express or implied promises or guarantees as to the result or 
			outcome of its services except as outlined in <br>
			this agreement.</span></p></li>
		</ol>

		<p><strong><span style="font-size: 9pt">NEW HAMPSHIRE SURETY BOND INFORMATION</span></strong></p>

		<p><span style="font-size: 9pt">You, the consumer, have the right to proceed 
		against our Credit Services Organization Surety Bond for any violation of the 
		provisions of <br>
		Section <span style="color: rgb(0,0,0); line-height: 16px">359-D:8</span> and
		<span style="color: rgb(0,0,0); line-height: 16px">359-D:11</span>, New 
		Hampshire state regulations, Chapter 359-D. For information or to make a 
		complaint contact; <br>
		Travelers Casualty and Surety Company One Tower Square Hartford CT 06183&nbsp; </span>
		</p>

		<p><strong><span style="font-size: 9pt">CONSUMER CREDIT FILE RIGHTS UNDER STATE 
		AND FEDERAL LAW</span></strong></p>

		<p><span style="font-size: 9pt">You have a right to dispute inaccurate 
		information in your credit report by contacting the credit bureau directly. 
		However, neither you <br>
		nor any credit repair company or credit repair organization has the right to 
		have accurate, current, and verifiable information removed <br>
		from your credit report. The credit bureau must remove accurate, negative 
		information from your report only if it is over 7 years old. <br>
		Bankruptcy information can be reported for 10 years.</span></p>

		<p><span style="font-size: 9pt">You have a right to obtain a copy of your credit 
		report from a credit bureau. You may be charged a reasonable fee. There is no 
		fee, however, <br>
		if you have been turned down for credit, employment, insurance, or a rental 
		dwelling because of information in your credit report within the <br>
		preceding 60 days. The credit bureau must provide someone to help you interpret 
		the information in your credit file. You are entitled to receive <br>
		a free copy of your credit report if you are unemployed and intend to apply for 
		employment in the next 60 days, if you are a recipient of <br>
		public welfare assistance, or if you have reason to believe that there is 
		inaccurate information in your credit report due to fraud.</span></p>

		<p><span style="font-size: 9pt">You have a right to sue a credit repair 
		organization that violates the Credit Repair Organization Act. You have the 
		right to sue a credit services <br>
		organization if it misleads you. This law prohibits deceptive practices by 
		credit repair organizations.</span></p>

		<p><span style="font-size: 9pt">You have the right to cancel your contract with 
		any credit repair organization for any reason within five days from the date you 
		signed it.</span></p>

		<p><span style="font-size: 9pt">Credit bureaus are required to follow reasonable 
		procedures to ensure that the information they report is accurate. However, 
		mistakes may occur.</span></p>

		<p><span style="font-size: 9pt">You may, on your own, notify a credit bureau in 
		writing that you dispute the accuracy of information in your credit file. The 
		credit bureau <br>
		must then reinvestigate and modify or remove inaccurate or incomplete 
		information. The credit bureau may not charge any fee for this service. <br>
		Any pertinent information and copies of all documents you have concerning an 
		error should be given to the credit bureau.</span></p>

		<p><span style="font-size: 9pt">If the credit bureau's reinvestigation does not 
		resolve the dispute to your satisfaction, you may send a brief statement to the 
		credit bureau, to <br>
		be kept in your file, explaining why you think the record is inaccurate. The 
		credit bureau must include a summary of your statement about <br>
		disputed information with any report it issues about you.</span></p>

		<p><span style="font-size: 9pt">The Federal Trade Commission regulates credit 
		bureaus and credit repair organizations. For more information contact:<br>
		The Public Reference Branch<br>
		Federal Trade Commission<br>
		Washington, D.C. 20580<br>
		&nbsp;</span></p>

		<p><b><span style="font-size: 9pt">NOTICE OF CANCELLATION</span></b></p>

		<p><span style="font-size: 9pt">You may cancel this contract, without any 
		penalty or obligation within 5 days from the date the contract is signed.<br>
		If you cancel, any payment made by you under this contract must be returned 
		within 10 days following receipt by Your Credit Alliance of your <br>
		cancellation notice. <br>
		<br>
		To cancel this contract, mail or deliver a signed and dated copy of this 
		cancellation notice, or any other written notice, to&nbsp;
		<strong style="font-weight: 400">Your Credit Alliance at&nbsp;<br>
		1 Tara Boulevard Suite 200 Nashua NH 03062__ </strong>&nbsp;not later than midnight
		</span><span style="font-size: 9pt; background-color: #FFFF00">of the 5th day 
		which begins after the date the contract is signed by you.</span></p>

		<p><span style="font-size: 9pt">I hereby cancel this transaction.</span></p>


		<p><span style="font-size: 9pt">Date: <span style="color: #000">
		{{$date}}</span><br>
		<br>
		Signature: Electronically signed by <span style="color: #000">
		______</span></span></p>

		<p>&nbsp;</p>

	 	@endif
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
		
		$('#form_billing_and_legal_btn')[0].click();
	};

});</script>
@stop