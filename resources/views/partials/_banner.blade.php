<section class="banner">
    <div class="container">
        <div class="col-md-8 slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/slider/approved.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/slider/education.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/slider/graph.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/slider/affiliate.jpg" alt="">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4 sign-up">
            <div class="form">
                <h5>SIGN UP FOR A FREE CONSULTATION</h5>
                <form id="signup" action="{{ route('post.consultation') }}" method="post">

                    {{ csrf_field() }}

                    <span>Please enter your Email</span>
                    <input type="email" name="ContactEmail" class="form-control" placeholder="Please enter your Email Address" required>

                    <span>Please enter your name</span>
                    <input type="text" name="ContactName" class="form-control" placeholder="Please enter your Name" required>

                    <span>Please enter your Phone Number</span>
                    <input type="tel" class="form-control" name="ContactPhone" placeholder="Please enter your Phone Number" required>

                    <div class="form-group pull-right text-right">
                        <button type="button" onclick="this.form.reset();" class="btn btn-sm btn-warning">CLEAR</button>

                        <input type="submit" class="btn btn-sm btn-primary" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>