@extends('layouts.webmaster')
@section('title', 'Japanese Language Courses - MAS Educare | Bangladesh')
@section('page-css')
<style>
    .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .course-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }
        
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .course-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .course-level {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .course-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .jlpt-badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .feature-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s;
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
</style>
@endsection
@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Japanese Language Courses</h1>
        <p class="lead mb-4">Comprehensive programs for all levels, from beginners to advanced learners</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Courses</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Courses Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Course Offerings</h2>
            <p class="text-muted">Structured programs designed for effective Japanese language acquisition</p>
        </div>
        
        <div class="row g-4">
            <!-- Beginner Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Beginner Japanese" class="course-img">
                        <span class="course-level">Beginner</span>
                    </div>
                    <div class="p-4">
                        <h4>Basic Japanese</h4>
                        <p>Start your journey with fundamental Japanese language skills including hiragana, katakana, and basic kanji.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>3 Months (120 Hours)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>Minna no Nihongo I (First Half)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">JLPT N5 Level</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Intermediate Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Intermediate Japanese" class="course-img">
                        <span class="course-level">Intermediate</span>
                    </div>
                    <div class="p-4">
                        <h4>Intermediate Japanese</h4>
                        <p>Build on your foundation with more complex grammar structures, expanded vocabulary, and conversational practice.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>4 Months (160 Hours)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>Minna no Nihongo I (Second Half) + II</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">JLPT N4 Level</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1492571350019-22de08371fd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Advanced Japanese" class="course-img">
                        <span class="course-level">Advanced</span>
                    </div>
                    <div class="p-4">
                        <h4>Advanced Japanese</h4>
                        <p>Master complex Japanese structures, business communication, and advanced reading comprehension.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>6 Months (240 Hours)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>Tobira + Authentic Materials</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">JLPT N3-N2 Level</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- JLPT Preparation -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="JLPT Preparation" class="course-img">
                        <span class="course-level">Specialized</span>
                    </div>
                    <div class="p-4">
                        <h4>JLPT Preparation</h4>
                        <p>Intensive training for Japanese Language Proficiency Test (N5-N1) with mock exams and strategy sessions.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>2-3 Months per Level</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>JLPT-Specific Materials + Past Papers</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">N5 to N1 Levels</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Business Japanese -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Business Japanese" class="course-img">
                        <span class="course-level">Specialized</span>
                    </div>
                    <div class="p-4">
                        <h4>Business Japanese</h4>
                        <p>Learn keigo (honorifics), business etiquette, email writing, and professional communication skills.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>3 Months (90 Hours)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>Business Japanese 101 + Case Studies</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">N3 Level Required</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Conversation Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Conversation Course" class="course-img">
                        <span class="course-level">Specialized</span>
                    </div>
                    <div class="p-4">
                        <h4>Conversation Practice</h4>
                        <p>Improve fluency through structured speaking exercises, role-plays, and discussions with native speakers.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock course-icon"></i>
                            <div>
                                <h6 class="mb-0">Duration</h6>
                                <small>Flexible (1-3 Months)</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-book course-icon"></i>
                            <div>
                                <h6 class="mb-0">Curriculum</h6>
                                <small>Daily Life Scenarios + Cultural Topics</small>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span class="jlpt-badge">All Levels</span>
                            <a href="#" class="btn btn-sm btn-primary-custom">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="contact.html" class="btn btn-primary-custom btn-lg px-4">Need Help Choosing a Course?</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Learn With Us?</h2>
            <p class="text-muted">Our unique approach to Japanese language education</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4>Expert Instructors</h4>
                    <p>Learn from certified Japanese language teachers with years of experience and specialized training.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Small Class Sizes</h4>
                    <p>Maximum 8 students per class ensures personalized attention and ample speaking practice.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h4>Blended Learning</h4>
                    <p>Combination of classroom instruction, online resources, and mobile learning tools.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Certification</h4>
                    <p>Receive recognized certificates upon course completion to validate your skills.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-passport"></i>
                    </div>
                    <h4>Visa Guidance</h4>
                    <p>Special support for students planning to study or work in Japan after course completion.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h4>Cultural Immersion</h4>
                    <p>Regular cultural events, tea ceremonies, and calligraphy workshops included.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary-custom text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Start Your Japanese Language Journey Today</h2>
        <p class="lead mb-5">Join our next batch and take the first step towards Japanese proficiency</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="contact.html" class="btn btn-light btn-lg px-4">Contact Us</a>
            <a href="apply.html" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
        </div>
    </div>
</section>
@endsection