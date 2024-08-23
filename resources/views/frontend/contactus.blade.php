
@extends('frontend.frontend-page-master')
@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-background-transparent-2.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-12 font-weight-semibold">Contact us</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{route('homepage')}}">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section border-0 py-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row py-5 my-5">
                        <div class="col-md-6">
                            <h2 class="font-weight-bold text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="color: #f6941c;">Get In Touch</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Work Inquiries</h3>
                                <a href="tel:+15199983406" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(+1) 519-998-3406</a>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Careers & Press</h3>
                                <a href="tel:+15199983406" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(+1) 519-998-3406</a>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Assistance Hours</h3>
                                <p>Mon - Sat 9:00am - 8:00pm<br> Sunday - CLOSED</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="font-weight-bold  text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="color: #f6941c;">
                                Address and E-mail
                            </h2>                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
                                <p>118 Marigold Grds,<br>Oakville,  <br>ON,Canada.</p>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
                                <a href="mailto:info@worldofdesigns.ca" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">info@worldofdesigns.ca</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 fluid-col-lg-5 p-0">
                    <div class="fluid-col h-100">

                        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                        <iframe
                                width="100%"
                                height="100%"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?q={{get_static_option('contact_page_map_section_latitude')}},{{get_static_option('contact_page_map_section_longitude')}}&hl=en-US&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card bg-primary border-0 border-radius-0">
                    <div class="card-body p-5">
                        <h3 class="d-block alternative-font-4 text-color-light font-weight-medium opacity-8 text-4 mb-0">ANY QUESTIONS?</h3>
                        <h2 class="text-color-light font-weight-bold text-9 pb-2 mb-4">Frequent Asked Questions</h2>

                        <div class="custom-seemore-overlay mb-4" style="max-height: 400px;">
                            <div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQOne">
                                                1- Why choose World of Design?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQOne" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">At World of Design, we pride ourselves on our ability to deliver innovative and creative architectural solutions. Our team stays ahead of industry trends and incorporates the latest technologies and materials to create unique and inspiring designs.</div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQTwo">
                                                2- How can I request a consultation or quote?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQTwo" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">To request a consultation or quote, please fill out the contact form on our website or email us directly with details about your project. We will get back to you within 24 hours to discuss your requirements.</div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQFour">
                                                3- What is your design process?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQFour" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">Our design process includes initial consultation, site analysis, concept development, schematic design, design development, construction documentation, and construction administration. We collaborate closely with our clients at each stage to ensure their vision is realized.</div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQFive">
                                                4- Do you offer project management services?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQFive" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">Yes, we provide full project management services to oversee every aspect of the project from concept to completion, ensuring that it is delivered on time and within budget.</div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQSix">
                                                5- How long does a typical project take?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQSix" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">Project timelines vary based on complexity and scope. A typical project can take anywhere from a few months to over a year. We will provide a detailed timeline during the initial consultation.</div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQSeven">
                                                6- Can you work with my existing design concepts or plans?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQSeven" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">Absolutely. We can incorporate your existing design concepts or plans into our process to ensure a cohesive and comprehensive final design.
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-bs-toggle="collapse" href="#collapseFAQEight">
                                                7- What sustainability practices do you implement?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQEight" class="collapse" data-bs-parent="#FAQAccordion">
                                        <div class="card-body ps-4 pt-2">
                                            <p class="mb-0">We prioritize sustainable design and construction practices, incorporating energy-efficient systems, sustainable materials, and innovative solutions to minimize environmental impact.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="custom-seemore-overlay-button text-color-light text-5"><i class="fas fa-chevron-down position-relative z-index-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="requestConsultation" class="col-lg-6 col-xl-5 offset-xl-1">
                <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 text-lg-end mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">LET'S TALK</h3>
                <h2 class="text-color-dark font-weight-bold text-9 text-lg-end pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Request Consultation</h2>

                <form class="custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="https://formsubmit.co/info@worldofdesigns.ca" method="POST">
                    @csrf
                    <input type="hidden" name="_template" value="box">
                    <input type="hidden" name="_autoresponse" value="Thank you for sending the email. The support team from Bwa Creative Art Solutions will contact you">
                    <input type="hidden" name="_next" value="https://worldofdesigns.ca/contactus">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your request.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">Send</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0">Word of Designs <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> House!</h2>
                        <p class="mb-0">Contact Us</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection