@extends('layouts.webmaster')
@section('title', 'About Us - MAS Educare | Japanese Language Learning Center in Bangladesh')
@section('page-css')
<style>
    .page-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 120px 0;
        text-align: center;
    }
    .mission-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }
    .team-member {
        position: relative;
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .team-member img {
        transition: transform 0.3s;
        width: 100%;
    }
    
    .team-member:hover img {
        transform: scale(1.05);
    }
    
    .team-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(32, 187, 236, 0.9);
        color: white;
        padding: 15px;
        transform: translateY(100%);
        transition: transform 0.3s;
    }
    
    .team-member:hover .team-info {
        transform: translateY(0);
    }
    
    .stats-item {
        text-align: center;
        padding: 30px 15px;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
    }
    
    .stats-item:hover {
        transform: translateY(-10px);
    }
    
    .stats-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 10px;
    }
    
    .stats-text {
        color: var(--dark-color);
        font-weight: 600;
    }
    
    .timeline {
        position: relative;
        padding-left: 50px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: var(--primary-color);
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 30px;
    }
    
    .timeline-dot {
        position: absolute;
        left: -40px;
        top: 0;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }
</style>
@endsection
@section('content')
 <!-- Page Header -->
 <section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">About MAS Educare</h1>
        <p class="lead mb-4">Your trusted partner for Japanese language education and work visa processing</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4 text-primary-custom">Our Story</h2>
                <p class="lead">Pioneering Japanese language education in Bangladesh since 2010.</p>
                <p>MAS Educare was founded with a vision to bridge the cultural and linguistic gap between Bangladesh and Japan. What began as a small language center has now grown into one of the most trusted institutions for Japanese language learning and student work visa processing in Bangladesh.</p>
                <p>Our journey has been marked by thousands of success stories - students who have not only mastered the Japanese language but have also successfully established their careers in Japan. We take pride in being more than just a language school; we are a gateway to new opportunities and cultural exchange.</p>
                <a href="contact.html" class="btn btn-primary-custom mt-3">Get in Touch</a>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Our Language Center" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Mission & Values</h2>
            <p class="text-muted">What drives us every day</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mission-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h4>Language Excellence</h4>
                    <p class="text-muted">We are committed to delivering the highest standard of Japanese language education, ensuring our students achieve true proficiency.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mission-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Cultural Bridge</h4>
                    <p class="text-muted">We don't just teach language; we foster cultural understanding between Bangladesh and Japan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="mission-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4>Student Success</h4>
                    <p class="text-muted">Every student's achievement is our success. We measure our performance by their accomplishments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">12+</div>
                    <h5 class="stats-text">Years Experience</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">1500+</div>
                    <h5 class="stats-text">Students Trained</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">98%</div>
                    <h5 class="stats-text">JLPT Pass Rate</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-item">
                    <div class="stats-number">500+</div>
                    <h5 class="stats-text">Visa Success</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Leadership</h2>
            <p>The dedicated professionals behind MAS Educare</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Founder">
                    <div class="team-info">
                        <h5 class="mb-1">Mohammad Ali</h5>
                        <p class="mb-0">Founder & Director</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Academic Head">
                    <div class="team-info">
                        <h5 class="mb-1">Ayesha Rahman</h5>
                        <p class="mb-0">Academic Head</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Visa Consultant">
                    <div class="team-info">
                        <h5 class="mb-1">Kamal Hossain</h5>
                        <p class="mb-0">Visa Consultant</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="teachers.html" class="btn btn-light">View All Teachers</a>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Journey</h2>
            <p class="text-muted">Milestones in our growth and development</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2010 - Foundation</h5>
                        <p class="card-text">MAS Edu Care was established with a single classroom and two teachers, offering basic Japanese language courses.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot">
                    <i class="fas fa-building"></i>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2013 - First Expansion</h5>
                        <p class="card-text">Moved to a larger facility and introduced JLPT preparation courses, responding to growing demand.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot">
                    <i class="fas fa-passport"></i>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2015 - Visa Services</h5>
                        <p class="card-text">Began offering student work visa processing assistance, helping our first batch of students move to Japan.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2018 - Recognition</h5>
                        <p class="card-text">Received accreditation from the Japan Foundation as an official Japanese language education provider.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot">
                    <i class="fas fa-star"></i>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2023 - Present</h5>
                        <p class="card-text">Now operating from three locations in Bangladesh with over 20 teachers and 500+ students annually.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-secondary-custom text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Ready to Begin Your Japanese Language Journey?</h2>
        <p class="lead mb-5">Join hundreds of successful students who have transformed their lives through MAS Edu Care.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="contact.html" class="btn btn-light btn-lg px-4">Contact Us</a>
            <a href="apply.html" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
        </div>
    </div>
</section>

@endsection