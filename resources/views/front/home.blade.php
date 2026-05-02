@extends('layouts.app')
@section('title', setting('seo.meta_title', 'MAS EduCare — Japanese Language Center'))

@section('content')

{{-- ===== HERO ===== --}}
<section style="
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #1A1A2E 0%, #2D2D44 50%, #3a1520 100%);
    overflow: hidden;
">
    @if(setting('hero.background_image'))
    <div style="position:absolute;inset:0;background:url('{{ asset(setting('hero.background_image')) }}') center/cover no-repeat;opacity:.25"></div>
    @endif
    <svg style="position:absolute;right:-40px;top:50%;transform:translateY(-50%);opacity:.08;width:420px" viewBox="0 0 200 300" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="20" y="60" width="160" height="12" fill="#C8102E" rx="4"/>
        <rect x="30" y="40" width="140" height="10" fill="#C8102E" rx="4"/>
        <rect x="40" y="70" width="12" height="220" fill="#C8102E" rx="4"/>
        <rect x="148" y="70" width="12" height="220" fill="#C8102E" rx="4"/>
    </svg>

    <div class="container" style="position:relative;z-index:2;padding-top:80px;padding-bottom:80px">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <p style="color:var(--mas-sakura);font-size:.95rem;letter-spacing:3px;font-weight:600;text-transform:uppercase;margin-bottom:16px">
                    {{ __('messages.home.institute_badge') }}
                </p>
                <h1 style="font-size:clamp(2.2rem,5vw,3.8rem);font-weight:900;color:white;line-height:1.15;margin-bottom:24px">
                    {{ setting('hero.headline', 'Open the Door to Your Dream in Japan') }}
                </h1>
                <p style="font-size:1.15rem;color:rgba(255,255,255,.8);max-width:600px;line-height:1.85;margin-bottom:36px">
                    {{ setting('hero.subheadline') }}
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('courses') }}" class="btn btn-lg" style="background:var(--mas-crimson);color:white;border-radius:30px;padding:14px 32px;font-weight:700;box-shadow:0 6px 24px rgba(200,16,46,.4)">
                        <i class="bi bi-pencil-square me-2"></i>{{ setting('hero.cta_primary_text', __('messages.common.enroll_now')) }}
                    </a>
                    <a href="{{ route('visa') }}" class="btn btn-lg" style="border:2px solid rgba(255,255,255,.6);color:white;border-radius:30px;padding:14px 32px;font-weight:600">
                        <i class="bi bi-info-circle me-2"></i>{{ setting('hero.cta_secondary_text', __('messages.common.see_details')) }}
                    </a>
                </div>

                <div class="d-flex flex-wrap gap-3 mt-5">
                    <div class="stat-badge"><div class="stat-number">500+</div><div class="stat-label">🎓 {{ __('messages.common.graduates') }}</div></div>
                    <div class="stat-badge"><div class="stat-number">200+</div><div class="stat-label">✈️ {{ __('messages.common.departures') }}</div></div>
                    <div class="stat-badge"><div class="stat-number">95%</div><div class="stat-label">📋 {{ __('messages.common.visa_rate') }}</div></div>
                    <div class="stat-badge"><div class="stat-number">6+</div><div class="stat-label">🏫 {{ __('messages.common.senseis') }}</div></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== WHY CHOOSE US ===== --}}
