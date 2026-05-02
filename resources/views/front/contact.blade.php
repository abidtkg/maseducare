@extends('layouts.app')
@section('title', __('messages.contact.title').' — '.setting('general.site_name', 'MAS EduCare'))

@section('content')

<section style="background:linear-gradient(135deg,var(--mas-ink),var(--mas-ink-light));padding:100px 0 60px;color:white">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size:clamp(2rem,4vw,3rem)">{{ __('messages.contact.title') }}</h1>
        <p style="color:rgba(255,255,255,.75)">{{ __('messages.contact.subtitle') }}</p>
    </div>
</section>

<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="row g-5">
            {{-- Contact Info --}}
            <div class="col-lg-4">
                <h3 class="fw-bold mb-4">{{ __('messages.contact.info_title') }}</h3>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex gap-3 align-items-start">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--mas-crimson);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                            <i class="bi bi-geo-alt-fill" style="color:white;font-size:1.2rem"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ __('messages.contact.address_label') }}</h6>
                            <p style="color:var(--mas-gray);margin:0;line-height:1.7">{{ setting('general.address', 'Mirpur-10, Dhaka, Bangladesh') }}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--mas-crimson);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                            <i class="bi bi-telephone-fill" style="color:white;font-size:1.2rem"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ __('messages.contact.phone_label') }}</h6>
                            <a href="tel:{{ setting('general.phone') }}" style="color:var(--mas-gray);text-decoration:none">{{ setting('general.phone') }}</a>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--mas-crimson);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                            <i class="bi bi-envelope-fill" style="color:white;font-size:1.2rem"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ __('messages.contact.email_label') }}</h6>
                            <a href="mailto:{{ setting('general.email') }}" style="color:var(--mas-gray);text-decoration:none">{{ setting('general.email') }}</a>
                        </div>
                    </div>
                    <div class="d-flex gap-3 align-items-start">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--mas-crimson);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                            <i class="bi bi-clock-fill" style="color:white;font-size:1.2rem"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">{{ __('messages.contact.hours_label') }}</h6>
                            <p style="color:var(--mas-gray);margin:0">{{ setting('general.office_hours') }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h6 class="fw-bold mb-3">{{ __('messages.contact.social_label') }}</h6>
                    <div class="d-flex gap-2">
                        @if(setting('general.facebook_url'))
                        <a href="{{ setting('general.facebook_url') }}" target="_blank" style="width:42px;height:42px;border-radius:50%;background:var(--mas-ink);display:flex;align-items:center;justify-content:center;color:white;font-size:1.1rem;text-decoration:none"><i class="bi bi-facebook"></i></a>
                        @endif
                        @if(setting('general.whatsapp_number'))
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/','',setting('general.whatsapp_number')) }}" target="_blank" style="width:42px;height:42px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;color:white;font-size:1.1rem;text-decoration:none"><i class="bi bi-whatsapp"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div class="col-lg-8">
                <div style="background:white;border-radius:12px;padding:40px;box-shadow:var(--shadow)">
                    <h3 class="fw-bold mb-4">{{ __('messages.contact.form_title') }}</h3>

                    @if(session('success'))
                    <div style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;border-radius:var(--radius);padding:16px;margin-bottom:24px">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ __('messages.contact.success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('messages.contact.form.name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('messages.contact.form.name_ph') }}" value="{{ old('name') }}" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('messages.contact.form.phone') }}</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="01XXXXXXXXX" value="{{ old('phone') }}" required>
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('messages.contact.form.email') }}</label>
                                <input type="email" name="email" class="form-control" placeholder="email@example.com" value="{{ old('email') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">{{ __('messages.contact.form.subject') }}</label>
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="{{ __('messages.contact.form.subject_ph') }}" value="{{ old('subject') }}" required>
                                @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">{{ __('messages.contact.form.message') }}</label>
                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="{{ __('messages.contact.form.message_ph') }}" required>{{ old('message') }}</textarea>
                                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg" style="background:var(--mas-crimson);color:white;border-radius:30px;padding:12px 36px;font-weight:700">
                                    <i class="bi bi-send me-2"></i>{{ __('messages.contact.form.submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6396.19634121269!2d90.36970202259606!3d23.80498824097255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c134faa2608f%3A0x9cc5cb6090037683!2sMAS%20EDUCARE!5e0!3m2!1sen!2sbd!4v1777736172661!5m2!1sen!2sbd" width="100%" height="380" style="border:0;border-radius:12px;box-shadow:var(--shadow)" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>

@endsection
