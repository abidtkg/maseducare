@extends('layouts.webmaster')
@section('title', 'Contact Us - MAS Educare | Japanese Language Center in Bangladesh')
@section('page-css')
<style>
    .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .contact-card {
            border-radius: 8px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            border-top: 4px solid var(--primary-color);
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
        }
        
        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(32, 187, 236, 0.25);
        }
        
        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
</style>
@endsection
@section('content')
 <!-- Page Header -->
 <section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Contact MAS Educare</h1>
        <p class="lead mb-4">We're here to answer your questions about Japanese language courses and visa processing</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Methods Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Get In Touch</h2>
            <p class="text-muted">Multiple ways to reach our team</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Visit Us</h4>
                    <p class="mb-4">House-182, Road-E1, Block-B, Eastern Housing (Pallabi Phase 2), Rupnagar, Mirpur, Dhaka-1216, Bangladesh.</p>
                    <a href="#map" class="btn btn-sm btn-outline-primary">View on Map</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p class="mb-1"><strong>Admissions:</strong> +880 1867-888667</p>
                    <p><strong>General Inquiries:</strong> +880 1812-542969</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p class="mb-1"><strong>Admissions:</strong> contact@maseducare.com</p>
                    <p><strong>General Inquiries:</strong> masinternationaleducare.bd@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Send Us a Message</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject">
                                        <option selected>Select a subject</option>
                                        <option>Course Information</option>
                                        <option>Admission Process</option>
                                        <option>Visa Assistance</option>
                                        <option>Other Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-custom">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Our Location</h3>
                        <div class="map-container mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.3910801154319!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhaka%201205!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        
                        <h4 class="mb-3">Office Hours</h4>
                        <div class="office-hour mb-3">
                            <h6 class="mb-1">Weekdays</h6>
                            <p class="mb-0">9:00 AM - 6:00 PM</p>
                        </div>
                        <div class="office-hour">
                            <h6 class="mb-1">Weekends</h6>
                            <p class="mb-0">Office Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Frequently Asked Questions</h2>
            <p class="text-muted">Common questions about our courses and services</p>
        </div>
        
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the admission requirements for your courses?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our beginner courses have no prerequisites. For intermediate and advanced courses, we require either completion of our previous level or passing a placement test. You'll need to provide a copy of your national ID or passport and two passport-sized photos during registration.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        When do new batches start?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We start new beginner batches every month. Intermediate and advanced batches start quarterly. JLPT preparation courses begin 3 months before each JLPT exam date. Check our website or contact admissions for the exact dates of upcoming batches.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do you offer online classes?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer both in-person and online classes for most of our courses. Online classes are conducted via Zoom with the same curriculum and materials as our physical classes. Some specialized courses may require in-person attendance for certain activities.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How long does the student visa process take?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        The complete visa process typically takes 4-6 months from application to approval. This includes language course enrollment, document preparation, school application in Japan, and embassy processing. We recommend starting the process at least 6 months before your intended study start date in Japan.
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What payment methods do you accept?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We accept cash, bank transfers, mobile banking (bKash, Nagad), and credit/debit cards. For installment plans, we require an initial deposit with the remaining balance paid according to the agreed schedule. All fees are payable in Bangladeshi Taka.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p>Have more questions? <a href="#contact-form" class="text-primary-custom fw-bold">Contact us directly</a></p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Start Your Japanese Language Journey?</h2>
        <p class="lead mb-5">Contact us today to schedule a consultation or campus visit</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="tel:+8801234567890" class="btn btn-light btn-lg px-4"><i class="fas fa-phone me-2"></i> Call Now</a>
            <a href="apply.html" class="btn btn-outline-light btn-lg px-4">Apply Online</a>
        </div>
    </div>
</section>
@endsection