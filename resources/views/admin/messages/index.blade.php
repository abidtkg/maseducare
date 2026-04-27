@extends('layouts.admin')
@section('title', 'Messages')
@section('page-title', 'Contact Messages')

@section('content')
<div class="page-card">
    <div class="page-card-header"><strong>Messages ({{ $messages->total() }})</strong></div>
    <div class="page-card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0" style="font-size:.88rem">
                <thead style="background:#F8F9FA">
                    <tr><th class="px-4 py-3">Name</th><th>Subject</th><th>Phone</th><th>Date</th><th>Read</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($messages as $m)
                    <tr style="{{ !$m->is_read ? 'background:#FFFBF0;font-weight:600' : '' }}">
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.messages.show', $m) }}" style="color:#1A1A2E;text-decoration:none">
                                {{ $m->name }}
                                @if(!$m->is_read)<span style="width:8px;height:8px;border-radius:50%;background:#C8102E;display:inline-block;margin-left:4px"></span>@endif
                            </a>
                        </td>
                        <td class="align-middle">{{ Str::limit($m->subject, 50) }}</td>
                        <td class="align-middle">{{ $m->phone }}</td>
                        <td class="align-middle text-muted">{{ $m->created_at->format('d M Y') }}</td>
                        <td class="align-middle"><span class="badge {{ $m->is_read ? 'bg-success' : 'bg-warning text-dark' }}">{{ $m->is_read ? 'Read' : 'Unread' }}</span></td>
                        <td class="align-middle">
                            <a href="{{ route('admin.messages.show', $m) }}" class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-eye"></i></a>
                            <form action="{{ route('admin.messages.destroy', $m) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center py-4 text-muted">No messages yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($messages->hasPages())
        <div class="p-3">{{ $messages->links() }}</div>
        @endif
    </div>
</div>
@endsection