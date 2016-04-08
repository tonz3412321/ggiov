<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Input;
use ReCaptcha\ReCaptcha;
class SignupAsPageController extends Controller
{
    /**
     * Instantiate a new SignupAsPageController instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Session::get('steppings')==null)
        {
            Session::set('steppings',1);
        }

    }

    private $states = array(
        ['key' => 'AL', 'value' => 'Alabama'],
        ['key' => 'AK', 'value' => 'Alaska'],
        ['key' => 'AZ', 'value' => 'Arizona'],
        ['key' => 'AR', 'value' => 'Arkansas'],
        ['key' => 'CA', 'value' => 'California'],
        ['key' => 'CO', 'value' => 'Colorado'],
        ['key' => 'CT', 'value' => 'Connecticut'],
        ['key' => 'DE', 'value' => 'Delaware'],
        ['key' => 'DC', 'value' => 'District Of Columbia'],
        ['key' => 'FL', 'value' => 'Florida'],
        ['key' => 'GA', 'value' => 'Georgia'],
        ['key' => 'HI', 'value' => 'Hawaii'],
        ['key' => 'ID', 'value' => 'Idaho'],
        ['key' => 'IL', 'value' => 'Illinois'],
        ['key' => 'IN', 'value' => 'Indiana'],
        ['key' => 'IA', 'value' => 'Iowa'],
        ['key' => 'KS', 'value' => 'Kansas'],
        ['key' => 'KY', 'value' => 'Kentucky'],
        ['key' => 'LA', 'value' => 'Louisiana'],
        ['key' => 'ME', 'value' => 'Maine'],
        ['key' => 'MD', 'value' => 'Maryland'],
        ['key' => 'MA', 'value' => 'Massachusetts'],
        ['key' => 'MI', 'value' => 'Michigan'],
        ['key' => 'MN', 'value' => 'Minnesota'],
        ['key' => 'MS', 'value' => 'Mississippi'],
        ['key' => 'MO', 'value' => 'Missouri'],
        ['key' => 'MT', 'value' => 'Montana'],
        ['key' => 'NE', 'value' => 'Nebraska'],
        ['key' => 'NV', 'value' => 'Nevada'],
        ['key' => 'NH', 'value' => 'New Hampshire'],
        ['key' => 'NJ', 'value' => 'New Jersey'],
        ['key' => 'NM', 'value' => 'New Mexico'],
        ['key' => 'NY', 'value' => 'New York'],
        ['key' => 'NC', 'value' => 'North Carolina'],
        ['key' => 'ND', 'value' => 'North Dakota'],
        ['key' => 'OH', 'value' => 'Ohio'],
        ['key' => 'OK', 'value' => 'Oklahoma'],
        ['key' => 'OR', 'value' => 'Oregon'],
        ['key' => 'PA', 'value' => 'Pennsylvania'],
        ['key' => 'RI', 'value' => 'Rhode Island'],
        ['key' => 'SC', 'value' => 'South Carolina'],
        ['key' => 'SD', 'value' => 'South Dakota'],
        ['key' => 'TN', 'value' => 'Tennessee'],
        ['key' => 'TX', 'value' => 'Texas'],
        ['key' => 'UT', 'value' => 'Utah'],
        ['key' => 'VT', 'value' => 'Vermont'],
        ['key' => 'VA', 'value' => 'Virginia'],
        ['key' => 'WA', 'value' => 'Washington'],
        ['key' => 'WV', 'value' => 'West Virginia'],
        ['key' => 'WI', 'value' => 'Wisconsin'],
        ['key' => 'WY', 'value' => 'Wyoming']
    );

    private function session($key = null, $value = null, $default = null, $auto_delete = true) {
    	if (session_status() === PHP_SESSION_NONE) session_start();
    	if ($value === null && $key !== null && $default === null) {
    		$val = (isset($_SESSION[$key]))? $_SESSION[$key] : null;
            if ($auto_delete) {
                unset($_SESSION[$key]);    
            }
    		return $val;
    	}	
        if ($default !== null) {
            $val = (isset($_SESSION[$key]))? $_SESSION[$key] : $default;
            if ($auto_delete) {
                unset($_SESSION[$key]);    
            }
            return $val; 
        }
    	$_SESSION[$key] = $value;
    }

    public function captchaCheck($recaptcha)
    {
        $response = $recaptcha;
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = env('NOCAPTCHA_SECRET');
        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response, $remoteip);
        $data = [];
        if ($resp->isSuccess()) {
            $data['status'] =  true;
        } else {
            $data['error'] = $resp->getErrorCodes();
            $data['status'] = false;
        }
        return $data;
    }


    public function checkPromotionCode(Request $request) {
        if($request->ajax())
        {
            $this->validate($request, [
                'promotion_code' => 'required'
            ]);

            $promoCode = ['MIL5151' => true, 'BFF5151' => true, 'HOLIDAY5151' => true];
            $discounted = (isset($promoCode[$request->get('promotion_code')])) ? true : false;

            return [$discounted];
        }
    }


    public function index() {
        Session::set('steppings', 1);
        $customer_type_signup = $this->session('customer_type_signup', null, 'first time client', false);
    	return view('signup-as-page.index', compact('customer_type_signup'));
    }

    public function validatePromotionCode(Request $request) {
    	$promoCode = ['MIL5151' => true, 'BFF5151' => true, 'HOLIDAY5151' => true];
    	$discounted = (isset($promoCode[$request->get('promotion_code')])) ? $promoCode[$request->get('promotion_code')] : false;
    	$this->session('discounted' , $discounted);
        $this->session('customer_type_signup', $request->get('customer_type_signup'));
        $this->session('how_you_heard_about_us', $request->get('how_you_heard_about_us'));


        Session::set('steppings', 2);

    	return redirect('signup-as-page/personal-info');
    }

    /**
     * Display a signup as page.
     *
     * @param  Request  $request
     * @return Response
     */

