<!DOCTYPE html>
<html>
<head>
    <title>Authors Only</title>
    <style>
        body { font-family: sans-serif; padding: 2rem; background: #f4f4f4; }
        .card { background: white; padding: 1rem 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        h1 { color: #1a1a2e; }
        p { color: #888; font-size: 0.9rem; }
        nav a { margin-right: 1rem; color: #e94560; font-weight: bold; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Authors + Books</a>
        <a href="/authors">Authors Only</a>
        <a href="/books">Books Only</a>
    </nav>
    <h1> Authors Only — Author::all()</h1>
    @foreach ($authors as $author)
        <div class="card">
            <strong>{{ $author->name }}</strong>
            <p>{{ $author->email }}</p>
        </div>
    @endforeach
</body>
</html>