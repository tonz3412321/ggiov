<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Testimonial;

class Testimonials extends Controller
{
    public function index() {

        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        $count = count($testimonials);

        return view('pages.testimonials', ['testimonials' => $testimonials, 'count' => $count]);
    }


    public function store(Request $request) {

        Testimonial::create($request->all());

        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        return view('pages.testimonials', ['testimonials' => $testimonials]);


    }



}