    public function personalInfo(Request $request)
    {
        if(Session::get('steppings')<2){
            return redirect('signup-as-page');
        }

        $customer_type_signup = $this->session('customer_type_signup', null, null, false);
        $persnal_info_data = $this->session('persnal_info_data' , null, null, false);
        $payment_options = $this->session('payment_options',null , null, false);
		$discounted = $this->session('discounted');
        $allowDiscount = false;
        switch ($customer_type_signup) {
            case 'first time client':
            case 'an affiliate partner':
                $allowDiscount = false;
                break;
            case 'friend / family member':
            case 'active military member':
                $allowDiscount = true;
                break;
        }

		$data = [
			'first_work_fee' => ($discounted && $allowDiscount) ? 100 : 125, 
			'plan_a' => ($discounted && $allowDiscount) ? [100] : [125],
			'plan_b' => ($discounted && $allowDiscount) ? [100 , 76] : [125 , 95],
			'plan_c' => ($discounted && $allowDiscount) ? [100 , 58] : [125 , 73],
            'states' => $this->states,
            'payment_options' => $payment_options,
            'persnal_info_data' => $persnal_info_data,
            'customer_type_signup' => $customer_type_signup,
            'billing_date' => date('jS \of F Y', strtotime("+29 days"))
		];
        $this->session('_data' , $data);

		return view('signup-as-page.personal-info', $data);	
    }

   
    /**
     * Store Details.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postPersonalInfo(Request $request)
    {

        $_data = $this->session('_data' , null, null, false);
        if ($_data['customer_type_signup'] === 'an affiliate partner') {
            $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'primary_phone' => 'required',
                'secondary_phone' => 'required',
                'email' => 'required',
                'company' => 'required',
                /*'fax' => 'required',*/
                /*'website_url' => 'required',*/
                'g-recaptcha-response' => 'required'
                // 'referred_lastname' => 'required',
                // 'referred_firstname' => 'required',
            ]);
            $referred_lastname = $request->get('referred_lastname');
            $referred_firstname = $request->get('referred_firstname');
            $affiliate_data = array(
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'primary_phone' => $request->get('primary_phone'),
                'secondary_phone' => $request->get('secondary_phone'),
                'email' => $request->get('email'),
                'company' => $request->get('company'),
                'fax' => $request->get('fax'),
                'website_url' => $request->get('website_url'),
                'g-recaptcha-response' => $request->get('g-recaptcha-response'),
                'referred_lastname' => (isset($referred_lastname)) ? $referred_lastname : '',
                'referred_firstname' => (isset($referred_firstname)) ? $referred_firstname : ''
            );
            $recaptcha = $this->captchaCheck($request->get('g-recaptcha-response'));
            if ($recaptcha['status']) {
                $_data = $this->session('_data' , null, null, false);
                $_data['affiliate'] = $affiliate_data;
                $this->session('_data' , $_data);
                return redirect('signup-as-page/congratulations');
            }
        } else {
            $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip' => 'required|numeric',
                'dob' => 'required',
                'social_security' => 'required',
                'primary_phone' => 'required',
                'secondary_phone' => 'required',
                /*'affiliate_id' => 'required',*/
                'email' => 'required|email',
                're_type_email' => 'required|email',
                /*'agreements_option' => 'required|numeric',*/
                'credit_report_options' => 'required|numeric',
                'enrollment_plan_option' => 'required',
                'payment_options' => 'required|numeric'
            ]); 

            $payment_options = '0';
            if ($request->get('payment_options') === '1') {
                $payment_options = '1';
            }

            $persnal_info_data = array(
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'street_address' => $request->get('street_address'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'zip' => $request->get('zip'),
                'dob' => $request->get('dob'),
                'social_security' => $request->get('social_security'),
                'primary_phone' => $request->get('primary_phone'),
                'secondary_phone' => $request->get('secondary_phone'),
                'affiliate_id' => $request->get('affiliate_id'),
                'email' => $request->get('email'),
                're_type_email' => $request->get('re_type_email'),
                'credit_report_options' => $request->get('credit_report_options'),
                'enrollment_plan_option' => $request->get('enrollment_plan_option'),
                'payment_options' => $request->get('payment_options')
            );        
            
            $this->session('persnal_info_data' , $persnal_info_data);
            $this->session('payment_options' , $payment_options);

            $_data = $this->session('_data' , null, null, false);
            $_data['persnal_info_data'] = $persnal_info_data;
            $this->session('_data' , $_data);


            Session::set('steppings', 3);
            return redirect('signup-as-page/billing-and-legal');
        }
    }

    public function billingAndLegal() {
        $persnal_info_data = $this->session('persnal_info_data' , null, null, false);
        $payment_options = $this->session('payment_options',null , null, false);
        $states = $this->states;
        $_data = $this->session('_data',null , null, false);
        $plan_key = $_data['persnal_info_data']['enrollment_plan_option'];
        $total = array_sum($_data[$plan_key]);
        $_data['total_price'] = $total;
        $this->session('_data', $_data);
        return view('signup-as-page.billing-and-legal', compact('payment_options', 'persnal_info_data', 'states', 'total')); 
    }

    public function postBillingAndLegal(Request $request) {

        if ($request->get('payment_options') === '0') {
            $this->validate($request, [
                'card_type' => 'required',
                'card_number' => 'required',
                'card_ccv' => 'required',
                'card_expiration' => 'required',
                'card_year' => 'required',
                'billing_firstname' => 'required',
                'billing_lastname' => 'required',
                'street_address' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required'
            ]);

            $billing_legal_data = array(
                'card_type' => $request->get('card_type'),
                'card_number' => $request->get('card_number'),
                'card_ccv' => $request->get('card_ccv'),
                'card_expiration' => $request->get('card_expiration'),
                'card_year' => $request->get('card_year'),
                'billing_firstname' => $request->get('billing_firstname'),
                'billing_lastname' => $request->get('billing_lastname'),
                'street_address' => $request->get('street_address'),
                'state' => $request->get('state'),
                'city' => $request->get('city'),
                'zip' => $request->get('zip')
            );
            $billing_legal_data = $this->session('billing_legal_data' , $billing_legal_data);

        } else if ($request->get('payment_options') === '1') {
            $this->validate($request, [
                'routing_number' => 'required',
                'account_number' => 'required',
                'check_number' => 'required',
                'bank_name' => 'required',
                'understand' => 'required',
                'billing_firstname' => 'required',
                'billing_lastname' => 'required',
                'street_address' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required'
            ]);

            $billing_legal_data = array(
                'routing_number' => $request->get('routing_number'),
                'account_number' => $request->get('account_number'),
                'check_number' => $request->get('check_number'),
                'bank_name' => $request->get('bank_name'),
                'understand' => $request->get('understand'),
                'billing_firstname' => $request->get('billing_firstname'),
                'billing_lastname' => $request->get('billing_lastname'),
                'street_address' => $request->get('street_address'),
                'state' => $request->get('state'),
                'city' => $request->get('city'),
                'zip' => $request->get('zip')
            );
         
        }
        $billing_legal_data = $this->session('billing_legal_data' , $billing_legal_data);

        $_data = $this->session('_data' , null, null, false);
        $_data['billing_legal_data'] = $billing_legal_data;
        $this->session('_data' , $_data);
        return redirect('signup-as-page/congratulations');
    }
    
    public function congratulations(Request $request) {
        $_data = $this->session('_data' , null, null, false);
        if ($_data['customer_type_signup'] === 'an affiliate partner') {
            return view('signup-as-page.congratulations', $_data); 
        } 
        $dateTime = \Carbon\Carbon::now();
        $_data['date_time'] = $dateTime->toDateTimeString();
        $_data['date'] = explode(" ", $dateTime->toDateTimeString())[0];
        $persnal_info = $_data['persnal_info_data'];
        $_data['service_plan'] = strtoupper(explode("_", $persnal_info['enrollment_plan_option'])[1]);
        $_data['price'] = $_data[$persnal_info['enrollment_plan_option']][0];
        $_data['name'] = strtoupper($persnal_info['firstname'] . ' ' . $persnal_info['lastname']);
        $_data['address'] = strtoupper($persnal_info['street_address'] . ', ' . 
                                       $persnal_info['city'] . ', ' . 
                                       $persnal_info['state'] . ', ' . 
                                       $persnal_info['zip']);

        $_data['primary_phone'] = $persnal_info['primary_phone'];
        $_data['secondary_phone'] = $persnal_info['secondary_phone'];
        $_data['email'] = $persnal_info['email'];
        $_data['dob'] = $persnal_info['dob'];
        $_data['ssn'] = explode("-", $persnal_info['social_security'])[2];

        // dd($_data);
        return view('signup-as-page.congratulations', $_data); 
    }


}

