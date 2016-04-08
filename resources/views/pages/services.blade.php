@extends('layouts.master' , ['title' => 'services'])

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
            <h1 class="posttitle">Our Services</h1>
        </header>

        <br/>

        <h3>Obtain Credit Reports</h3>
        <p>he first step is to open an account with Your Credit Alliance. This can be done
            now via clicking on the following link or you can sign up after you speak with
            on of our certified credit consultants. To speak to one of our credit experts
            you can call us at 800-224-0407 or schedule an appointment via the home page
            sign up form. Our consultations are absolutely free and rest assure you will be
            speaking to a live person. One of our credit experts will reach out to you and
            go over your own personal credit goals and your time frame to accomplish these
            goals.
            our service further.</p>

        <br/>

        <p class="entry-container fix">

            <div class="entry fix">
                <h3>Obtain Credit Reports</h3>
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
                <p>It is important to get your credit report as soon as possible. We offer an Rapid
                    Repair Option.
                    Rapid Repair is the fastest and most convenient way to get started on your
                    credit repair.
                    If you choose rapid repair you are giving us permission to act on your behalf
                    and pull your
                    credit report directly into our system. Rapid start will cost you absolutely
                    nothing and it will
                    enable us to get started right away. Otherwise we can provide you with the
                    information necessary to obtain your credit reports. Just like credit reports
                    each client is an individual and that is how they are treated. Each credit
                    report is individual, and we treat our clients as individuals too. The first
                    stage of our process is to get to know you and your credit background. From
                    their we put together a custom blue print for each of out clients. One of our
                    friendly credit analysts will walk you through your credit report one line at a
                    time. We will identify which items are questionable and erroneous and explain to
                    you what we can do to improve your credit. From there we go over the entire
                    process with you not leaving out any minute details. We will tell you what you
                    can expect in regards to the project timeline and the price. One of our
                    informative staff members will Identify what will likely happen in your case and
                    make sure you understand absolutely everything.</p>

                <br/>

                <h3>Enroll</h3>
                <p>Afterwards, if you decide to hire us via clicking here we will immediately start
                    the dispute/verification process directly with the credit bureaus.</p>

                <br/>

                <h3>Dispute</h3>
                <p>Whether it involves a bankruptcy, judgment, charge off, collection agency,
                    foreclosure, tax lien, late payment or other problem, we do everything to clear
                    out any information that is no longer current. We will also initiate a debt
                    validation request and audit of all questionable collection reporting. By law
                    the credit bureaus have 30-45 days to investigate and respond to our dispute.
                    You will receive updated reports/investigation results from the credit bureaus
                    it is important that you make a copy of all documents and send us the original
                    as soon as you receive them in the mail. While you are working with us you will
                    receive unlimited dispute of erroneous credit reporting with all 3 credit
                    agencies. </div>

                <br/>

                <h3>Educate and Build New Credit</h3>
                <p>Your Credit Alliance is not just a credit restoration firm. We are also credit
                    educators. We will provide you with a knowledge base of credit education and all
                    of the necessary tools to build new credit. We inform you on which credit cards
                    offer the most advantages and we will help you get approved. Our determination
                    leads to your success.</p>
            </div>

        </p>

    <div class="col-md-4">

        @include('partials._sidebar')

    </div>
</div>


<br />

<br />
<br />




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