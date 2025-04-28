@extends('layouts.webmaster')
@section('title', 'Gallery - MAS International Educare | Bangladesh')
@section('page-css')
<style>
    .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .gallery-category {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }
        
        .gallery-category::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .gallery-item {
            position: relative;
            margin-bottom: 30px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
        }
        
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }
        
        .gallery-caption {
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
        
        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }
        
        .filter-buttons {
            margin-bottom: 30px;
        }
        
        .filter-btn {
            border: none;
            background: none;
            padding: 8px 20px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
        }
</style>
@endsection

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Our Gallery</h1>
        <p class="lead mb-4">Capturing moments from our Japanese language classes, cultural events, and student activities</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Gallery Filter -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Explore Our Moments</h2>
            <p class="text-muted">Filter by category to see specific collections</p>
        </div>
        
        <div class="text-center filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="classes">Classroom</button>
            <button class="filter-btn" data-filter="events">Cultural Events</button>
            <button class="filter-btn" data-filter="facilities">Facilities</button>
            <button class="filter-btn" data-filter="students">Student Activities</button>
            <button class="filter-btn" data-filter="achievements">Achievements</button>
        </div>
        
        <!-- Classroom Gallery -->
        <div class="mb-5">
            <h3 class="gallery-category">Classroom Moments</h3>
            <div class="row gallery-container">
                <div class="col-lg-4 col-md-6 gallery-item" data-category="classes">
                    <a href="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="classes" data-title="Japanese Language Class in Session">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Japanese Class" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Class in Session</h5>
                            <p>Students learning basic Japanese grammar</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="classes">
                    <a href="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="classes" data-title="Interactive Learning Session">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Interactive Learning" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Interactive Session</h5>
                            <p>Group activity during Japanese lesson</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="classes">
                    <a href="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="classes" data-title="JLPT Preparation Class">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="JLPT Preparation" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>JLPT Preparation</h5>
                            <p>Students practicing for Japanese proficiency test</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Cultural Events Gallery -->
        <div class="mb-5">
            <h3 class="gallery-category">Cultural Events</h3>
            <div class="row gallery-container">
                <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                    <a href="https://images.unsplash.com/photo-1547592180-85f173990554?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="events" data-title="Japanese Tea Ceremony Workshop">
                        <img src="https://images.unsplash.com/photo-1547592180-85f173990554?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Tea Ceremony" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Tea Ceremony</h5>
                            <p>Traditional Japanese tea ceremony demonstration</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                    <a href="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="events" data-title="Japanese Calligraphy Class">
                        <img src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Calligraphy" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Calligraphy Workshop</h5>
                            <p>Students learning Japanese calligraphy (Shodo)</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="events">
                    <a href="https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="events" data-title="Japanese Cultural Festival">
                        <img src="https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Cultural Festival" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Cultural Festival</h5>
                            <p>Annual Japanese cultural festival at our center</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Facilities Gallery -->
        <div class="mb-5">
            <h3 class="gallery-category">Our Facilities</h3>
            <div class="row gallery-container">
                <div class="col-lg-4 col-md-6 gallery-item" data-category="facilities">
                    <a href="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="facilities" data-title="Modern Classroom Facility">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Classroom" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Classroom</h5>
                            <p>Our modern, well-equipped classroom</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="facilities">
                    <a href="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="facilities" data-title="Language Learning Resource Center">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Resource Center" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Resource Center</h5>
                            <p>Japanese language learning materials library</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="facilities">
                    <a href="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="facilities" data-title="Student Lounge Area">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Student Lounge" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Student Lounge</h5>
                            <p>Comfortable space for students to relax</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Student Activities Gallery -->
        <div class="mb-5">
            <h3 class="gallery-category">Student Activities</h3>
            <div class="row gallery-container">
                <div class="col-lg-4 col-md-6 gallery-item" data-category="students">
                    <a href="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="students" data-title="Japanese Language Club Meeting">
                        <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Language Club" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Language Club</h5>
                            <p>Weekly Japanese language practice session</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="students">
                    <a href="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="students" data-title="Group Study Session">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Group Study" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Group Study</h5>
                            <p>Students collaborating on Japanese projects</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="students">
                    <a href="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="students" data-title="Student Presentation">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Student Presentation" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Student Presentation</h5>
                            <p>Delivering a presentation in Japanese</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Achievements Gallery -->
        <div class="mb-5">
            <h3 class="gallery-category">Student Achievements</h3>
            <div class="row gallery-container">
                <div class="col-lg-4 col-md-6 gallery-item" data-category="achievements">
                    <a href="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="achievements" data-title="JLPT Certification Ceremony">
                        <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Certification" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>JLPT Certification</h5>
                            <p>Students receiving JLPT certificates</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="achievements">
                    <a href="https://images.unsplash.com/photo-1460518451285-97b6aa326961?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="achievements" data-title="Study in Japan Scholarship Winners">
                        <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Scholarship" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Scholarship Winners</h5>
                            <p>Students awarded scholarships to Japan</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-lg-4 col-md-6 gallery-item" data-category="achievements">
                    <a href="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" data-lightbox="achievements" data-title="Graduation Ceremony">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Graduation" class="gallery-img">
                        <div class="gallery-caption">
                            <h5>Graduation</h5>
                            <p>Advanced course completion ceremony</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="contact.html" class="btn btn-primary-custom">Share Your Photos With Us</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Want to Be Part of Our Story?</h2>
        <p class="lead mb-5">Join our Japanese language courses and create your own memorable moments</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="courses.html" class="btn btn-light btn-lg px-4">View Courses</a>
            <a href="apply.html" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
        </div>
    </div>
</section>
<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    // Filter gallery items
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection