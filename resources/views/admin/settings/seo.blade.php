@extends('layouts.admin')
@section('title', 'SEO Settings')
@section('page-title', 'Settings — SEO')

@section('content')
<div class="page-card">
    <div class="page-card-header"><strong>SEO Settings</strong></div>
    <div class="page-card-body">
        <form action="{{ route('admin.settings.update', 'seo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                @foreach($settings as $s)
                <div class="{{ $s->type === 'textarea' ? 'col-12' : 'col-md-6' }}">
                    <label class="form-label">{{ $s->label }}</label>
                    @if($s->type === 'image')
                        @if($s->value)
                            <div class="mb-2"><img src="{{ asset('storage/'.$s->value) }}" style="max-height:80px;border-radius:6px;border:1px solid #dee2e6"></div>
                        @endif
                        <input type="file" name="{{ str_replace('.', '_', $s->key) }}" class="form-control" accept="image/*">
                        <small class="text-muted">Recommended: 1200×630px (OG Image)</small>
                    @elseif($s->type === 'textarea')
                        <textarea name="{{ str_replace('.', '_', $s->key) }}" class="form-control" rows="3">{{ $s->value }}</textarea>
                        <small class="text-muted">Max 160 characters recommended</small>
                    @else
                        <input type="text" name="{{ str_replace('.', '_', $s->key) }}" class="form-control" value="{{ $s->value }}">
                    @endif
                </div>
                @endforeach
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-mas"><i class="bi bi-save me-1"></i>Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection