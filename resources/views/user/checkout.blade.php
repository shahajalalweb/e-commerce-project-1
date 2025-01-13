<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- <link rel="stylesheet" href="checkout.css"> -->
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <!-- Google Icon -->
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

    <div class="checkout-container">
        <h1>Checkout</h1>

        <div class="checkout-section">
            <h2>Billing Information</h2>
            <form id="billing-form">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="address">Billing Address</label>
                    <input type="text" id="address" name="address" required>
                </div>
            </form>
        </div>

        <div class="checkout-section">
            <h2>Shipping Information</h2>
            <form id="shipping-form">
                <div class="form-group">
                    <label for="shipping-address">Shipping Address</label>
                    <input type="text" id="shipping-address" name="shipping-address" required>
                </div>
                <div class="form-group">
                    <label for="shipping-method">Shipping Method</label>
                    <select id="shipping-method" name="shipping-method" required>
                        <option value="standard">Standard Shipping</option>
                        <option value="express">Express Shipping</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="checkout-section">
            <h2>Order Summary</h2>
            <table id="order-summary">
                <tr>
                    <td>Product 1</td>
                    <td>$20.00</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$55.00</strong></td>
                </tr>
            </table>
        </div>

        <div class="checkout-section">
            <button class="place-order" id="place-order">Place Order</button>
        </div>
    </div>
</body>
</html>
