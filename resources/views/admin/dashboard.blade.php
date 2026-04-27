@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Stats row --}}
<div class="row g-4 mb-4">
    @php $cards = [
        ['label'=>'New Enrollments', 'val'=>$stats['new_enrollments'], 'icon'=>'bi-clipboard2-plus-fill', 'color'=>'#C8102E', 'bg'=>'#FFF0F0', 'link'=>route('admin.enrollments.index')],
        ['label'=>'Unread Messages', 'val'=>$stats['unread_messages'], 'icon'=>'bi-envelope-fill', 'color'=>'#0D6EFD', 'bg'=>'#EEF4FF', 'link'=>route('admin.messages.index')],
        ['label'=>'Gallery Items', 'val'=>$stats['gallery_items'], 'icon'=>'bi-images', 'color'=>'#198754', 'bg'=>'#EDFAF3', 'link'=>route('admin.gallery.index')],
        ['label'=>'Active Team Members', 'val'=>$stats['team_members'], 'icon'=>'bi-people-fill', 'color'=>'#C9A84C', 'bg'=>'#FFF8E7', 'link'=>route('admin.team.index')],
    ]; @endphp
    @foreach($cards as $card)
    <div class="col-lg-3 col-md-6">
        <a href="{{ $card['link'] }}" style="text-decoration:none">
            <div class="card-stat" style="border-left-color:{{ $card['color'] }}">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div style="font-size:2rem;font-weight:700;color:#1A1A2E">{{ $card['val'] }}</div>
                        <div style="color:#888;font-size:.88rem;margin-top:2px">{{ $card['label'] }}</div>
                    </div>
                    <div class="stat-icon" style="background:{{ $card['bg'] }};color:{{ $card['color'] }}">
                        <i class="bi {{ $card['icon'] }}"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

{{-- Quick Actions --}}
<div class="d-flex gap-2 mb-4 flex-wrap">
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-mas"><i class="bi bi-plus-circle me-1"></i>Add Gallery Image</a>
    <a href="{{ route('admin.team.create') }}" class="btn btn-mas-outline"><i class="bi bi-person-plus me-1"></i>Add Team Member</a>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-mas-outline"><i class="bi bi-chat-quote me-1"></i>Add Testimonial</a>
</div>

<div class="row g-4">
    {{-- Recent Enrollments --}}
    <div class="col-lg-7">
        <div class="page-card">
            <div class="page-card-header">
                <strong>Recent Enrollments</strong>
                <a href="{{ route('admin.enrollments.index') }}" style="font-size:.85rem;color:#C8102E;text-decoration:none">View All</a>
            </div>
            <div class="page-card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" style="font-size:.88rem">
                        <thead style="background:#F8F9FA">
                            <tr><th class="px-4 py-3">Name</th><th>Phone</th><th>Course</th><th>Status</th><th>Date</th></tr>
                        </thead>
                        <tbody>
                            @forelse($recentEnrollments as $e)
                            <tr>
                                <td class="px-4 py-3"><a href="{{ route('admin.enrollments.show', $e) }}" style="color:#1A1A2E;text-decoration:none;font-weight:600">{{ $e->full_name }}</a></td>
                                <td>{{ $e->phone }}</td>
                                <td>{{ \App\Models\CourseEnrollment::$courseLabels[$e->course] ?? $e->course }}</td>
                                <td><span class="status-badge-{{ $e->status }}">{{ ucfirst($e->status) }}</span></td>
                                <td>{{ $e->created_at->format('d M') }}</td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="text-center py-4 text-muted">No enrollments yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Messages --}}
    <div class="col-lg-5">
        <div class="page-card">
            <div class="page-card-header">
                <strong>Recent Messages</strong>
                <a href="{{ route('admin.messages.index') }}" style="font-size:.85rem;color:#C8102E;text-decoration:none">View All</a>
            </div>
            <div class="page-card-body p-0">
                @forelse($recentMessages as $m)
                <a href="{{ route('admin.messages.show', $m) }}" style="text-decoration:none;color:inherit">
                    <div style="padding:14px 20px;border-bottom:1px solid #F0F0F0;background:{{ $m->is_read ? 'white' : '#FFFBF0' }};transition:background .2s" onmouseover="this.style.background='#F8F9FA'" onmouseout="this.style.background='{{ $m->is_read ? 'white' : '#FFFBF0' }}'">
                        <div class="d-flex justify-content-between align-items-start">
                            <strong style="font-size:.88rem">{{ $m->name }}</strong>
                            @if(!$m->is_read)<span style="width:8px;height:8px;border-radius:50%;background:#C8102E;display:inline-block;margin-left:6px;flex-shrink:0"></span>@endif
                            <small class="text-muted">{{ $m->created_at->format('d M') }}</small>
                        </div>
                        <div style="font-size:.82rem;color:#888;margin-top:2px">{{ Str::limit($m->subject, 40) }}</div>
                    </div>
                </a>
                @empty
                <div class="text-center py-4 text-muted">No messages yet</div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection