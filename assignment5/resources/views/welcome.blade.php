<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckAccountStatus Middleware Demo</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { background: white; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.1); padding: 40px; width: 100%; max-width: 480px; }
        h1 { font-size: 1.5rem; margin-bottom: 6px; color: #1a1a2e; }
        .subtitle { color: #6c757d; font-size: 0.9rem; margin-bottom: 28px; }
        .divider { border: none; border-top: 1px solid #e9ecef; margin: 24px 0; }
        label { display: block; font-size: 0.85rem; font-weight: 600; color: #495057; margin-bottom: 5px; }
        input[type=email], input[type=password] {
            width: 100%; padding: 10px 12px; border: 1px solid #ced4da;
            border-radius: 6px; font-size: 0.95rem; margin-bottom: 14px;
        }
        input:focus { outline: none; border-color: #6c63ff; box-shadow: 0 0 0 3px rgba(108,99,255,0.15); }
        .btn { display: block; width: 100%; padding: 11px; border: none; border-radius: 6px; font-size: 1rem; cursor: pointer; font-weight: 600; }
        .btn-primary { background: #6c63ff; color: white; }
        .btn-primary:hover { background: #5a52d5; }
        .error { color: #dc3545; font-size: 0.85rem; margin-bottom: 12px; }
        .quick-test { margin-top: 8px; }
        .quick-test p { font-size: 0.82rem; color: #6c757d; margin-bottom: 10px; text-align: center; }
        .test-btns { display: flex; gap: 10px; }
        .btn-test { flex: 1; padding: 9px; border: none; border-radius: 6px; font-size: 0.85rem; cursor: pointer; font-weight: 600; }
        .btn-active   { background: #d4edda; color: #155724; }
        .btn-inactive { background: #f8d7da; color: #721c24; }
        .btn-active:hover   { background: #c3e6cb; }
        .btn-inactive:hover { background: #f5c6cb; }
        .badge { display: inline-block; padding: 2px 8px; border-radius: 10px; font-size: 0.75rem; font-weight: 600; }
        .badge-active   { background: #d4edda; color: #155724; }
        .badge-inactive { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
<div class="container">
    <h1>CheckAccountStatus Middleware</h1>
    <p class="subtitle">Assignment 5 — Custom Middleware Demo</p>

    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn btn-primary">Login &rarr;</button>
    </form>

    <hr class="divider">

    <div class="quick-test">
        <p>Quick test — fill credentials automatically:</p>
        <div class="test-btns">
            <button class="btn-test btn-active" onclick="fillCredentials('active@test.com')">
                Active User <span class="badge badge-active">active</span>
            </button>
            <button class="btn-test btn-inactive" onclick="fillCredentials('inactive@test.com')">
                Inactive User <span class="badge badge-inactive">suspended</span>
            </button>
        </div>
        <p style="margin-top:10px; font-size:0.78rem;">Password for both: <code>password</code></p>
    </div>
</div>

<script>
function fillCredentials(email) {
    document.getElementById('email').value = email;
    document.getElementById('password').value = 'password';
}
</script>
</body>
</html>
