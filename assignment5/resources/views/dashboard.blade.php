<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f8f9fa; }
        .container { text-align: center; padding: 40px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #28a745; }
        p { color: #6c757d; margin: 10px 0; }
        .badge { display: inline-block; background: #d4edda; color: #155724; padding: 3px 12px; border-radius: 12px; font-size: 0.85rem; font-weight: 600; }
        form { margin-top: 20px; }
        button { padding: 8px 20px; background: #6c757d; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 0.9rem; }
        button:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome, <strong>{{ auth()->user()->name }}</strong>!</p>
        <p>Account status: <span class="badge">{{ auth()->user()->account_status }}</span></p>
        <p style="font-size:0.85rem; color:#aaa;">CheckAccountStatus middleware passed successfully.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
