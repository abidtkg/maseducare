@extends('layouts.admin')
@section('title', 'Add Testimonial')
@section('page-title', 'Add Testimonial')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Add Testimonial</strong>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
    </div>
    <div class="page-card-body">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label">Student Name *</label>
                    <input type="text" name="student_name" class="form-control" value="{{ old('student_name') }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Achievement</label>
                    <input type="text" name="achievement" class="form-control" value="{{ old('achievement') }}" placeholder="e.g. N5 Passed, Visa Approved – Tokyo">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Batch</label>
                    <input type="text" name="batch" class="form-control" value="{{ old('batch') }}" placeholder="e.g. Batch 12 – 2024">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_active" id="active" value="1" {{ old('is_active',1)?'checked':'' }}>
                        <label class="form-check-label fw-semibold" for="active">Active</label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Quote *</label>
                    <textarea name="quote" class="form-control" rows="4" required>{{ old('quote') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Photo (optional, max 2MB)</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-mas"><i class="bi bi-save me-1"></i>Add Testimonial</button>
            </div>
        </form>
    </div>
</div>
@endsection