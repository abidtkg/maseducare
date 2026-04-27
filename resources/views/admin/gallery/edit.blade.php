@extends('layouts.admin')
@section('title', 'Edit Gallery Item')
@section('page-title', 'Edit Gallery Item')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Edit: {{ $gallery->title }}</strong>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
    </div>
    <div class="page-card-body">
        <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $gallery->title) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Category *</label>
                    <select name="category" class="form-select" required>
                        @foreach($categories as $key => $label)
                        <option value="{{ $key }}" {{ old('category',$gallery->category)===$key?'selected':'' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Caption</label>
                    <textarea name="caption" class="form-control" rows="2">{{ old('caption', $gallery->caption) }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Replace Image (optional)</label>
                    @if($gallery->image)
                    <div class="mb-2"><img src="{{ asset('storage/'.$gallery->image) }}" style="max-height:120px;border-radius:6px;border:1px solid #dee2e6"></div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $gallery->sort_order) }}">
                </div>
                <div class="col-md-2 d-flex flex-column justify-content-end">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_featured" id="featured" value="1" {{ old('is_featured',$gallery->is_featured) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="featured">Featured ⭐</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="active" value="1" {{ old('is_active',$gallery->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="active">Active</label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-mas"><i class="bi bi-save me-1"></i>Update</button>
            </div>
        </form>
    </div>
</div>
@endsection