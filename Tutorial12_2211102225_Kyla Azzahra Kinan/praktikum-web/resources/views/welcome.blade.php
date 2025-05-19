<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk dan Variannya</h1>

    @foreach ($products as $product)
        <h2>{{ $product->name }}</h2>
        <ul>
            @foreach ($product->variants as $variant)
                <li>{{ $variant->variant_name }}</li>
            @endforeach
        </ul>
    @endforeach

    <hr>
    <p>
        <a href="/session-set">Set Session</a> |
        <a href="/session-get">Get Session</a> |
        <a href="/session-clear">Clear Session</a>
    </p>
</body>
</html>