<section class="py-6" style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.why_choose_label') }}</p>
            <h2 class="section-title">{{ __('messages.home.why_choose_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-book-half"></i></div>
                    <h4 class="fw-bold mb-3">{{ __('messages.home.feature1_title') }}</h4>
                    <p style="color:var(--mas-gray);line-height:1.8">{{ __('messages.home.feature1_desc') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-airplane-fill"></i></div>
                    <h4 class="fw-bold mb-3">{{ __('messages.home.feature2_title') }}</h4>
                    <p style="color:var(--mas-gray);line-height:1.8">{{ __('messages.home.feature2_desc') }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-person-check-fill"></i></div>
                    <h4 class="fw-bold mb-3">{{ __('messages.home.feature3_title') }}</h4>
                    <p style="color:var(--mas-gray);line-height:1.8">{{ __('messages.home.feature3_desc') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FOUNDER'S MESSAGE ===== --}}
@if(setting('about.founder_name'))
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center">
                @if(setting('about.founder_photo'))
                    <img src="{{ asset(setting('about.founder_photo')) }}" alt="{{ setting('about.founder_name') }}" class="img-fluid rounded-3" style="box-shadow:var(--shadow-hover);max-height:380px;object-fit:cover;width:100%">
                @else
                    <div style="width:200px;height:200px;border-radius:50%;background:var(--mas-light-bg);display:flex;align-items:center;justify-content:center;margin:0 auto;font-size:5rem;color:var(--mas-crimson)">
                        <i class="bi bi-person-circle"></i>
                    </div>
                @endif
                <h5 class="mt-3 fw-bold">{{ setting('about.founder_name') }}</h5>
                <p style="color:var(--mas-crimson);font-size:.9rem">{{ setting('about.founder_title') }}</p>
            </div>
            <div class="col-lg-8">
                <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.founders_label') }}</p>
                <h2 class="section-title mb-3">{{ __('messages.home.founders_title') }}</h2>
                <div class="title-divider left"></div>
                <div style="position:relative;padding-left:24px">
                    <span class="founder-quote-mark">"</span>
                    <p style="font-size:1.2rem;font-style:italic;color:var(--mas-ink);line-height:1.85;margin-top:-20px">
                        {{ setting('about.founder_quote') }}
                    </p>
                </div>
                <p style="color:var(--mas-gray);line-height:1.9;margin-top:16px">{{ setting('about.founder_bio') }}</p>
                <a href="{{ route('about') }}" class="btn mt-3" style="background:var(--mas-crimson);color:white;border-radius:25px;padding:10px 24px">{{ __('messages.common.learn_more') }} <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ===== OUR COURSES ===== --}}
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.programs_label') }}</p>
            <h2 class="section-title">{{ __('messages.home.courses_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-5 col-md-6">
                <div class="course-card">
                    <div class="course-card-header">
                        <span class="course-level-badge">{{ __('messages.common.beginner') }}</span>
                        <h3 class="fw-bold mb-1">JLPT N5</h3>
                        <p style="opacity:.85;font-size:.95rem">{{ __('messages.home.n5_sub') }}</p>
                    </div>
                    <div class="p-4">
                        <p style="color:var(--mas-gray);line-height:1.9">{{ setting('courses.n5_description') }}</p>
                        <div class="d-flex gap-3 my-3 flex-wrap">
                            <span class="badge" style="background:var(--mas-light-bg);color:var(--mas-ink);padding:8px 14px;font-size:.9rem"><i class="bi bi-clock me-1 text-crimson"></i>{{ setting('courses.n5_duration', '3 months') }}</span>
                            <span class="badge" style="background:var(--mas-light-bg);color:var(--mas-ink);padding:8px 14px;font-size:.9rem"><i class="bi bi-cash me-1 text-crimson"></i>{{ setting('courses.n5_fee') }}</span>
                        </div>
                        <a href="{{ route('courses') }}" class="btn w-100" style="background:var(--mas-crimson);color:white;border-radius:25px;padding:10px">{{ __('messages.common.enroll_now') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="course-card">
                    <div class="course-card-header" style="background:var(--mas-ink)">
                        <span class="course-level-badge">{{ __('messages.common.intermediate') }}</span>
                        <h3 class="fw-bold mb-1">JLPT N4</h3>
                        <p style="opacity:.85;font-size:.95rem">{{ __('messages.home.n4_sub') }}</p>
                    </div>
                    <div class="p-4">
                        <p style="color:var(--mas-gray);line-height:1.9">{{ setting('courses.n4_description') }}</p>
                        <div class="d-flex gap-3 my-3 flex-wrap">
                            <span class="badge" style="background:var(--mas-light-bg);color:var(--mas-ink);padding:8px 14px;font-size:.9rem"><i class="bi bi-clock me-1 text-crimson"></i>{{ setting('courses.n4_duration', '4 months') }}</span>
                            <span class="badge" style="background:var(--mas-light-bg);color:var(--mas-ink);padding:8px 14px;font-size:.9rem"><i class="bi bi-cash me-1 text-crimson"></i>{{ setting('courses.n4_fee') }}</span>
                        </div>
                        <a href="{{ route('courses') }}" class="btn w-100" style="background:var(--mas-ink);color:white;border-radius:25px;padding:10px">{{ __('messages.common.enroll_now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== VISA JOURNEY STEPS ===== --}}
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.roadmap_label') }}</p>
            <h2 class="section-title">{{ __('messages.home.journey_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-4">
            @foreach(__('messages.home.steps') as $i => $step)
            <div class="col-lg-2 col-md-4 col-6 text-center">
                <div class="step-circle">{{ $i + 1 }}</div>
                <div style="font-size:1.8rem;color:var(--mas-crimson);margin-bottom:8px"><i class="bi {{ $step['icon'] }}"></i></div>
                <h6 class="fw-bold mb-2" style="font-size:.9rem">{{ $step['title'] }}</h6>
                <p style="font-size:.8rem;color:var(--mas-gray);line-height:1.6">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('visa') }}" class="btn" style="background:var(--mas-crimson);color:white;border-radius:25px;padding:12px 30px">{{ __('messages.common.see_details') }} <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>

{{-- ===== GALLERY PREVIEW ===== --}}
@if($featuredGallery->count())
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.moments_label') }}</p>
            <h2 class="section-title">{{ __('messages.home.gallery_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-3">
            @foreach($featuredGallery as $item)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="{{ asset($item->image) }}" class="glightbox" data-title="{{ $item->title }}" data-description="{{ $item->caption }}">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" loading="lazy">
                        <div class="gallery-overlay">
                            <p style="color:white;font-size:.85rem;margin:0">{{ $item->title }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('gallery') }}" class="btn" style="border:2px solid var(--mas-crimson);color:var(--mas-crimson);border-radius:25px;padding:12px 30px">{{ __('messages.common.view_gallery') }} <i class="bi bi-images ms-1"></i></a>
        </div>
    </div>
</section>
@endif

{{-- ===== TESTIMONIALS ===== --}}
@if($testimonials->count())
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.home.stories_label') }}</p>
            <h2 class="section-title">{{ __('messages.home.testimonials_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                @foreach($testimonials->chunk(3) as $i => $chunk)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="row g-4 justify-content-center">
                        @foreach($chunk as $t)
                        <div class="col-lg-4 col-md-6">
                            <div class="testimonial-card">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    @if($t->photo)
                                        <img src="{{ asset($t->photo) }}" alt="{{ $t->student_name }}" style="width:56px;height:56px;border-radius:50%;object-fit:cover">
                                    @else
                                        <div style="width:56px;height:56px;border-radius:50%;background:var(--mas-light-bg);display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--mas-crimson)"><i class="bi bi-person-fill"></i></div>
                                    @endif
                                    <div>
                                        <strong>{{ $t->student_name }}</strong>
                                        @if($t->achievement)<br><span class="achievement-badge">{{ $t->achievement }}</span>@endif
                                    </div>
                                </div>
                                <p style="color:var(--mas-gray);line-height:1.8;font-size:.95rem">"{{ $t->quote }}"</p>
                                @if($t->batch)<small style="color:var(--mas-crimson)">{{ $t->batch }}</small>@endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            @if($testimonials->count() > 3)
            <div class="text-center mt-4">
                <button class="btn btn-sm me-2" style="background:var(--mas-crimson);color:white;border-radius:50%;width:36px;height:36px;padding:0" data-bs-target="#testimonialCarousel" data-bs-slide="prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-sm" style="background:var(--mas-crimson);color:white;border-radius:50%;width:36px;height:36px;padding:0" data-bs-target="#testimonialCarousel" data-bs-slide="next"><i class="bi bi-chevron-right"></i></button>
            </div>
            @endif
        </div>
    </div>
</section>
@endif

{{-- ===== CTA BANNER ===== --}}
<section class="cta-banner">
    <div class="container text-center">
        <h2 style="font-size:clamp(1.8rem,4vw,2.8rem);font-weight:900;color:white;margin-bottom:16px">
            {{ __('messages.home.cta_title') }}
        </h2>
        <p style="color:rgba(255,255,255,.85);font-size:1.1rem;margin-bottom:32px">{{ __('messages.home.cta_subtitle') }}</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('courses') }}" class="btn btn-lg" style="background:white;color:var(--mas-crimson);border-radius:30px;padding:14px 36px;font-weight:700">{{ __('messages.common.apply_now') }}</a>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/','',setting('general.whatsapp_number','8801867888667')) }}" class="btn btn-lg" style="border:2px solid white;color:white;border-radius:30px;padding:14px 36px;font-weight:600" target="_blank"><i class="bi bi-whatsapp me-2"></i>WhatsApp</a>
        </div>
    </div>
</section>

@endsection
