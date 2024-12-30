<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mart BD - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
</head>
<body>
    <nav>
        <a href="/index.html"><img src="https://emartbd24.com/uploads/80f10d72-978f-4fc7-98f8-cc6d761bb4a5/64170d5ebfcbe.png" alt="brand-logo"></a>
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
            <a href="#">Special Offers</a>
            <a href="#">Gym Item</a>
            <a href="#">Fashion & Lifestyle</a>
            <a href="#">Beauty</a>
            <a href="#">Health & Fitness</a>
            <a href="#">Home & Living</a>
            <a href="#">Electronics</a>
            <a href="#">Tools & Hardware</a>
            <a href="#">Organic Food</a>
        </div>
    </header>
    <div class="ad">
        <img src="https://emartbd24.com/uploads/80f10d72-978f-4fc7-98f8-cc6d761bb4a5/6418900162e3f.jpg" alt="">
    </div>
    <div class="items">
        <button>Mobile</button>
        <button>Organic Food</button>
        <button>Hot Sale</button>
        <button>Tools & Hardware</button>
        <button>Health & Fitness</button>
        <button>Home & Living</button>
        <button>Electronics</button>
        <button>Health & Beauty</button>
        <button>Baby Collections</button>
        <button>Ladies Collections</button>
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
            <img src="https://emartbd24.com/uploads/80f10d72-978f-4fc7-98f8-cc6d761bb4a5/product/66dd46f4ec994.jpg" alt="">
            <button class="discount">-30%</button>
            <p class="product-name">Power Twister 30 kg</p>
            <div class="price">
                <p class="discounted">৳ 900</p>
                <p class="original">৳ 1,290</p>
            </div>
            <a href="/cart.html"><button class="order">অর্ডার করুন</button></a>
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
