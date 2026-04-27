@extends('layouts.admin')
@section('title', 'Testimonials')
@section('page-title', 'Testimonials')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Testimonials ({{ $testimonials->count() }})</strong>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-mas btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Testimonial</a>
    </div>
    <div class="page-card-body p-0">
        <table class="table table-hover datatable mb-0" style="font-size:.88rem">
            <thead style="background:#F8F9FA">
                <tr><th class="px-4 py-3">Photo</th><th>Name</th><th>Achievement</th><th>Batch</th><th>Active</th><th>Order</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @forelse($testimonials as $t)
                <tr>
                    <td class="px-4 py-3">
                        @if($t->photo)
                            <img src="{{ asset('storage/'.$t->photo) }}" style="width:40px;height:40px;border-radius:50%;object-fit:cover">
                        @else
                            <div style="width:40px;height:40px;border-radius:50%;background:#F0F0F0;display:flex;align-items:center;justify-content:center"><i class="bi bi-person text-muted"></i></div>
                        @endif
                    </td>
                    <td class="align-middle fw-semibold">{{ $t->student_name }}</td>
                    <td class="align-middle"><span style="background:#C8102E;color:white;font-size:.75rem;border-radius:20px;padding:2px 10px">{{ $t->achievement }}</span></td>
                    <td class="align-middle text-muted">{{ $t->batch ?? '—' }}</td>
                    <td class="align-middle"><span class="badge {{ $t->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $t->is_active ? 'Yes' : 'No' }}</span></td>
                    <td class="align-middle">{{ $t->sort_order }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.testimonials.edit', $t) }}" class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" class="text-center py-4 text-muted">No testimonials yet. <a href="{{ route('admin.testimonials.create') }}">Add one</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection