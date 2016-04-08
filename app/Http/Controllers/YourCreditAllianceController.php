<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Testimonial;

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

}
