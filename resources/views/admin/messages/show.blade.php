@extends('layouts.admin')
@section('title', 'Message Detail')
@section('page-title', 'Message Detail')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="page-card">
            <div class="page-card-header">
                <strong>{{ $message->subject }}</strong>
                <a href="{{ route('admin.messages.index') }}" class="btn btn-mas-outline btn-sm"><i class="bi bi-arrow-left me-1"></i>Back</a>
            </div>
            <div class="page-card-body">
                <div style="background:#F8F9FA;border-radius:8px;padding:16px;margin-bottom:20px;font-size:.9rem">
                    <div class="row gy-2">
                        <div class="col-sm-6"><strong>From:</strong> {{ $message->name }}</div>
                        <div class="col-sm-6"><strong>Phone:</strong> <a href="tel:{{ $message->phone }}">{{ $message->phone }}</a></div>
                        @if($message->email)<div class="col-sm-6"><strong>Email:</strong> <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></div>@endif
                        <div class="col-sm-6"><strong>Date:</strong> {{ $message->created_at->format('d M Y, h:i A') }}</div>
                    </div>
                </div>
                <div style="background:white;border:1px solid #dee2e6;border-radius:8px;padding:20px;min-height:120px;line-height:1.9;white-space:pre-wrap">{{ $message->message }}</div>
                <div class="d-flex gap-2 mt-4">
                    <a href="tel:{{ $message->phone }}" class="btn btn-outline-success"><i class="bi bi-telephone me-1"></i>Call</a>
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/','', $message->phone) }}" target="_blank" class="btn" style="background:#25D366;color:white"><i class="bi bi-whatsapp me-1"></i>WhatsApp</a>
                    @if($message->email)
                    <a href="mailto:{{ $message->email }}" class="btn btn-outline-primary"><i class="bi bi-envelope me-1"></i>Reply Email</a>
                    @endif
                    <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" class="ms-auto" onsubmit="return confirm('Delete this message?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash me-1"></i>Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection