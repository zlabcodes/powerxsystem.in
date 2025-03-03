<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget__title">Quick Contacts</h6>
                        <p>If you have any questions or need help, feel free to contact us.</p>
                        <ul class="contact__list list-unstyled">
                            <li>
                                <a href="mailto:contact@powerxsystem.in">
                                    <i class="contact__icon icon-email"></i> <span>contact@powerxsystem.in</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+919447553075">
                                    <i class="contact__icon icon-phone"></i> <span>+91 9447 55 3075</span>
                                </a>
                            </li>
                        </ul>
                        <p>Nr. Keloth Railway Over Bridge, Payyanur, Kannur, Kerala, India 670307</p>
                        <a href="{{ url('/contact') }}" class="btn btn__white btn__link mr-30">
                            <i class="fas fa-map-marker-alt"></i> <span>Get Directions</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Company</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/products') }}">Products</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Our Offerings</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/products/inverters') }}">Inverters</a></li>
                                <li><a href="{{ url('/products/batteries') }}">Batteries</a></li>
                                <li><a href="{{ url('/products/solar-water-heaters') }}">Solar Water Heaters</a></li>
                                <li><a href="{{ url('/products/water-purifiers') }}">Water Purifiers</a></li>
                                <li><a href="{{ url('/products/solar-inverters') }}">Solar Inverters</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Help</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="footer-widget-social text-right">
                        <h6 class="footer-widget__title">Need a Solution?</h6>
                        <a href="{{ url('/contact') }}" class="btn btn__primary mb-40">Get A Free Quote</a>
                        <ul class="social-icons list-unstyled justify-content-end mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-scroll text-center">
        <button id="scrollTopBtn">
            <i class="fas fa-long-arrow-alt-up"></i>
            <span class="scroll__text">Back To Top</span>
        </button>
    </div>
    <div class="footer-secondary bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-8 col-lg-12 col-xl-8 offset-xl-2 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="footer__copyrights">
                        <span class="fz-14">© 2024 PowerX Systems, All Rights Reserved.</span>
                    </div>
                    <nav>
                        <ul class="list-unstyled footer__copyright-links d-flex flex-wrap mb-0">
                            <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
