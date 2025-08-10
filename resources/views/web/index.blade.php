@extends('layouts.webmaster')
@section('title', 'MAS Educare - Japanese Language Learning Center in Bangladesh')
@section('page-css')
<style>
    .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .process-step {
            position: relative;
            padding-left: 80px;
            margin-bottom: 30px;
        }
        
        .process-step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }
        
        .testimonial-card {
            border-left: 4px solid var(--primary-color);
        }
        
</style>
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Learn Japanese with MAS Educare</h1>
        <p class="lead mb-5">Your pathway to Japanese language proficiency and work opportunities in Japan</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-primary-custom btn-lg px-4">Start Learning</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Visa Process</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Choose MAS Educare?</h2>
            <p class="text-muted">We provide the best Japanese language education in Bangladesh</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4>Expert Teachers</h4>
                    <p class="text-muted">Learn from certified Japanese language instructors with years of teaching experience.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="feature-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <h4>Visa Assistance</h4>
                    <p class="text-muted">Comprehensive support for student work visa processing to Japan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Modern Facilities</h4>
                    <p class="text-muted">State-of-the-art classrooms and learning resources for effective study.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Japanese Class" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-0">About</h2>
                <p class="mt-0">MAS Educare</p>
                <p class="lead">Leading Japanese language education center in Bangladesh.</p>
                <p>MAS Educare is dedicated to providing high-quality Japanese language education and facilitating student work visas to Japan. Our mission is to bridge the cultural and linguistic gap between Bangladesh and Japan.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check text-primary-custom me-2"></i> Certified Japanese language courses</li>
                    <li class="mb-2"><i class="fas fa-check text-primary-custom me-2"></i> Experienced native and local teachers</li>
                    <li class="mb-2"><i class="fas fa-check text-primary-custom me-2"></i> Comprehensive visa processing support</li>
                    <li class="mb-2"><i class="fas fa-check text-primary-custom me-2"></i> Modern learning environment</li>
                </ul>
                <a href="#" class="btn btn-primary-custom mt-3">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Step-by-Step Process</h2>
            <p class="text-muted">Easy and transparent procedures for learning and visa processing</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="process-step-number">1</div>
                    <h4>Language Assessment</h4>
                    <p>We evaluate your current Japanese language level to place you in the appropriate course.</p>
                </div>
                <div class="process-step">
                    <div class="process-step-number">2</div>
                    <h4>Course Enrollment</h4>
                    <p>Register for your selected Japanese language course and begin your learning journey.</p>
                </div>
                <div class="process-step">
                    <div class="process-step-number">3</div>
                    <h4>Regular Classes</h4>
                    <p>Attend interactive classes with our expert teachers to develop your language skills.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-step">
                    <div class="process-step-number">4</div>
                    <h4>Visa Consultation</h4>
                    <p>Meet with our visa experts to understand the requirements for student work visas.</p>
                </div>
                <div class="process-step">
                    <div class="process-step-number">5</div>
                    <h4>Document Preparation</h4>
                    <p>We assist you in preparing all necessary documents for your visa application.</p>
                </div>
                <div class="process-step">
                    <div class="process-step-number">6</div>
                    <h4>Visa Processing</h4>
                    <p>Our team handles the entire visa application process with the Japanese authorities.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-secondary-custom">Detailed Process</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Students Say</h2>
            <p class="text-muted">Success stories from our students</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="testimonial-card p-3">
                            <p class="fst-italic">"MAS Educare helped me achieve N5 level in just in year. Their teaching methods are excellent and the teachers are very supportive."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset('images/person-1.jpeg') }}" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Md. Mahdi Hasan</h6>
                                    <small class="text-muted">N5 Passed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="testimonial-card p-3">
                            <p class="fst-italic">"The visa processing support was flawless. Thanks to MAS Educare's guidance throughout the entire process."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset('images/person-2.jpeg') }}" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Md. Mahbubur Rahman</h6>
                                    <small class="text-muted">N4 Passsed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="testimonial-card p-3">
                            <p class="fst-italic">"The facilities are modern and the curriculum is well-structured. I improved from zero to conversational level in just 6 months."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset('images/person-3.jpeg') }}" alt="Student" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Md. Shahed</h6>
                                    <small class="text-muted">N5 Passed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Start Your Japanese Language Journey?</h2>
        <p class="lead mb-5">Join MAS Educare today and take the first step towards your future in Japan.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-light btn-lg px-4">Contact Us</a>
            <a href="#" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
        </div>
    </div>
</section>
@endsection