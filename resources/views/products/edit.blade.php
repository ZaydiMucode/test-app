<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>update a Product</h1>




<form method= "put" action={{route('product.update',['product'=> $product])}}>
    @csrf
    @method('put')
    <div>
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="name" value="{{$product->name}}"required>
    </div> 
    <div>
        <label for="product_quantity">Product Quantitiy:</label>
        <input type="number" id="product_quantity" name="qty" value="{{$product->qty}}" required>
    </div>
    <div>
        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="price" value="{{$product->price}}" required>
    </div>
    <div>
        <label for="product_description">Product Description:</label>
        <textarea id="product_description" name="description" required>{{$product->description}}</textarea>
    </div>
    <button type="submit">update  Product</button>
</form>
</body>
</html>