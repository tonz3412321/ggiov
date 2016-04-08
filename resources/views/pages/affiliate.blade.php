@extends('layouts.master' , ['title' => 'affiliate'])

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
                <h1 class="posttitle">Affiliate Partner Program</h1>
            </header>

            <br />

            <div class="entry-container fix justify">

                <div class="entry fix">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <img src="/img/affili5.jpg"/>
                        </div>
                    </div>

                    <br/>
                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                            <p>When we talk about an affiliate partner program we put the emphasis on the word partner. Our affiliate partner program is like no other program on the internet. Sure many companies will compensate you via offering you a commission checks for sending them business, however I would not consider that much of a partnership. What if I told you that we are not only going to compensate you via a referral commission, we are also going to spearhead a marketing campaign to help you produce leads. Yes that is exactly what I am telling you. You may ask yourself how this can be done. Your Credit Alliance has partnered up with an online marketing company. We utilize direct mail and email lists to assist in lead generation for our company, but our real focus has been on providing marketing services for our affiliate partners. Our success will be directly related to the success of our affiliate partners. Deploying monthly campaigns for our partners will certainly increase sales and keep everybody happy. It is our intention to double the amount of monthly  home/auto sales for each affiliate. Now that is a partnership.</p>
                            <p>Your client’s credit is extremely important to us. It strongly determines if you can get financing for a new car, qualify for a home loan, build business credit, get improved credit in order to get that dream job, get credit card approval, qualify for a lease, and much more. That's why millions of Americans have turned to credit repair companies to help fix their credit scores.</p>
                            <p>Your Credit Alliance is in the business of helping people. We give credit-challenged borrowers an opportunity to get back on track. You too, can help them find the solution while building your income. When you experience a credit denial, let your customer know that you have a solution. Even though they can’t get approved at the very moment, inform them that you have a relationship with Your Credit Alliance. It is our job to get your clients financial approvals. So in a sense it is our job to help you make more money helping your clients.</p>
                            <p>When you want to build a business dealing with something as important as people's credit, you want the best on your side. Your Credit Alliance works with professionals who pull people's credit and turn those unqualified prospects into a qualified borrower. Our experienced and trained team will take your clients that have been turned down for a loan, help them repair their credit, and we'll send them back to you to do business with you.</p>
                            <p>Your Credit Alliance have built a strong relationship with our satisfied clients who passed along our information to others that could benefit from our service. We provide THE ABSOLUTE BEST affiliate program, which is why we are the preferred program for Mortgage Brokers, Loan Officers, Auto Dealers, CPAs, Tax Preparers, Debt Settlement Agencies, Bankruptcy Attorneys, and Realtors.</p>
                            <p>We can be an affiliate partner for anyone who works with clients who need to improve their credit score. Do you know colleagues that have the same goal to help their customers receive a higher credit rating? Send them out way and get rewarded financially. We offer the absolute best payouts in the industry.  You can position yourself as someone who can give credit-challenged borrowers a direction at the same time build a large referral source network with people in the same industry which can eventually result in increased profits for you while helping them!</p>
                            <p>If you are just starting out, don't worry, we work with all types of affiliates. Pass along our information or submit a friend, co-worker or family member’s information and we will call them for a free consultation right away and you'll receive referral income when they enroll.</p>
                        </div>

                        <div class="col-md-12">
                            <p>Top Reasons to be an affiliate partner with Your Credit Alliance</p>
                            <ol type="1">
                                <li><strong>It's fast, simple and free-</strong>Being an affiliate is free. Refer your client to us and we will provide them with free consultation, during our consultation we go over every single line item on their credit report and walk-thru of the credit repair process. Once your client commits to repair with us, you will receive an email within 48 hours which provides a step-by-step guide on our commission structure, tracking instructions, and access to our CRM Tracking Software and other marketing tools.</li>
                                <li><strong>Stay Engaged with Your Clients-</strong>We provide 24/7 access to our Secure Affiliate Portal tied to your unique affiliate ID. This tool empowers you with the ability track the progress of every client you refer.  You will also receive automatic monthly notifications so you will be in the loop until they graduated from our program. When your client has graduated, he/she will receive an email that it's the perfect time to connect with you so you can qualify them and take the loan application. By remaining engaged in the entire credit improvement process, you know that you have a qualified borrower that is going to close.</li>
                                <li><strong>Be assured of a continuous business stream-</strong>As our affiliate partner, we will help you continue your business with your referred clients once they reach their target credit score. Clients will be provided with a Secure Tracking Portal where they can also monitor their progress such as credit bureau updates, deletions, disputes, etc. Inside that portal there's a section of your picture or company logo so they know who to stay in touch with once their credit has improved.</li>
                                <li><strong>Stay informed to gain perspective- </strong>Stay informed with a weekly email report summarizing the results of our first, second, and succeeding rounds of work with the clients and the credit bureaus until their desired result is achieved. A detailed monthly report of all your active clients showing each individual case's history of calls and notes will also provided to you so you know the progress of your clients in the pipeline.</li>
                                <li><strong>It's profitable-</strong>We've created a powerful way to turn that “could be” customer into an immediate substantial revenue. In addition to being paid when your clients are able to complete your lending agreement, you will also receive a commission for any of the following business affiliates that you refer (Mortgage Brokers, Loan Officers, Auto Dealers, CPAs, Tax Preparers, Debt Settlement Agencies, Bankruptcy Attorneys, and Realtors). </li>
                                <li><strong>REAL PARTNERSHIP- </strong>We spend several hours a month furnishing our affiliate partners with lead generation services.</li>
                            </ol>
                            <p>Everything you need and more to get started will be provided upon signing with us.</p>
                            <p>Why wait? Sign up NOW </p>
                            <button class="btn btn-danger btn-lg">Sign me up!</button>
                        </div>

                    </div>

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