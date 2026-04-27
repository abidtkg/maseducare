@extends('layouts.admin')
@section('title', 'Courses Settings')
@section('page-title', 'Settings — Courses')

@section('content')
<div class="page-card">
    <div class="page-card-header"><strong>Courses Settings</strong></div>
    <div class="page-card-body">
        <form action="{{ route('admin.settings.update', 'courses') }}" method="POST">
            @csrf
            <div class="row g-4">
                @foreach($settings as $s)
                <div class="{{ $s->type === 'textarea' ? 'col-12' : 'col-md-6' }}">
                    <label class="form-label">{{ $s->label }}</label>
                    @if($s->type === 'textarea')
                        <textarea name="{{ str_replace('.', '_', $s->key) }}" class="form-control" rows="3">{{ $s->value }}</textarea>
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