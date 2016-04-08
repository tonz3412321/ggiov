@extends('layouts.master' , ['title' => 'privacy'])

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
                <h1 class="posttitle">Privacy Policy</h1>
            </header>


            <br/>


            <div class="postdata fix">
                Your privacy is important to us. Your Credit Alliance (YCA) DOES
                NOT disclose any information about you to anyone, except as
                permitted by law. Access to your information is restricted to
                those employees who need to know that information to provide
                service to you. We maintain physical, electronic and procedural
                safeguards to protect this information. By law, your information
                is properly disposed of after the statute of limitations has
                expired.
            </div>

            <br/>
            <br/>



            <div class="entry-container fix">

                <div class="entry fix">
                    <h3>Why we collect personal information</h3>
                    <p> We collect personal information to enroll you in our service.
                        The information we require is kept to the minimum necessary to establish
                        online or offline services. YCA uses your personal information to
                        provide you with improved customer service, communicate with you
                        regarding your case file via your personal client web portal or emails.
                        In addition, we use your personal information to keep you up to date on
                        our latest service, credit news updates, special offers, and other
                        information we think you may wish to hear about. From time to time, we
                        may also use your personal information to contact you to participate in
                        a market research survey so we can gauge client satisfaction and improve
                        our service further.</p>

                    <br/>

                    <h3>How we collect personal information</h3>
                    <p>We collect information about you at the time you sign up for our
                        service, and any time we enter information from your credit report or
                        creditor/bureau replies into our database. The latter is necessary to
                        make that information and account status available to you via the client
                        web portal. In addition, when you sign up for a new YCA service, or ask
                        to be included in a mailing list, we may collect and store the
                        information you provide in a database.</p>

                    <br/>

                    <h3>When we disclose personal information</h3>
                    <p>We do not sell, trade, or otherwise transfer to outside parties your
                        personally identifiable information. This does not include trusted third
                        parties who assist us in operating our website, conducting our business,
                        or servicing you, so long as these parties agree to keep your
                        information confidential. Because the ability to communicate with our
                        clients during any part of the credit correction process is absolutely
                        essential, your personal information may be shared with any and all YCA
                        employees. They will protect your personal information in accordance
                        with the YCA Customer Privacy Policy and internal policy and procedures
                        as well.</p>

                    <br/>

                    <h3>How we protect your personal information</h3>
                    <p>YCA safeguards the security of the data you send us with physical,
                        electronic, and operational procedures.</p>
                    <p>The YCA web site uses High Assurance Secure Socket Layer (SSL)
                        encryption on web pages where personal information of a sensitive nature
                        is transmitted. To log into the client portal section of Your Credit
                        Alliance web properties, you will be provided with an SSL connection,
                        and will need an SSL-enabled browser such as Internet Explorer, Firefox,
                        or Opera. SSL helps protect the confidentiality of your personal
                        information as it is transmitted over the Internet.</p>
                    <h3>Collecting other personal information</h3>

                    <br/>

                    <p>When you browse the YCA web site, you are able to do so anonymously,
                        although “anonymous usage statistics” are collected. Your browser will
                        automatically tell YCA IT staff basic information such as screen
                        resolution, operating system, and other such details that may be used in
                        aggregate to provide an improved end-user experience in revisions and
                        editions of the site or portions of the site.</p>
                    <p>The YCA web site is capable of and may use “cookie” technology from
                        time to time or for certain “landing pages” or referring URLs. When you
                        first connect to our site, the cookie may identify your browser via a
                        unique, random number. The cookies do not reveal any personal
                        information about you; they help IT staff better track and provide for
                        which parts of our web sites are the most popular, where our visitors
                        are going, where they come from, and how long they spend there.</p>
                    <p>In some of our emails to you, we use a “click-through” URL. When you
                        click one of these URLs, you may pass through our web servers before
                        arriving at the web site that is your destination. We track click-throughs
                        to help us determine your interest in particular topics and measure the
                        effectiveness of our customer communications.</p>
                    <p>YCA safeguards the security of the data you send us with physical,
                        electronic, and operational procedures.</p>
                    <p>We may use third-party advertising companies to serve ads on our
                        behalf. These companies may employ cookies and action tags (tracking
                        pixels) to measure advertising effectiveness.</p>

                    <br/>

                    <h3>Consensual Agreement</h3>
                    <p>By using our site, you consent to our privacy policy.</div>
            </div>
            <p class="creditscore"><b>Future Developments</b></p>
            <p class="creditscore">From time to time, we may use customer information for
                new, unanticipated uses not previously disclosed in our privacy notice. If our
                information practices change at some time in the future, we will post the policy
                changes to our web site to notify you of these changes and provide you with the
                ability to opt out of these new uses. If you are concerned about how your
                information is used, you should check back at our web site periodically. We will
                only use data collected after a policy has changed for the new purposes. If you
                have comments or questions about our privacy policy, please contact us.
            </p>
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