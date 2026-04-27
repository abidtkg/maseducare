@extends('layouts.admin')
@section('title', 'Enrollment Detail')
@section('page-title', 'Enrollment Detail')

@section('content')
<div class="row g-4">
    <div class="col-lg-7">
        <div class="page-card">
            <div class="page-card-header">
                <strong>{{ $enrollment->full_name }}</strong>
                <a href="{{ route('admin.enrollments.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
            </div>
            <div class="page-card-body">
                <dl class="row gy-2" style="font-size:.92rem">
                    <dt class="col-sm-4 text-muted">Full Name</dt><dd class="col-sm-8 fw-semibold">{{ $enrollment->full_name }}</dd>
                    <dt class="col-sm-4 text-muted">Phone</dt><dd class="col-sm-8"><a href="tel:{{ $enrollment->phone }}">{{ $enrollment->phone }}</a></dd>
                    <dt class="col-sm-4 text-muted">Email</dt><dd class="col-sm-8">{{ $enrollment->email ?? '—' }}</dd>
                    <dt class="col-sm-4 text-muted">Course</dt><dd class="col-sm-8">{{ $courseLabels[$enrollment->course] ?? $enrollment->course }}</dd>
                    <dt class="col-sm-4 text-muted">Education</dt><dd class="col-sm-8">{{ $enrollment->education ?? '—' }}</dd>
                    <dt class="col-sm-4 text-muted">Message</dt><dd class="col-sm-8" style="white-space:pre-wrap">{{ $enrollment->message ?? '—' }}</dd>
                    <dt class="col-sm-4 text-muted">Applied</dt><dd class="col-sm-8">{{ $enrollment->created_at->format('d M Y, h:i A') }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="page-card">
            <div class="page-card-header"><strong>Update Status & Notes</strong></div>
            <div class="page-card-body">
                <form action="{{ route('admin.enrollments.update', $enrollment) }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            @foreach($statusLabels as $val => $lbl)
                            <option value="{{ $val }}" {{ $enrollment->status===$val?'selected':'' }}>{{ $lbl }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Internal Notes</label>
                        <textarea name="notes" class="form-control" rows="5" placeholder="Add notes about this enrollment...">{{ $enrollment->notes }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-mas w-100"><i class="bi bi-save me-1"></i>Update</button>
                </form>
                <div class="mt-3 d-flex gap-2">
                    <a href="tel:{{ $enrollment->phone }}" class="btn btn-outline-success flex-fill"><i class="bi bi-telephone me-1"></i>Call</a>
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/','', $enrollment->phone) }}" target="_blank" class="btn flex-fill" style="background:#25D366;color:white"><i class="bi bi-whatsapp me-1"></i>WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection