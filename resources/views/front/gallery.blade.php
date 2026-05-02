@extends('layouts.app')
@section('title', __('messages.gallery.title').' — '.setting('general.site_name', 'MAS EduCare'))

@section('content')

<section style="background:linear-gradient(135deg,var(--mas-ink),var(--mas-ink-light));padding:100px 0 60px;color:white">
    <div class="container text-center">
        <h1 class="fw-bold" style="font-size:clamp(2rem,4vw,3rem)">{{ __('messages.gallery.title') }}</h1>
        <p style="color:rgba(255,255,255,.75)">{{ __('messages.gallery.subtitle') }}</p>
    </div>
</section>

<section style="padding:60px 0;background:var(--mas-light-bg)">
    <div class="container">
        {{-- Filter Tabs --}}
        <div class="text-center mb-5">
            <a href="{{ route('gallery') }}" class="filter-tab {{ !$category || $category === 'all' ? 'active' : '' }}">{{ __('messages.gallery.all') }}</a>
            @foreach($categories as $key => $label)
            <a href="{{ route('gallery', ['category' => $key]) }}" class="filter-tab {{ $category === $key ? 'active' : '' }}">{{ $label }}</a>
            @endforeach
        </div>

        @if($items->count())
        <div class="row g-3">
            @foreach($items as $item)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="{{ asset($item->image) }}" class="glightbox" data-title="{{ $item->title }}" data-description="{{ $item->caption }}">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" loading="lazy">
                        <div class="gallery-overlay">
                            <div>
                                <p style="color:white;font-size:.85rem;margin:0;font-weight:600">{{ $item->title }}</p>
                                @if($item->caption)<p style="color:rgba(255,255,255,.8);font-size:.78rem;margin:2px 0 0">{{ Str::limit($item->caption, 50) }}</p>@endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <i class="bi bi-images" style="font-size:4rem;color:var(--mas-gray)"></i>
            <p class="mt-3" style="color:var(--mas-gray)">{{ __('messages.gallery.empty') }}</p>
        </div>
        @endif
    </div>
</section>

@endsection
