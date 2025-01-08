<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mart BD - Cart</title>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

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

    <div class="cart-container">
        <h1>Your Shopping Cart</h1>

        <!-- Cart Item List -->
        <div class="cart-item">
            @if ($product)
                {{-- Ensure $product is not null --}}
                <img src="{{ asset('storage/' . $product->image) }}" alt="Item Image">
                <div class="item-details">
                    <h3>{{ $product->name }}</h3>
                    <p>Price: ৳{{ $product->price }}</p>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" value="1" min="1" max="{{ $product->quantity }}">
                </div>
                <div class="item-price">
                    ৳{{ $product->price }}
                    <a class="material-symbols-outlined">delete</a>
                </div>
            @else
                <p>No product found.</p>
            @endif
        </div>

        <!-- coupon section -->

        <div class="coupon-section">
            <div class="coupon">
                <input type="text" id="coupon-code" placeholder="Enter Coupon Code">
                <button class="apply-coupon-btn">Apply Coupon</button>
            </div>
            <div class="voucher">
                <input type="text" id="voucher-code" placeholder="Enter Gift Voucher">
                <button class="apply-coupon-btn">Apply Voucher</button>
            </div>
        </div>

        <!-- Total Price -->
        <div class="cart-summary">
            @if ($product)
                {{-- Ensure $product is not null --}}
                <p>Sub-total: <span class="sub-total-price">৳{{ $product->price}}</span></p>
                <p>Delivery Charge: <span class="delivery-charge">(Will be added)</span></p>
                <p>Total Discount: <span class="total-discount">৳{{ ($product->price * $product->discount) / 100 }}</span></p>
                <p>Total: <span class="total-price">৳{{ $product->price - ($product->price * $product->discount) / 100}}</span></p>
            @endif

        </div>
        <!-- Continue Shopping-Checkout btn -->
        <div class="last-button">
            <a href="{{ route('user.home')}}"><button class="shopping-btn">Continue Shopping</button></a>
            <a href="/checkout.html"><button class="checkout-btn">Proceed to Checkout</button></a>
        </div>
    </div>

</body>

</html>
