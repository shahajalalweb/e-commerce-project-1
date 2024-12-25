@extends('layout.layout')

@section('content')
    <div class="flex-1 p-6">
        <!-- Topbar -->
        <div class="flex items-center justify-between bg-white p-4 rounded-md shadow-md">
            <!-- Dashboard Title -->
            <h1 class="text-2xl font-bold text-gray-800">Add Products</h1>

            <!-- Right Section (Search + Profile) -->
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <div
                    class="flex items-center bg-gray-50 px-4 py-2 rounded-full shadow w-80 ring-1 ring-gray-200 transition duration-200 hover:ring-blue-400 focus-within:ring-blue-500">
                    <span class="material-icons text-gray-400 text-2xl">search</span>
                    <input type="text" placeholder="Search for items..."
                        class="flex-grow ml-3 bg-transparent outline-none text-gray-700 text-sm placeholder-gray-400" />
                </div>
                <!-- Profile Section -->
                <div
                    class="flex items-center bg-blue-600 text-white p-2 rounded-full shadow-md cursor-pointer hover:bg-blue-700 transition duration-200">
                    <span class="material-icons text-3xl">person</span>
                </div>
            </div>
        </div>


        <!-- Admin Panel Design -->
        <div class="mt-8">
            <!-- Product Input Form -->
            <div class="p-6 bg-white rounded shadow">


                <!-- Updated Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @elseif (session('delete'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                        {{ session('delete') }}
                    </div>
                @endif

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 shadow-lg rounded-lg">
                    @csrf

                    <h2 class="text-xl font-bold text-gray-800 mb-4">Add New Product</h2>
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Product Name -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="productName">
                                Product Name
                            </label>
                            <input type="text" id="productName" name="productName"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter product name">
                        </div>

                        <!-- Price -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="price">
                                Price ($)
                            </label>
                            <input type="number" id="price" name="price"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter price">
                        </div>

                        <!-- Discount -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="discount">
                                Discount ($)
                            </label>
                            <input type="number" id="discount" name="discount"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter discount amount">
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="category">
                                Category
                            </label>
                            <select id="category" name="category"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500">
                                <option>Select category</option>
                                <option>Electronics</option>
                                <option>Fashion</option>
                                <option>Home & Living</option>
                            </select>
                        </div>

                        <!-- Stock Quantity -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="stock">
                                Stock Quantity
                            </label>
                            <input type="number" id="stock" name="stock"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter stock quantity">
                        </div>

                        <!-- Rating -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="rating">
                                Rating (1-5)
                            </label>
                            <input type="number" id="rating" name="rating" min="1" max="5" step="0.1"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter product rating">
                        </div>

                        <!-- Image -->
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="image">
                                Product Image
                            </label>
                            <input type="file" id="image" name="image"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Status -->
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2" for="status">
                                Status
                            </label>
                            <div class="flex items-center gap-4">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="status" value="active"
                                        class="text-blue-500 focus:ring-blue-500">
                                    <span>Active</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="status" value="inactive"
                                        class="text-blue-500 focus:ring-blue-500">
                                    <span>Inactive</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2" for="description">
                            Product Description
                        </label>
                        <textarea id="description" name="description" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter a detailed product description"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6 text-right">
                        <button type="submit"
                            class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200">
                            Add Product
                        </button>
                    </div>
                </form>

            </div>
        </div>



    </div>
@endsection
