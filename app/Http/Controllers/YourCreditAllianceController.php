<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimonial;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class YourCreditAllianceController extends Controller
{
    public function __construct()
    {
//        Session::set('steppings', 1);
    }

    public function index() {
    	return view('pages.home');
    }

    public function privacy() {
        return view('pages.privacy');
    }

    public function services() {
        return view('pages.services');
    }


    public function faq() {
        return view('pages.faq');
    }

    public function prices() {
        return view('pages.prices');
    }

    public function guarantee() {
        return view('pages.guarantee');
    }

    public function education() {
        return view('pages.education');
    }

    public function termsandcondtions() {
        return view('pages.termsandconditions');
    }

    public function contactus() {
        return view('pages.contactus');
    }

    public function affiliate() {
        return view('pages.affiliate');
    }

    public function signup() {
        return view('pages.home');
    }

    public function consultation(Request $request) {

        $name = $request->ContactName;
        $phone = $request->ContactPhone;
        $email = $request->ContactEmail;

        $data = [ 'name' => $name,
                   'phone' => $phone,
                    'email' => $email ];

        try
        {

            \Mail::send('emails.consultation_client', $data, function ($message) use ($email) {
                $message->to($email)->subject('Your Credit Alliance Free Consultation Notification');
            });


            \Mail::send('emails.consultation_admin', $data, function ($message) use ($email) {
                $message->to('tonzrf123@gmail.com')->subject('Client Consultation Recieved');
            });
        }
        catch(\Exception $e){

            Session::flash('message', "Your Consultation message has been failed to send. Please try again");
            return Redirect::back();
        }

        Session::flash('message', "Your Consultation message has been succesfully sent");
        return Redirect::back();


    }

}
