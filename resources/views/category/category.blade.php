<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categories--CodeCommerce--</title>
</head>
<body>
    <h1>Categories</h1>

    <ul>
        @foreach($categories as $category)
            <li>
                <div>
                    <div>
                        <h4>Name</h4>
                        {{ $category->name }}
                    </div>
                    <div>
                        <h4>Description</h4>
                        {{ $category->description }}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>