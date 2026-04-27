@extends('layouts.admin')
@section('title', 'Enrollments')
@section('page-title', 'Enrollment Applications')

@section('content')
{{-- Filters --}}
<div class="page-card mb-4">
    <div class="page-card-body">
        <form method="GET" class="d-flex gap-3 flex-wrap align-items-end">
            <div>
                <label class="form-label mb-1">Status</label>
                <select name="status" class="form-select form-select-sm" style="min-width:140px">
                    <option value="">All Statuses</option>
                    @foreach($statusLabels as $val => $lbl)
                    <option value="{{ $val }}" {{ request('status')===$val?'selected':'' }}>{{ $lbl }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label mb-1">Course</label>
                <select name="course" class="form-select form-select-sm" style="min-width:160px">
                    <option value="">All Courses</option>
                    @foreach($courseLabels as $val => $lbl)
                    <option value="{{ $val }}" {{ request('course')===$val?'selected':'' }}>{{ $lbl }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-mas btn-sm">Filter</button>
            <a href="{{ route('admin.enrollments.index') }}" class="btn btn-mas-outline btn-sm">Reset</a>
        </form>
    </div>
</div>

<div class="page-card">
    <div class="page-card-header">
        <strong>Enrollments ({{ $enrollments->total() }})</strong>
    </div>
    <div class="page-card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" style="font-size:.88rem">
                <thead style="background:#F8F9FA">
                    <tr><th class="px-4 py-3">Name</th><th>Phone</th><th>Course</th><th>Education</th><th>Status</th><th>Date</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($enrollments as $e)
                    <tr>
                        <td class="px-4 py-3"><a href="{{ route('admin.enrollments.show', $e) }}" style="color:#1A1A2E;text-decoration:none;font-weight:600">{{ $e->full_name }}</a></td>
                        <td class="align-middle">{{ $e->phone }}</td>
                        <td class="align-middle">{{ $courseLabels[$e->course] ?? $e->course }}</td>
                        <td class="align-middle text-muted">{{ $e->education ?? '—' }}</td>
                        <td class="align-middle"><span class="status-badge-{{ $e->status }}">{{ ucfirst($e->status) }}</span></td>
                        <td class="align-middle text-muted">{{ $e->created_at->format('d M Y') }}</td>
                        <td class="align-middle">
                            <a href="{{ route('admin.enrollments.show', $e) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="text-center py-4 text-muted">No enrollments found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($enrollments->hasPages())
        <div class="p-3">{{ $enrollments->appends(request()->query())->links() }}</div>
        @endif
    </div>
</div>
@endsection