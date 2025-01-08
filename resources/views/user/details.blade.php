<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mart BD - Cart</title>
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <nav>
        <a href="/index.html"><img
                src="https://emartbd24.com/uploads/80f10d72-978f-4fc7-98f8-cc6d761bb4a5/64170d5ebfcbe.png"
                alt="brand-logo"></a>
        <div class="searchbar">
            <input type="text" placeholder="Search Products...">
            <span class="material-symbols-outlined">
                search
            </span>
        </div>
        <div class="contact">
            <a href="tel:+8801871980098">
                <span class="material-symbols-outlined call">
                    call
                </span>
            </a>
            <div>
                <p class="order">অর্ডার করতে কল করুন</p>
                <p class="number">+8801871980098</p>
            </div>
            <a href="/cart.html">
                <span class="material-symbols-outlined bag">
                    shopping_bag
                </span>
            </a>
            <a href="/account.html">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
            </a>
        </div>
    </nav>

    <!-- Product Details Section -->
    <div class="product-details-container">
        <div class="product-detail">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="product-img">
            <div class="product-info">
                <h2 class="product-name">{{ $product->name }}</h2>
                <div>
                    <p class="product-price">৳{{ $product->price - ($product->price * $product->discount) / 100 }}</p>
                    <p style="margin-bottom: 20px;
                    margin-left: 5px;
                    ">
                        <del>৳{{ rtrim(rtrim($product->price, '0'), '.') }}</del></p>
                </div>
                <p class="product-description">{{$product->description}}</p>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" value="1" min="1" max="{{ $product->quantity }}">

                <div class="add-to-cart">
                    <button class="add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <h3 style="margin-top: 30px;">Related Products</h3>
        <div class="related-products">
            @foreach ($products->take(3) as $product)
            <div class="related-product-item">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Related Product">
                <h4>{{ $product->name }}</h4>
                <p>৳{{ $product->price}}</p>
                <a href="/product_details.html" class="view-details-btn">View Details</a>
            </div>
            @endforeach

        </div>
    </div>


</body>

</html>
