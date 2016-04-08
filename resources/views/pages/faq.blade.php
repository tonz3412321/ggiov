@extends('layouts.master' , ['title' => 'faq'])

@section('title', '')

@section('custom_css')
    <style>
        .phand {
            cursor: pointer;
        }
        .faq_parent {
            display: block;
            color: #5d727b;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding-bottom: 10px;
            width: 100%;
        }
    </style>


@endsection


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
                <h1 class="posttitle">FAQs</h1>
            </header>



            <div class="row">
                <div class="col-md-12">
                    <h3>We are happy to assist you with answers to your questions.</h3>
                </div>
                <hr />
                <div class="col-md-12">
                    <h4>Frequently Asked Questions:</h4>
                </div>

            </div>

            <br/>
            <br/>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Will my score drop if I apply for new credit?</strong></label>
                    <p class="faq_child hide">
                        FICO's research shows that opening several credit accounts in a short period of time represents greater credit risk. your FICO Scores can be lower as a result.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Are negative items such as bankruptcies, foreclosures, and liens impossible to remove?</strong></label>
                    <p class="faq_child hide">
                        There is currently no negative listing that hasn’t been repaired and or removed from credit reports, thousands of times. Some are certainly more difficult and take longer but this has more to do with operational systems at the bureaus rather then severity of the item. Through our process we have successfully removed any kind of item you can think of.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>When should I see results?</strong></label>
                    <p class="faq_child hide">
                        We are fast and efficient. Each case is unique and it would be improper to promise a particular result within a specific time frame. However, the credit bureaus have 30-45 days to investigate and respond to a consumer’s dispute, so as a client of Step 1 Credit you will receive your first dispute results in about 45-60 days.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>How often are errors made when credit bureaus report information?</strong></label>
                    <p class="faq_child hide">
                        Very often.  Studies show that there is a 79% error rate with credit reports.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong> What happens if new, negative information - information that was not on my original report - is added to my credit report after the repair work has begun?	</strong></label>
                    <p class="faq_child hide">
                        We will work on any new negative items added to your credit report that you ask us to. It is important to understand new negative items are more difficult to remove and can cause a great deal damage to your credit scores. We are happy to assist you by working on any new negative items that have been added to your credit report.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Is Your Credit Alliance Bonded?</strong></label>
                    <p class="faq_child hide">
                        Yes. Your Credit Alliance is registered as a credit services organization through the Secretary of State. Our company carries surety bonds as required by various state laws.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Will my personal information be shared?</strong></label>
                    <p class="faq_child hide">
                        Your credit alliance needs some personal information in order to successfully repair your credit report on your behalf. With that being said rest assured that your personal information will not be shared with any outside parties or affiliates.  Limited information such as name, address and social security numbers will be shared with the credit bureaus in order to verify your identity.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>What if items reappear after they have been previously deleted?</strong></label>
                    <p class="faq_child hide">
                        This sometimes happens either by accident or a creditor has eventually verified a particular item. If this happens the credit bureau must send you a notification letter within 5 days of reinsertion. The FCRA (Fair Credit Reporting Agency) has made it much more difficult for a creditor to re insert an item once it has been removed. If added by mistake, Your Credit Alliance will re-challenge the item in full force.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Can you guarantee to remove my negative items?</strong></label>
                    <p class="faq_child hide">
                        No company can guarantee results. The law does not allow for companies to guarantee removal of negative information and falls under false claims and deceptive advertising, a clear violation of the Credit Repair Organizations Act (CROA). No one can remove accurate, verifiable and complete information from your credit file.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Can I repair my credit myself?</strong></label>
                    <p class="faq_child hide">
                        The answer is yes. It is a complicated, timely and tedious process to restore your own credit without the help from a professional. Just like a person who tries to perform automobile repairs on their own, if they do not have the knowledge they can cause more damage. Hiring a professional. to restore your credit will ensure fast and accurate results.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>Why can't you order my credit report directly?</strong></label>
                    <p class="faq_child hide">
                        According to the Fair Credit Reporting Act, credit bureaus are not allowed to give credit information to third parties, unless they meet certain criteria, such as determining creditworthiness, employee candidate screening, or insurance underwriting. This is why it is necessary for you to individually request your credit report and then forward it to us.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>What items can be removed?</strong></label>
                    <p class="faq_child hide">
                        We can only remove items that show to be inaccurate, outdated, or unverifiable. However, MANY items on most people's reports could fall into one of those categories.
                    </p>
                    <hr />
                </div>
            </div>

            <div class="row form-group phand faq_row">
                <div class="col-md-1">
                    <img src="/img/faq co1.gif" />
                </div>
                <div class="col-md-11">
                    <label class="faq_parent phand"><strong>  How can you legally repair my credit?</strong></label>
                    <p class="faq_child hide">
                        It is your right to ensure that every item on your credit report is accurate. If any information on your credit report is inaccurate, incomplete or unverifiable it must be corrected or removed from your credit report. Disputing items on your credit report is your right and you legally can request that questionable information be removed from your reports. For additional information please visit, The Fair Credit Reporting Act, Fair Debt Collections Practice Act and Fair Credit Billing Act, which all afford you the legal right to dispute items with the credit bureaus and individual creditors.
                    </p>
                    <hr />
                </div>
            </div>

            <br />
            <br />
            <br />

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


@section('custom_javascripts')

    <script>
       $('.faq_row').click(function(){
           $(this).find('.faq_child').toggleClass('show');
       });
    </script>
@stop

