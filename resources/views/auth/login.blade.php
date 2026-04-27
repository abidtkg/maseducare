<x-guest-layout>
    <div class="login-logo">
        <h3>MAS <span>EduCare</span></h3>
        <p>Admin Panel — Secure Login</p>
    </div>

    @if(session('status'))
    <div style="background:#d4edda;color:#155724;border-radius:6px;padding:12px 16px;margin-bottom:16px;font-size:.88rem">{{ session('status') }}</div>
    @endif

    @if($errors->any())
    <div style="background:#f8d7da;color:#721c24;border-radius:6px;padding:12px 16px;margin-bottom:16px;font-size:.88rem">
        @foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label style="font-weight:600;font-size:.9rem;display:block;margin-bottom:6px">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="admin@maseducare.com">
        </div>
        <div class="mb-4">
            <label style="font-weight:600;font-size:.9rem;display:block;margin-bottom:6px">Password</label>
            <input type="password" name="password" class="form-control" required placeholder="••••••••">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <label style="font-size:.88rem;color:#666">
                <input type="checkbox" name="remember" style="margin-right:6px">Remember me
            </label>
        </div>
        <button type="submit" class="btn-login">
            <i class="bi bi-box-arrow-in-right me-2"></i>Login to Admin
        </button>
    </form>
    <div class="text-center mt-4">
        <a href="{{ route('home') }}" style="color:#888;font-size:.85rem;text-decoration:none"><i class="bi bi-arrow-left me-1"></i>Back to Website</a>
    </div>
</x-guest-layout>
