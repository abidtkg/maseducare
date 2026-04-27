@extends('layouts.admin')
@section('title', 'Add Gallery Image')
@section('page-title', 'Add Gallery Image')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Add Gallery Image</strong>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
    </div>
    <div class="page-card-body">
        @if($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Category *</label>
                    <select name="category" class="form-select" required>
                        <option value="">Select category</option>
                        @foreach($categories as $key => $label)
                        <option value="{{ $key }}" {{ old('category')===$key?'selected':'' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Caption</label>
                    <textarea name="caption" class="form-control" rows="2" placeholder="Optional caption...">{{ old('caption') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Image * (max 5MB, auto-resized to 1920px)</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required id="imgInput">
                    <div id="imgPreview" class="mt-2"></div>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}">
                </div>
                <div class="col-md-2 d-flex flex-column justify-content-end">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_featured" id="featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="featured">Featured ⭐</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" id="active" value="1" {{ old('is_active',1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="active">Active</label>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-mas"><i class="bi bi-cloud-upload me-1"></i>Upload & Save</button>
            </div>
        </form>
    </div>
</div>
@push('scripts')
<script>
document.getElementById('imgInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = ev => {
        document.getElementById('imgPreview').innerHTML = `<img src="${ev.target.result}" style="max-height:150px;border-radius:6px;border:1px solid #dee2e6">`;
    };
    reader.readAsDataURL(file);
});
</script>
@endpush
@endsection