<!DOCTYPE html>
<html>
<head>
    <title>Book Products</title>
</head>
<body>

    <h1>Book Product List</h1>

    @foreach($products as $product)
        <div style="border:1px solid black; padding:10px; margin:10px;">
            <h2>{{ $product['title'] }}</h2>
            <p><strong>Author:</strong> {{ $product['author'] }}</p>
            <p><strong>Description:</strong> {{ $product['description'] }}</p>
            <p><strong>Price:</strong> ₱{{ number_format($product['price'], 2) }}</p>
        </div>
    @endforeach

</body>
</html>