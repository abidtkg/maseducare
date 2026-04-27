@extends('layouts.admin')
@section('title', 'Change Password')
@section('page-title', 'Change Password')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="page-card">
            <div class="page-card-header"><strong>Change Password</strong></div>
            <div class="page-card-body">
                @if($errors->any())
                <div class="alert alert-danger mb-3"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
                @endif
                <form action="{{ route('admin.password.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Current Password *</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password *</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirm New Password *</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-mas w-100"><i class="bi bi-key me-1"></i>Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection