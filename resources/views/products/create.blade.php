<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Create a Product</h1>
@if($error->any())
<ul>
    @foreach ( $error->all() as $error)
        <li>{{ $error }}</li>
        
    @endforeach
</ul>

@endif()

<form method= "POST" action={{route('product.store')}}>
    @csrf
    @method('post')
    <div>
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="name" required>
    </div>
    <div>
        <label for="product_quantity">Product Quantitiy:</label>
        <input type="number" id="product_price" name="qty" required>
    </div>
    <div>
        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="price" required>
    </div>
    <div>
        <label for="product_description">Product Description:</label>
        <textarea id="product_description" name="description" required></textarea>
    </div>
    <button type="submit">Create  Product</button>
</form>
</body>
</html>