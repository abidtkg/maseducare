@extends('layouts.app')
@section('title', __('messages.courses.title').' — '.setting('general.site_name', 'MAS EduCare'))

@section('content')

<section style="background:linear-gradient(135deg,var(--mas-ink),var(--mas-ink-light));padding:100px 0 60px;color:white">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size:clamp(2rem,4vw,3rem)">{{ __('messages.courses.title') }}</h1>
        <p style="color:rgba(255,255,255,.75)">{{ __('messages.courses.subtitle') }}</p>
    </div>
</section>

{{-- Course Details --}}
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="row g-5">
            {{-- N5 --}}
            <div class="col-lg-6">
                <div style="background:white;border-radius:12px;box-shadow:var(--shadow);overflow:hidden">
                    <div style="background:var(--mas-crimson);color:white;padding:30px">
                        <span style="background:rgba(255,255,255,.25);border-radius:20px;padding:4px 14px;font-size:.85rem;font-weight:600">{{ __('messages.courses.n5_level') }}</span>
                        <h2 class="fw-bold mt-2">{{ __('messages.courses.n5_name') }}</h2>
                        <p style="opacity:.85">{{ __('messages.courses.n5_sub') }}</p>
                    </div>
                    <div class="p-4">
                        <p style="color:var(--mas-gray);line-height:1.9">{{ setting('courses.n5_description') }}</p>
                        <h6 class="fw-bold mt-3 mb-3">{{ __('messages.courses.includes_label') }}</h6>
                        <ul style="color:var(--mas-gray);line-height:2.1;list-style:none;padding:0">
                            @foreach(__('messages.courses.n5_items') as $item)
                            <li><i class="bi bi-check-circle-fill text-crimson me-2"></i>{{ $item }}</li>
                            @endforeach
                        </ul>
                        <div class="d-flex gap-3 mt-3 flex-wrap">
                            <span style="background:var(--mas-light-bg);border-radius:20px;padding:6px 16px;font-size:.9rem"><i class="bi bi-clock me-1 text-crimson"></i>{{ setting('courses.n5_duration', '3 months') }}</span>
                            <span style="background:var(--mas-light-bg);border-radius:20px;padding:6px 16px;font-size:.9rem"><i class="bi bi-cash me-1 text-crimson"></i>{{ setting('courses.n5_fee') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- N4 --}}
            <div class="col-lg-6">
                <div style="background:white;border-radius:12px;box-shadow:var(--shadow);overflow:hidden">
                    <div style="background:var(--mas-ink);color:white;padding:30px">
                        <span style="background:rgba(255,255,255,.25);border-radius:20px;padding:4px 14px;font-size:.85rem;font-weight:600">{{ __('messages.courses.n4_level') }}</span>
                        <h2 class="fw-bold mt-2">{{ __('messages.courses.n4_name') }}</h2>
                        <p style="opacity:.85">{{ __('messages.courses.n4_sub') }}</p>
                    </div>
                    <div class="p-4">
                        <p style="color:var(--mas-gray);line-height:1.9">{{ setting('courses.n4_description') }}</p>
                        <h6 class="fw-bold mt-3 mb-3">{{ __('messages.courses.includes_label') }}</h6>
                        <ul style="color:var(--mas-gray);line-height:2.1;list-style:none;padding:0">
                            @foreach(__('messages.courses.n4_items') as $item)
                            <li><i class="bi bi-check-circle-fill text-crimson me-2"></i>{{ $item }}</li>
                            @endforeach
                        </ul>
                        <div class="d-flex gap-3 mt-3 flex-wrap">
                            <span style="background:var(--mas-light-bg);border-radius:20px;padding:6px 16px;font-size:.9rem"><i class="bi bi-clock me-1 text-crimson"></i>{{ setting('courses.n4_duration', '4 months') }}</span>
                            <span style="background:var(--mas-light-bg);border-radius:20px;padding:6px 16px;font-size:.9rem"><i class="bi bi-cash me-1 text-crimson"></i>{{ setting('courses.n4_fee') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(setting('courses.schedule_info'))
        <div class="mt-5 p-4" style="background:white;border-radius:12px;box-shadow:var(--shadow);border-left:5px solid var(--mas-crimson)">
            <h5 class="fw-bold mb-2"><i class="bi bi-calendar3 text-crimson me-2"></i>{{ __('messages.courses.schedule_title') }}</h5>
            <p style="color:var(--mas-gray);margin:0;line-height:1.8">{{ setting('courses.schedule_info') }}</p>
        </div>
        @endif
    </div>
</section>

{{-- Enrollment Form --}}
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.courses.apply_label') }}</p>
                    <h2 class="section-title">{{ __('messages.courses.apply_title') }}</h2>
                    <div class="title-divider"></div>
                </div>

                @if(session('success'))
                <div class="alert" style="background:#d4edda;border:1px solid #c3e6cb;color:#155724;border-radius:var(--radius);padding:16px;margin-bottom:24px">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ __('messages.courses.success') }}
                </div>
                @endif

                <form action="{{ route('enroll') }}" method="POST" style="background:var(--mas-light-bg);border-radius:12px;padding:36px;box-shadow:var(--shadow)">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.full_name') }}</label>
                            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" placeholder="{{ __('messages.courses.form.full_name_ph') }}" value="{{ old('full_name') }}" required>
                            @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.phone') }}</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="01XXXXXXXXX" value="{{ old('phone') }}" required>
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.email') }}</label>
                            <input type="email" name="email" class="form-control" placeholder="email@example.com" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.course') }}</label>
                            <select name="course" class="form-select @error('course') is-invalid @enderror" required>
                                <option value="">{{ __('messages.courses.form.course_ph') }}</option>
                                <option value="n5" {{ old('course')=='n5'?'selected':'' }}>JLPT N5 Course</option>
                                <option value="n4" {{ old('course')=='n4'?'selected':'' }}>JLPT N4 Course</option>
                                <option value="visa_processing" {{ old('course')=='visa_processing'?'selected':'' }}>Visa Processing</option>
                                <option value="interview_prep" {{ old('course')=='interview_prep'?'selected':'' }}>Interview Preparation</option>
                            </select>
                            @error('course')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.education') }}</label>
                            <input type="text" name="education" class="form-control" placeholder="{{ __('messages.courses.form.education_ph') }}" value="{{ old('education') }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">{{ __('messages.courses.form.message') }}</label>
                            <textarea name="message" class="form-control" rows="3" placeholder="{{ __('messages.courses.form.message_ph') }}">{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn w-100 btn-lg" style="background:var(--mas-crimson);color:white;border-radius:30px;font-weight:700">
                                <i class="bi bi-send me-2"></i>{{ __('messages.courses.form.submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
