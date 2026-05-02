@extends('layouts.app')
@section('title', __('messages.about.title').' — '.setting('general.site_name', 'MAS EduCare'))

@section('content')

<section style="background:linear-gradient(135deg,var(--mas-ink),var(--mas-ink-light));padding:100px 0 60px;color:white">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size:clamp(2rem,4vw,3rem)">{{ __('messages.about.title') }}</h1>
        <p style="color:rgba(255,255,255,.75);font-size:1.05rem;margin-top:10px">{{ __('messages.about.subtitle') }}</p>
    </div>
</section>

{{-- Founder --}}
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center">
                @if(setting('about.founder_photo'))
                    <img src="{{ asset(setting('about.founder_photo')) }}" alt="{{ setting('about.founder_name') }}" class="img-fluid rounded-3" style="max-height:420px;object-fit:cover;width:100%;box-shadow:var(--shadow-hover)">
                @else
                    <div style="width:200px;height:200px;border-radius:50%;background:var(--mas-light-bg);display:flex;align-items:center;justify-content:center;margin:0 auto;font-size:5rem;color:var(--mas-crimson)"><i class="bi bi-person-circle"></i></div>
                @endif
                <h5 class="mt-3 fw-bold">{{ setting('about.founder_name') }}</h5>
                <p style="color:var(--mas-crimson)">{{ setting('about.founder_title') }}</p>
            </div>
            <div class="col-lg-8">
                <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.about.leadership_label') }}</p>
                <h2 class="section-title mb-3">{{ __('messages.about.founders_title') }}</h2>
                <div class="title-divider left"></div>
                <div style="border-left:4px solid var(--mas-crimson);padding-left:20px;margin-bottom:20px">
                    <p style="font-size:1.15rem;font-style:italic;color:var(--mas-ink);line-height:1.9">"{{ setting('about.founder_quote') }}"</p>
                </div>
                <p style="color:var(--mas-gray);line-height:1.95;font-size:1rem">{{ setting('about.founder_bio') }}</p>
            </div>
        </div>
    </div>
</section>

{{-- Institute Story --}}
<section style="padding:80px 0;background:var(--mas-light-bg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.about.story_label') }}</p>
                <h2 class="section-title mb-3">{{ __('messages.about.history_title') }}</h2>
                <div class="title-divider"></div>
                <p style="color:var(--mas-gray);line-height:2;font-size:1.05rem">{{ setting('about.institute_story') }}</p>
            </div>
        </div>
        <div class="row g-4 mt-4 justify-content-center">
            @foreach([
                ['icon'=>'bi-trophy',      'val'=>'500+', 'label'=>__('messages.about.stat_graduates')],
                ['icon'=>'bi-airplane',    'val'=>'200+', 'label'=>__('messages.about.stat_departures')],
                ['icon'=>'bi-patch-check', 'val'=>'95%',  'label'=>__('messages.about.stat_visa')],
                ['icon'=>'bi-people',      'val'=>'6+',   'label'=>__('messages.about.stat_senseis')],
            ] as $stat)
            <div class="col-lg-3 col-md-6">
                <div style="background:white;border-radius:var(--radius);padding:28px;text-align:center;box-shadow:var(--shadow)">
                    <i class="bi {{ $stat['icon'] }}" style="font-size:2.5rem;color:var(--mas-crimson)"></i>
                    <div style="font-size:2.2rem;font-weight:700;color:var(--mas-ink);margin:8px 0">{{ $stat['val'] }}</div>
                    <p style="color:var(--mas-gray);font-size:.9rem;margin:0">{{ $stat['label'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Team --}}
@if($team->count())
<section style="padding:80px 0;background:white">
    <div class="container">
        <div class="text-center mb-5">
            <p style="color:var(--mas-crimson);font-weight:600;letter-spacing:2px;text-transform:uppercase;font-size:.9rem">{{ __('messages.about.team_label') }}</p>
            <h2 class="section-title">{{ __('messages.about.team_title') }}</h2>
            <div class="title-divider"></div>
        </div>
        <div class="row g-4">
            @foreach($team as $member)
            <div class="col-lg-3 col-md-4 col-6">
                <div style="background:white;border-radius:12px;box-shadow:var(--shadow);overflow:hidden;text-align:center;transition:transform .3s" onmouseover="this.style.transform='translateY(-6px)'" onmouseout="this.style.transform='translateY(0)'">
                    @if($member->photo)
                        <img src="{{ asset($member->photo) }}" alt="{{ $member->name }}" style="width:100%;height:200px;object-fit:cover">
                    @else
                        <div style="height:200px;background:var(--mas-light-bg);display:flex;align-items:center;justify-content:center;font-size:4rem;color:var(--mas-gray)"><i class="bi bi-person-fill"></i></div>
                    @endif
                    <div class="p-3">
                        @php $badgeColors = ['sensei'=>'#C8102E','staff'=>'#198754','founder'=>'#C8102E']; @endphp
                        <span style="background:{{ $badgeColors[$member->type] ?? '#6C757D' }};color:white;font-size:.75rem;border-radius:20px;padding:2px 10px">{{ ucfirst($member->type) }}</span>
                        <h6 class="fw-bold mt-2 mb-1">{{ $member->name }}</h6>
                        <p style="color:var(--mas-crimson);font-size:.85rem;margin:0">{{ $member->title }}</p>
                        @if($member->bio)<p style="color:var(--mas-gray);font-size:.82rem;margin-top:6px;line-height:1.6">{{ Str::limit($member->bio, 80) }}</p>@endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
