    <footer class="footer">
        <div class="footer-first-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ul class="call-email-alt">
                            <li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
                            <li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i><span class="__cf_email__" data-cfemail="b6dfd8d0d9f6d1d7dbd4d9c5c3c6d3c4dbd7c4ddd3c298d5d9db">[email&#160;protected]</span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="social-links-footer">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-second-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="second-row-item">
                            <h4>{{ __('global.category') }}</h4>
                            @if($categoires)
                            	<ul>
                            		@foreach($categoires as $category)
                            			<li><a href="/category/{{ $category->slug }}">{{ $category->name}}</a></li>
                            		@endforeach
                            	</ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="second-row-item">
                            <h4>{{ __('global.Useful Links') }}</h4>
                            <ul>
                                <li><a href="/about">{{ __('global.About US') }}</a></li>
                                <li><a href="/faq">{{ __('global.Faq') }}</a></li>
                                <li><a href="/careers">{{ __('global.Careers') }}</a></li>
                                <li><a href="/contact">{{ __('global.Contact Us') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="second-row-item">
                            <h4>Top Cities</h4>
                            <ul>
                                <li><a href="#">Gurugram</a></li>
                                <li><a href="#">New Delhi</a></li>
                                <li><a href="#">Bangaluru</a></li>
                                <li><a href="#">Mumbai</a></li>
                                <li><a href="#">Hyderabad</a></li>
                                <li><a href="#">Kolkata</a></li>
                                <li><a href="#">Ludhiana</a></li>
                                <li><a href="#">Chandigrah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="second-row-item-app">
                            <h4>Download App</h4>
                            <ul>
                                <li>
                                    <a href="#"><img class="download-btn" src="images/download-1.svg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img class="download-btn" src="images/download-2.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="second-row-item-payment">
                            <h4>Payment Method</h4>
                            <div class="footer-payments">
                                <ul id="paypal-gateway" class="financial-institutes">
                                    <li class="financial-institutes__logo">
                                        <img alt="Visa" title="Visa" src="images/footer-icons/pyicon-6.svg">
                                    </li>
                                    <li class="financial-institutes__logo">
                                        <img alt="Visa" title="Visa" src="images/footer-icons/pyicon-1.svg">
                                    </li>
                                    <li class="financial-institutes__logo">
                                        <img alt="MasterCard" title="MasterCard" src="images/footer-icons/pyicon-2.svg">
                                    </li>
                                    <li class="financial-institutes__logo">
                                        <img alt="American Express" title="American Express" src="images/footer-icons/pyicon-3.svg">
                                    </li>
                                    <li class="financial-institutes__logo">
                                        <img alt="Discover" title="Discover" src="images/footer-icons/pyicon-4.svg">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="second-row-item-payment">
                            <h4>Newsletter</h4>
                            <div class="newsletter-input">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                                <button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-last-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-links">
                            <ul>
                                <li><a href="about_us.html">About</a></li>
                                <li><a href="contact_us.html">Contact</a></li>
                                <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                <li><a href="term_and_conditions.html">Term & Conditions</a></li>
                                <li><a href="refund_and_return_policy.html">Refund & Return Policy</a></li>
                            </ul>
                        </div>
                        <div class="copyright-text">
                            <i class="uil uil-copyright"></i>Copyright 2020 <b>Gambolthemes</b> . All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>