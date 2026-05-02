@extends('layouts.app')
@section('title', __('messages.nav.visa').' — '.setting('general.site_name', 'MAS EduCare'))

@section('content')

<section style="background:linear-gradient(135deg,var(--mas-ink),var(--mas-ink-light));padding:100px 0 60px;color:white">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size:clamp(2rem,4vw,3rem)">{{ __('messages.visa.title') }}</h1>
        <p style="color:rgba(255,255,255,.75)">{{ __('messages.visa.subtitle') }}</p>
    </div>
</section>

{{-- Steps Accordion --}}
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="section-title">{{ __('messages.visa.steps_title') }}</h2>
                    <div class="title-divider"></div>
                </div>
                <div class="accordion" id="visaAccordion">
                    @foreach(__('messages.visa.steps') as $i => $step)
                    <div class="accordion-item mb-3" style="border:none;border-radius:var(--radius)!important;box-shadow:var(--shadow);overflow:hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#step{{ $i }}" style="font-weight:600;background:white">
                                <span class="step-circle me-3" style="min-width:42px;width:42px;height:42px;font-size:1rem"><i class="bi {{ $step['icon'] }}"></i></span>
                                {{ $step['title'] }}
                            </button>
                        </h2>
                        <div id="step{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#visaAccordion">
                            <div class="accordion-body" style="padding:24px 28px">
                                <p style="color:var(--mas-gray);line-height:1.9">{{ $step['content'] }}</p>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-8">
                                        <h6 class="fw-bold mb-2">{{ __('messages.visa.docs_label') }}</h6>
                                        <ul style="color:var(--mas-gray);line-height:2;list-style:none;padding:0">
                                            @foreach($step['docs'] as $doc)
                                            <li><i class="bi bi-check2-circle text-crimson me-2"></i>{{ $doc }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="background:var(--mas-light-bg);border-radius:var(--radius);padding:16px;text-align:center">
                                            <i class="bi bi-clock" style="font-size:1.5rem;color:var(--mas-crimson)"></i>
                                            <div class="fw-bold mt-1">{{ __('messages.visa.time_label') }}</div>
                                            <div style="color:var(--mas-crimson);font-weight:600">{{ $step['time'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Visa Gallery --}}
@if($visaGallery->count())
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">{{ __('messages.visa.success_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-3">
            @foreach($visaGallery as $item)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="{{ asset($item->image) }}" class="glightbox" data-title="{{ $item->title }}">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" loading="lazy">
                        <div class="gallery-overlay"><p style="color:white;font-size:.85rem;margin:0">{{ $item->title }}</p></div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- FAQ --}}
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="section-title">{{ __('messages.visa.faq_title') }}</h2>
                    <div class="title-divider"></div>
                </div>
                <div class="accordion" id="faqAccordion">
                    @foreach(__('messages.visa.faqs') as $j => $faq)
                    <div class="accordion-item mb-3" style="border:none;border-radius:var(--radius)!important;box-shadow:var(--shadow)">
                        <h2 class="accordion-header">
                            <button class="accordion-button {{ $j > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $j }}" style="font-weight:600;background:white">
                                {{ $faq['q'] }}
                            </button>
                        </h2>
                        <div id="faq{{ $j }}" class="accordion-collapse collapse {{ $j === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body" style="color:var(--mas-gray);line-height:1.9">{{ $faq['a'] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="cta-banner">
    <div class="container text-center">
        <h2 style="color:white;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:900;margin-bottom:16px">{{ __('messages.visa.cta_title') }}</h2>
        <p style="color:rgba(255,255,255,.85);margin-bottom:30px">{{ __('messages.visa.cta_subtitle') }}</p>
        <a href="{{ route('contact') }}" class="btn btn-lg" style="background:white;color:var(--mas-crimson);border-radius:30px;padding:14px 36px;font-weight:700">{{ __('messages.visa.cta_btn') }}</a>
    </div>
</section>

@endsection
