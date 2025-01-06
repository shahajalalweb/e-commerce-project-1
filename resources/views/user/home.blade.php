<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mart BD - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <header>
        <div class="first-row">
            @foreach ($menus as $menu)
                <a href="#">{{ $menu->name }}</a>
            @endforeach
        </div>
    </header>
    <div class="ad">
        <img src="https://emartbd24.com/uploads/80f10d72-978f-4fc7-98f8-cc6d761bb4a5/6418900162e3f.jpg" alt="">
    </div>
    <div class="items">
        @foreach ($categories as $category)
            <button>{{ $category->name }}</button>
        @endforeach

    </div>
    <div class="product-header">
        <div>
            <h2>All</h2>
            <h2 class="blue">Products</h2>
        </div>
        <a href="/page2.html"><button>See More</button></a>
    </div>
    <div class="products">

        @foreach ($products as $product)
            <div class="box">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
                <button class="discount">-{{ rtrim(rtrim($product->discount, '0'), '.') }}%</button>
                <p class="product-name">{{ $product->name }}</p>
                <div class="price">
                    <p class="discounted">৳ {{ $product->price - ($product->price * $product->discount) / 100 }}</p>
                    <p class="original">৳ {{ $product->price }}</p>
                </div>
                <a href="{{ route('user.card', $product->id) }}"><button class="order"> অর্ডার করুন </button></a>
            </div>
        @endforeach

    </div>


    <div class="page-button">
        <a href="/index.html"><button><</button></a>
        <a href="/index.html"><button class="first-page">1</button></a>
        <a href="/page2.css"><button>></button></a>
    </div>
    <footer>
        © 2023 All Rights Reserved By E-Mart BD | Designed and Developed by TechJodo
    </footer>
</body>

</html>
