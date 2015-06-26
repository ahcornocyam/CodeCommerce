<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Products--CodeCommerce--</title>
</head>
<body>
<h1>Products</h1>

<ul>
    @foreach($products as $product)
        <li>
            <div>
                <div>
                    <h4>Name</h4>
                    {{ $product->name }}
                </div>
                <div>
                    <h4>Description</h4>
                    {{ $product->description }}
                </div>
                <div>
                    <h4>Price</h4>
                    {{ $product->price }}
                </div>
            </div>
        </li>
    @endforeach
</ul>
</body>
</html>