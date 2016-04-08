<nav class="navbar navbar-default navbar-fixed-top">
    <div id="header-element" class="header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-md-4 logo">
                    <a class="navbar-brand" href="{{ action('YourCreditAllianceController@index') }}">
                        <img src="{{ URL::asset('assets/logo.jpg') }}" alt="Logo">
                        <p>Making Your Dreams A Reality</p>
                    </a>
                </div>
                <div class="col-md-3 call-us">
                    <h1>CALL TODAY! </br><span class="number">800-224-0407</span></h1>
                </div>

                @yield('upper-right')

            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ $title=='home' ? 'active': '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ $title=='privacy' ? 'active': '' }}"><a href="{{ route('privacy') }}">Privacy</a></li>
                    <li class="{{ $title=='services' ? 'active': '' }}"><a href="{{ route('services') }}">Our Services</a></li>
                    <li class="{{ $title=='testimonials' ? 'active': '' }}"><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li class="{{ $title=='faq' ? 'active': '' }}"><a href="{{ route('faq') }}">F.A.Q.</a></li>
                    <li class="{{ $title=='prices' ? 'active': '' }}"><a href="{{ route('prices') }}">Prices</a></li>
                    <li class="{{ $title=='guarantee' ? 'active': '' }}"><a href="{{ route('guarantee') }}">Guarantee</a></li>
                    <li class="{{ $title=='education' ? 'active': '' }}"><a href="{{ route('education') }}">Education</a></li>
                    <li class="{{ $title=='termsandcondtions' ? 'active': '' }}"><a href="{{ route('terms.and.conditions') }}">Terms and Conditions</a></li>
                    <li class="{{ $title=='affiliate' ? 'active': '' }}"><a href="{{ route('affiliate') }}">Affiliate</a></li>
                    <li class="{{ $title=='contactus' ? 'active': '' }}"><a href="{{ route('contactus') }}">Contact Us</a></li>
                    {{--<li class="{{ $title=='home' ? 'active': '' }}"><a href="#contact">Sign Up Page</a></li>--}}
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</nav>




