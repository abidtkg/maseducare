@extends('layouts.admin')
@section('title', 'Add Team Member')
@section('page-title', 'Add Team Member')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Add Team Member</strong>
        <a href="{{ route('admin.team.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
    </div>
    <div class="page-card-body">
        @if($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Title / Position *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Japanese Language Instructor" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Type *</label>
                    <select name="type" class="form-select" required>
                        <option value="">Select type</option>
                        <option value="sensei" {{ old('type')=='sensei'?'selected':'' }}>Sensei (Teacher)</option>
                        <option value="staff" {{ old('type')=='staff'?'selected':'' }}>Staff</option>
                        <option value="founder" {{ old('type')=='founder'?'selected':'' }}>Founder</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_active" id="isActive" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="isActive">Active</label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Bio</label>
                    <textarea name="bio" class="form-control" rows="3" placeholder="Short bio...">{{ old('bio') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Photo (max 2MB)</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-mas"><i class="bi bi-save me-1"></i>Add Member</button>
            </div>
        </form>
    </div>
</div>
@endsection