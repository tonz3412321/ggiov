@extends('layouts.master' , ['title' => 'education'])

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
                <h1 class="posttitle">Credit Education</h1>
            </header>

            <br />

            <div class="entry-container fix justify">

                <div class="entry fix">

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Thre Credit Store</h3>
                        </div>
                        <hr />
                        <hr />
                        <div class="col-md-12">
                           <img src="/img/educat2.gif" />
                        </div>

                        <hr />

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <br />
                            <p>While everyone understands the basics of handling credit payments, there are still some complexities that you might tend to overlook. For example, failing to make payment on time can hurt your credit score. It is important to keep yourself informed with your debts and avoid having too much of it on any of your cards. Unless necessary, do not close your older credit card, or let it so, and only apply for new one when you have to. Maintaining a good credit score will reflect your consumer status.</p>
                            <p>Your credit score serves as basis for lenders in evaluating if you are a desirable loan candidate. A good credit score may let you get special deals on loans or help you lock in low APR rates. On the other hand, bad credit damages your chances securing a loan, open a credit card or rent a home. The banks or lenders will be less inclined to grant you a loan upon seeing a history of bad credit management.</p>
                            <p>Credit score is developed by an Algorithm named FICO score, developed by the Fair Isaac Corporation. There are three “credit bureaus” that collect and report on financial companies. These “credit bureaus” are composed of three corporations namely Equifax, Experian, and TransUnion. These corporations provide general guidelines about financial behavior that affect your credit score, though the exact formula used to calculate your credit score is a tightly guarded secret in the industry.</p>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <br />

                            <p>There are several, contributing factors that influence the evaluation of your credit score. The biggest factors are the following:</p>

                            <ul>
                                <li>
                                    History of how well you repay debt (Payment History)
                                </li>
                                <li>
                                    How long you have had credit for (Length Credit)
                                </li>
                                <li>
                                    A Credit Report shows your personal information such as names, addresses (past and present), employers, phone numbers, and any variances of such.
                                </li>
                                <li>
                                    A Credit Report shows the amount of available credit you have. (i.e. your buying power)
                                </li>
                                <li>
                                    A Credit Report shows how often you have applied for credit (inquiries)
                                </li>
                                <li>
                                    A Credit Report shows the different types of credit that you have.
                                </li>
                            </ul>

                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Missing Accounts on Credit Report</h4>
                            <p>
                                There are instances that you may be denied of credit due to “insufficient credit file” or “no credit file”. This is because not all creditors will voluntarily supply information to the credit bureaus. This might be the student loan lenders, gasoline card companies, credit unions, or travel and entertainment loans.
                            </p>
                            <p>
                                Hence, you should consider requesting from your creditors to report your credit information to the credit bureau if such instances arise. Keep in mind that they are not oblige to do so, so be polite in asking.
                            </p>
                            <p>
                                You can also transfer your credits to other creditors that regularly file report to the credit bureaus.
                            </p>


                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <h4>How credit report mistakes are made</h4>
                            <p>
                                Your credit report may contain errors because the report is inaccurate or contained information about someone else’s report. This can happen by:
                            </p>
                            <ul>
                                <li>You have applied for credit under a different name (Instead of Barbara Smith, you applied under Ara Smith)</li>
                                <li>You have given wrong Social Security number, or misread by the lender.</li>
                                <li>Someone made a clerical mistake while making electronic input of your information from handwritten application.</li>
                                <li>Loan or credit card payments was charged to the wrong account.</li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <h4>What is not included in the credit report?</h4>
                            <p>
                                Your credit report will not reveal your other information such as your savings and checking amount, religion, ethnicity, race, personal lifestyle, political division, and etc.
                            </p>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Can anyone access my credit report?</h4>
                            <p>
                                Under section 604 of the FCRA (15 U.S.C. section1681b), there are certain people who can access your credit report, and only for certain reason. This could mean it may be a potential creditors and employer.
                            </p>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Where can I get a free credit report?</h4>
                            <p>
                                Unlike many websites that require credit card subscription, you may check the annualcreditreport.com for free credit report. This is mandated by the Fair Credit Reporting Act (FCRA) and absolutely free of charge.
                            </p>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-md-3">
                            <h5>The Fair Credit Billing Act (FCRA)   </h5>
                            <p>Download PDF</p>
                            <p><a href="https://www.ftc.gov/sites/default/files/fcb.pdf"><img src="/img/educat3.jpg" /></a> </p>

                        </div>

                        <div class="col-md-offset-1 col-md-3">
                            <h5> Fair Credit Reporting Act (FCRA)</h5>
                            <p>Download PDF</p>
                            <p><a href="http://www.consumer.ftc.gov/sites/default/files/articles/pdf/pdf-0111-fair-credit-reporting-act.pdf"><img src="/img/educat3.jpg" /></a> </p>

                        </div>

                        <div class="col-md-offset-1 col-md-3">
                            <h5>The Fair Debt Collections Practices Act (FDCPA)</h5>
                            <p>Download PDF</p>
                            <p><a href="https://www.ftc.gov/system/files/documents/plain-language/fair-debt-collection-practices-act.pdf"><img src="/img/educat3.jpg" /></a> </p>

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