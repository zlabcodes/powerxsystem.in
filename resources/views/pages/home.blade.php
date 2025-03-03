@extends('layouts.default')

@section('content')
<section class="slider">
    <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
      data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>

      <!-- Slide 1: Solar Solutions -->
      <div class="slide-item bg-overlay align-v-h">
        <div class="bg-img"><img src="{{ asset('images/sliders/solar-slider.webp') }}" alt="PowerX Systems Solar Solutions"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="slide__content">
                        <span class="slide__subtitle">Harness the Power of the Sun</span>
                        <h2 class="slide__title">Eco-Friendly Solar Water Heaters & Inverters</h2>
                        <p class="slide__desc">PowerX Systems provides sustainable solar water heaters and inverters from Supreme Solar, Vikram Solar, and Tata. Energy-efficient solutions for homes and businesses in Kerala.</p>
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="{{ url('/services') }}" class="btn btn__primary btn__xl mr-30">
                                <span>View Solar Services</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ url('/contact') }}" class="btn btn__white btn__xl">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Slide 2: Inverters & Batteries -->
        <div class="slide-item bg-overlay align-v-h">
            <div class="bg-img"><img src="{{ asset('images/sliders/inverter-slider.webp') }}" alt="PowerX Systems Inverters and Batteries"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="slide__content">
                            <span class="slide__subtitle">Reliable Power Solutions Since 1998</span>
                            <h2 class="slide__title">High-Quality Inverters & Batteries for Every Need</h2>
                            <p class="slide__desc">PowerX Systems offers trusted inverters and batteries from top brands like V-Guard, Luminous, Exide, and Amaron. Get uninterrupted power for your home or business in Payyanur, Kannur.</p>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="{{ url('/products') }}" class="btn btn__primary btn__xl mr-30">
                                    <span>Explore Products</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                                <a href="{{ url('/contact') }}" class="btn btn__white btn__xl">
                                    Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Water Purifiers -->
        <div class="slide-item bg-overlay align-v-h">
            <div class="bg-img"><img src="{{ asset('images/sliders/water-slider.webp') }}" alt="PowerX Systems Water Purifiers"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="slide__content">
                            <span class="slide__subtitle">Pure Water, Healthy Life</span>
                            <h2 class="slide__title">Advanced Water Purifiers for Clean Drinking Water</h2>
                            <p class="slide__desc">PowerX Systems delivers top-quality water purifiers from Kent, Bluemount, and Aqua Grand. Trusted sales and service in Payyanur for over 15 years.</p>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="{{ url('/products') }}" class="btn btn__primary btn__xl mr-30">
                                    <span>Shop Purifiers</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                                <a href="{{ url('/contact') }}" class="btn btn__white btn__xl">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-layout3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-60">
                    <h3 class="heading__title">Reliable Power and Water Solutions</h3>
                    <p class="heading__desc">At PowerX Systems, we provide top-quality inverters, batteries, solar solutions, and water purifiers to meet your home and business needs. Trusted by customers in Payyanur, Kannur for over 25 years.</p>
                </div>
            </div>
        </div>
        <div class="row services-wrapper row-gutter-0">
            <!-- Service Item #1: Inverters -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="service-item">
                    <div class="service__body">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0065B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v20M4 4h16M4 20h16M4 12h16"/>
                                <path d="M9 7.5V4M9 20v-2.5M15 7.5V4M15 20v-2.5M4 7.5h16M4 16.5h16"/>
                            </svg>
                        </div>
                        <h4 class="service__title">Inverters for Uninterrupted Power</h4>
                        <p class="service__desc">Our inverters ensure seamless power backup during outages, keeping your home or business running smoothly.</p>
                    </div>
                    <div class="service__img">
                        <div class="bg-img"><img src="{{ asset('assets/images/services/inverter.jpg') }}" alt="PowerX Systems Inverters"></div>
                    </div>
                </div>
            </div>
            <!-- Service Item #2: Batteries -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="service-item">
                    <div class="service__body">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0065B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="6" width="18" height="12" rx="2"/>
                                <line x1="15" y1="10" x2="15" y2="14"/>
                                <line x1="17" y1="12" x2="13" y2="12"/>
                                <line x1="7" y1="6" x2="7" y2="3"/>
                                <line x1="17" y1="6" x2="17" y2="3"/>
                            </svg>
                        </div>
                        <h4 class="service__title">Long-Lasting Batteries</h4>
                        <p class="service__desc">PowerX Systems offers durable batteries from top brands like Exide and Amaron, designed for maximum performance and reliability.</p>
                    </div>
                    <div class="service__img">
                        <div class="bg-img"><img src="{{ asset('assets/images/services/battery.jpg') }}" alt="PowerX Systems Batteries"></div>
                    </div>
                </div>
            </div>
            <!-- Service Item #3: Solar Solutions -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="service-item">
                    <div class="service__body">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0065B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="6" width="20" height="12" rx="2"/>
                                <line x1="6" y1="10" x2="6" y2="14"/>
                                <line x1="10" y1="10" x2="10" y2="14"/>
                                <line x1="14" y1="10" x2="14" y2="14"/>
                                <line x1="18" y1="10" x2="18" y2="14"/>
                                <path d="M12 3v3M8 3l1 3M16 3l-1 3M12 18v3M8 21l1-3M16 21l-1-3"/>
                            </svg>
                        </div>
                        <h4 class="service__title">Eco-Friendly Solar Solutions</h4>
                        <p class="service__desc">Harness solar energy with our solar water heaters and inverters, providing sustainable power and hot water for your home or business.</p>
                    </div>
                    <div class="service__img">
                        <div class="bg-img"><img src="{{ asset('assets/images/services/solar.jpg') }}" alt="PowerX Systems Solar Solutions"></div>
                    </div>
                </div>
            </div>
            <!-- Service Item #4: Water Purifiers -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="service-item">
                    <div class="service__body">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#0065B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 14c.5-3.5 2.5-6 6-6s5.5 2.5 6 6"/>
                                <path d="M12 14c-1.5 0-2.5 1-2.5 2.5 0 1.5 1 2.5 2.5 2.5s2.5-1 2.5-2.5c0-1.5-1-2.5-2.5-2.5z"/>
                                <path d="M20 4L4 4"/>
                                <path d="M20 9L4 9"/>
                                <path d="M4 4v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4"/>
                            </svg>
                        </div>
                        <h4 class="service__title">Advanced Water Purifiers</h4>
                        <p class="service__desc">Ensure clean and safe drinking water with our range of water purifiers from leading brands like Kent and Bluemount.</p>
                    </div>
                    <div class="service__img">
                        <div class="bg-img"><img src="{{ asset('assets/images/services/water-purifier.jpg') }}" alt="PowerX Systems Water Purifiers"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center align-items-center mt-50">
                <a href="{{ url('/services') }}" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Explore All Services</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="work-process-layout1 bg-overlay bg-overlay-gradient pb-0">
    <div class="bg-img"><img src="assets/images/banners/powerx-solutions.jpg" alt="PowerX Systems Solutions"></div>
    <div class="container">
        <div class="row heading heading-light mb-70">
            <div class="col-12">
                <h2 class="heading__subtitle color-primary">See How It Works!</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
                <h3 class="heading__title">The Right Power and Water Solution For Your Needs</h3>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                <p class="heading__desc mb-30">At PowerX Systems, we specialize in delivering customized power and water solutions, including inverters, batteries, solar systems, and water purifiers. With over 25 years of experience, we ensure our products meet the highest standards of reliability and efficiency for homes and businesses in Payyanur, Kannur.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="processes-wrapper bg-white">
                    <nav class="nav nav-tabs">
                        <a class="nav__link active" data-toggle="tab" href="#process1">
                            <span class="nav__number">1</span>
                            <span>Choose Your Solution</span>
                        </a>
                        <a class="nav__link" data-toggle="tab" href="#process2">
                            <span class="nav__number">2</span>
                            <span>Quick and Easy Setup</span>
                        </a>
                        <a class="nav__link" data-toggle="tab" href="#process3">
                            <span class="nav__number">3</span>
                            <span>We Ensure Reliability</span>
                        </a>
                        <a class="nav__link" data-toggle="tab" href="#process4">
                            <span class="nav__number">4</span>
                            <span>Enjoy Peace of Mind</span>
                        </a>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="process1">
                            <div class="process-item row">
                                <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                    <div class="process__text">
                                        <h4 class="process__title">We Help You Select the Perfect Power or Water Solution for Your Home or Business</h4>
                                        <p class="process__desc">Our team works with you to understand your specific needs and recommends the best inverters, batteries, solar systems, or water purifiers. We ensure a tailored solution that fits your requirements and budget.</p>
                                        <a href="/products" class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                            <span>Explore Products</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="process__img">
                                        <img src="assets/images/work-process/select-solution.jpg" alt="Choose Your Solution">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="process2">
                            <div class="process-item row">
                                <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                    <div class="process__text">
                                        <h4 class="process__title">Quick and Hassle-Free Installation with Expert Support</h4>
                                        <p class="process__desc">Our products are designed for easy installation, and our team is available to assist with setup. Whether it’s an inverter, solar panel, or water purifier, we ensure a smooth and efficient process.</p>
                                        <a href="/services" class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                            <span>View Services</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="process__img">
                                        <img src="assets/images/work-process/quick-setup.jpg" alt="Quick Setup">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="process3">
                            <div class="process-item row">
                                <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                    <div class="process__text">
                                        <h4 class="process__title">We Ensure Your System Runs Flawlessly with Ongoing Support</h4>
                                        <p class="process__desc">PowerX Systems provides comprehensive after-sales service and maintenance to guarantee your power and water solutions perform at their best. Our team is always ready to assist with any issues.</p>
                                        <a href="/contact" class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                            <span>Contact Support</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="process__img">
                                        <img src="assets/images/work-process/reliable-support.jpg" alt="Reliable Support">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="process4">
                            <div class="process-item row">
                                <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                    <div class="process__text">
                                        <h4 class="process__title">Enjoy Uninterrupted Power and Clean Water with Peace of Mind</h4>
                                        <p class="process__desc">With PowerX Systems’ reliable products and expert support, you can rest assured knowing your home or business is equipped with the best power and water solutions available.</p>
                                        <a href="/products" class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                            <span>Shop Now</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="process__img">
                                        <img src="assets/images/work-process/enjoy-peace.jpg" alt="Enjoy Peace of Mind">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients pb-50 border-bottom bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <p class="font-weight-bold my-3">
                    Providing reliable power and water solutions for homes and businesses in Payyanur, Kannur.
                    <a href="{{ url('/products') }}" class="text-underlined">Explore Our Solutions!</a>
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true, "autoplaySpeed": 2000, "infinite": true, "responsive": [{"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <div class="client">
                        <img src="{{ asset('assets/images/brands/v-guard.png') }}" alt="V-Guard Logo">
                    </div>
                    <div class="client">
                        <img src="{{ asset('assets/images/brands/luminous.png') }}" alt="Luminous Logo">
                    </div>
                    <div class="client">
                        <img src="{{ asset('assets/images/brands/kent.png') }}" alt="Kent Logo">
                    </div>
                    <div class="client">
                        <img src="{{ asset('assets/images/brands/exide.png') }}" alt="Exide Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-layout2 bg-overlay bg-overlay-gradient pt-130">
    <div class="bg-img"><img src="{{ asset('assets/images/banners/powerx-solutions.jpg') }}" alt="PowerX Systems Solutions"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading-layout2 heading-light mb-140">
                    <h3 class="heading__title">Reliable Power and Water Solutions</h3>
                    <p class="heading__desc">At PowerX Systems, we provide trusted inverters, batteries, solar solutions, and water purifiers to ensure your home or business runs smoothly. Our solutions are designed for efficiency, sustainability, and peace of mind.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 5, "arrows": true, "dots": false, "autoplay": false, "infinite": false, "responsive": [{"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <div class="feature-item">
                        <h3 class="feature__number">01</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Inverters & UPS</h4>
                            <a href="{{ url('/products/inverters') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h3 class="feature__number">02</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Batteries <br><span style="opacity: 0">-</span></h4>
                            <a href="{{ url('/products/batteries') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h3 class="feature__number">03</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Water Heaters</h4>
                            <a href="{{ url('/products/solar-water-heaters') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h3 class="feature__number">04</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Solar Inverters</h4>
                            <a href="{{ url('/products/solar-inverters') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h3 class="feature__number">05</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Water Purifiers</h4>
                            <a href="{{ url('/products/water-purifiers') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h3 class="feature__number">06</h3>
                        <div class="feature__body">
                            <h4 class="feature__title">Water Filters</h4>
                            <a href="{{ url('/products/vessel-water-filters') }}" class="btn btn__link btn__white">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Explore Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn__download d-flex align-items-center" href="{{ asset('assets/pdf/powerx-catalogue-2024.pdf') }}">
                    <span class="text-right mx-2">
                        <span class="color-body d-block">Discover our full range of solutions</span>
                        <strong class="color-white d-block fz-15">Download 2024 Catalogue</strong>
                    </span>
                    <span class="download__icon">
                        <i class="icon-download"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>

<div class="pt-130">
    <section class="contact-layout2 bg-overlay bg-overlay-primary bg-overlay-primary-gradient">
        <div class="bg-img"><img src="{{ asset('assets/images/banners/powerx-solutions.jpg') }}" alt="PowerX Systems Power and Water Solutions"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 d-flex flex-column justify-content-between">
                    <div>
                        <div class="heading-layout2 heading-light mb-40">
                            <h3 class="heading__title">From Inverters and Batteries to Solar Solutions and Water Purifiers!</h3>
                            <p class="heading__desc">With over 25 years of experience, PowerX Systems provides top-quality power and water solutions, including inverters, batteries, solar water heaters, and water purifiers. We offer sales and service for leading brands in Payyanur, Kannur.</p>
                        </div>
                        <div class="d-flex flex-wrap mb-40">
                            <a href="{{ url('/products') }}" class="btn btn__white btn__xl mr-30">
                                <span>Explore Products</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{ url('/services') }}" class="btn btn__white btn__outlined btn__xl">View Services</a>
                        </div>
                    </div>
                    <div class="fancyboxs-layout2 fancybox-light">
                        <div class="fancybox-item d-flex flex-wrap">
                            <div class="fancybox__icon">
                                <i class="icon-check"></i>
                            </div>
                            <div class="fancybox__body">
                                <h4 class="fancybox__title">Reliable Power Backup</h4>
                                <p class="fancybox__desc">Our inverters and batteries deliver uninterrupted power for homes and businesses, ensuring peace of mind during outages.</p>
                            </div>
                        </div>
                        <div class="fancybox-item d-flex flex-wrap">
                            <div class="fancybox__icon">
                                <i class="icon-check"></i>
                            </div>
                            <div class="fancybox__body">
                                <h4 class="fancybox__title">Eco-Friendly Solutions</h4>
                                <p class="fancybox__desc">Save energy and reduce your carbon footprint with our solar water heaters and solar inverters.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="contact-panel">
                        <form class="contact-panel__form" method="post" action="{{ url('/contact/submit') }}" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                    <p class="contact-panel__desc mb-30">Fill out the form below, and we’ll get back to you. Or call us at <strong class="color-secondary">+91 9447 55 3075</strong> for immediate assistance!</p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="inquiryType">Inquiry Type</label>
                                        <select id="inquiryType" class="form-control" name="inquiry_type" required>
                                            <option value="product_purchase">Product Purchase</option>
                                            <option value="service_request">Service Request</option>
                                            <option value="general_inquiry">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="productCategory">Product Category</label>
                                        <select id="productCategory" class="form-control" name="product_category" required>
                                            <option value="inverters">Inverters</option>
                                            <option value="batteries">Batteries</option>
                                            <option value="solar_water_heaters">Solar Water Heaters</option>
                                            <option value="solar_inverters">Solar Inverters</option>
                                            <option value="water_purifiers">Water Purifiers</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message" name="message" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn__secondary btn__xl">
                                        <i class="icon-arrow-right icon-filled"></i> <span>Submit Request</span>
                                    </button>
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
@endsection
