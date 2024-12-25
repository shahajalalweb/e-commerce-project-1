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

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                    class="bg-white p-6 shadow-lg rounded-lg">
                    @csrf

                    <h2 class="text-xl font-bold text-gray-800 mb-4">Add New Product</h2>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Product
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Enter product name">
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Price ($)</label>
                            <input type="number" id="price" name="price"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2" placeholder="Enter price">
                        </div>

                        <div>
                            <label for="discount" class="block text-sm font-semibold text-gray-700 mb-2">Discount
                                ($)</label>
                            <input type="number" id="discount" name="discount"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                placeholder="Enter discount amount">
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                            <select id="category_id" name="category_id"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="stock" class="block text-sm font-semibold text-gray-700 mb-2">Stock
                                Quantity</label>
                            <input type="number" id="stock" name="stock"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                placeholder="Enter stock quantity">
                        </div>

                        <div>
                            <label for="rating" class="block text-sm font-semibold text-gray-700 mb-2">Rating
                                (1-5)</label>
                            <input type="number" id="rating" name="rating"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                placeholder="Enter product rating" min="1" max="5">
                        </div>

                        <div class="col-span-2">
                            <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">Product
                                Image</label>
                            <input type="file" id="image" name="image"
                                class="w-full border border-gray-300 rounded-lg px-4 py-2">
                        </div>

                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                            <div class="flex items-center gap-4">
                                <label>
                                    <input type="radio" name="status" value="active">
                                    Active
                                </label>
                                <label>
                                    <input type="radio" name="status" value="inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <textarea id="description" name="description" class="w-full border border-gray-300 rounded-lg px-4 py-2" rows="4"
                            placeholder="Enter product description"></textarea>
                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Product</button>
                    </div>
                </form>


            </div>
        </div>



    </div>
@endsection
