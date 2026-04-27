<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — MAS EduCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg,#1A1A2E,#2D2D44); min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', system-ui, sans-serif; }
        .login-box { background: white; border-radius: 16px; padding: 44px 40px; width: 100%; max-width: 420px; box-shadow: 0 20px 60px rgba(0,0,0,0.3); }
        .login-logo { text-align: center; margin-bottom: 28px; }
        .login-logo h3 { font-weight: 700; color: #1A1A2E; font-size: 1.6rem; }
        .login-logo span { color: #C8102E; }
        .login-logo p { color: #888; font-size: .88rem; margin: 4px 0 0; }
        .form-control:focus { border-color: #C8102E; box-shadow: 0 0 0 .25rem rgba(200,16,46,.15); }
        .btn-login { background: #C8102E; color: white; width: 100%; padding: 12px; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; transition: background .2s; }
        .btn-login:hover { background: #A00D24; }
    </style>
</head>
<body>
    <div class="login-box">
        {{ $slot }}
    </div>
</body>
</html>
