@extends('layouts.admin')
@section('title', 'Team Members')
@section('page-title', 'Team / Senseis')

@section('content')
<div class="page-card">
    <div class="page-card-header">
        <strong>Team Members ({{ $members->count() }})</strong>
        <a href="{{ route('admin.team.create') }}" class="btn btn-mas btn-sm"><i class="bi bi-plus-circle me-1"></i>Add Member</a>
    </div>
    <div class="page-card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover datatable mb-0" style="font-size:.88rem">
                <thead style="background:#F8F9FA">
                    <tr><th class="px-4 py-3">Photo</th><th>Name</th><th>Title</th><th>Type</th><th>Order</th><th>Active</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($members as $m)
                    <tr>
                        <td class="px-4 py-3">
                            @if($m->photo)
                                <img src="{{ asset($m->photo) }}" style="width:44px;height:44px;border-radius:50%;object-fit:cover">
                            @else
                                <div style="width:44px;height:44px;border-radius:50%;background:#F0F0F0;display:flex;align-items:center;justify-content:center"><i class="bi bi-person text-muted"></i></div>
                            @endif
                        </td>
                        <td class="align-middle fw-semibold">{{ $m->name }}</td>
                        <td class="align-middle text-muted">{{ $m->title }}</td>
                        <td class="align-middle">
                            @php $tc=['sensei'=>'danger','staff'=>'success','founder'=>'danger']; @endphp
                            <span class="badge bg-{{ $tc[$m->type] ?? 'secondary' }}">{{ ucfirst($m->type) }}</span>
                        </td>
                        <td class="align-middle">{{ $m->sort_order }}</td>
                        <td class="align-middle">
                            <span class="badge {{ $m->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $m->is_active ? 'Yes' : 'No' }}</span>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.team.edit', $m) }}" class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('admin.team.destroy', $m) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this member?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection