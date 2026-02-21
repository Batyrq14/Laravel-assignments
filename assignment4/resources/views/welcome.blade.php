<!DOCTYPE html>
<html>
<head>
    <title>Authors & Books</title>
    <style>
        body { font-family: sans-serif; padding: 2rem; background: #f4f4f4; }
        h1 { color: #1a1a2e; }
        .author { background: white; border-radius: 10px; padding: 1.5rem; margin-bottom: 1.5rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .author h2 { margin: 0 0 0.3rem; color: #0f3460; }
        .author p { margin: 0 0 1rem; color: #888; font-size: 0.9rem; }
        .book { background: #f0f4ff; border-left: 4px solid #e94560; padding: 0.7rem 1rem; margin-bottom: 0.5rem; border-radius: 5px; }
        .book strong { display: block; }
        .book span { font-size: 0.85rem; color: #555; }
    </style>
</head>
<body>
    <h1> Authors & Books</h1>
    <p>{{ $authors->count() }} authors · {{ $authors->sum(fn($a) => $a->books->count()) }} books total</p>

    @foreach ($authors as $author)
        <div class="author">
            <h2>{{ $author->name }}</h2>
            <p>{{ $author->email }}</p>
            @foreach ($author->books as $book)
                <div class="book">
                    <strong>{{ $book->title }}</strong>
                    <span>{{ $book->description }}</span>
                </div>
            @endforeach
        </div>
    @endforeach
</body>
</html>