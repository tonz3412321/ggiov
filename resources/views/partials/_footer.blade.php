<footer>
    @yield('upper')
    <div class="secondary-footer">
        <div class="container">
            <div class="col-md-3">
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="#">Home Page</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
                <div class="social-media">

                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-youtube-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>

                </div>

            </div>
            <div class="col-md-3">
                <h2>Legal Links</h2>
                <ul>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Your Credit Alliance</h3>
                <p>1 Tara Boulevard Suite 200 Nashua </br>NH 03062</br>800-224-0407</br>local (603) 874-1466</br>fax (603) 841-3661</p>

            </div>
            <div class="col-md-3"><img src="{{ URL::asset('assets/office.png') }}" alt=""/></div>
        </div>
    </div>
    <div class="copyright">
        <p>Your Credit Alliance LLC © <?php echo date('Y'); ?>, All rights reserved.</p>
    </div>
</footer>