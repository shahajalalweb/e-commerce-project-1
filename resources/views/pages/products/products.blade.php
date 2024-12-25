@extends('layout.layout')

@section('content')
    <div class="flex-1 p-6">
        <!-- Topbar -->
        <div class="flex items-center justify-between bg-white p-4 rounded-md shadow-md">
            <!-- Dashboard Title -->
            <h1 class="text-2xl font-bold text-gray-800">Products</h1>

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

    <!-- Product Table -->
    <div class="mt-8 p-6 bg-white rounded shadow">
        <h3 class="text-lg font-bold mb-4">Product List</h3>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200 text-sm">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="border border-gray-300 px-4 py-2">#</th>
                        <th class="border border-gray-300 px-4 py-2">Product Name</th>
                        <th class="border border-gray-300 px-4 py-2">Category</th>
                        <th class="border border-gray-300 px-4 py-2">Price ($)</th>
                        <th class="border border-gray-300 px-4 py-2">Stock</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Sample Product</td>
                        <td class="border border-gray-300 px-4 py-2">Electronics</td>
                        <td class="border border-gray-300 px-4 py-2">$100</td>
                        <td class="border border-gray-300 px-4 py-2">50</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="px-2 py-1 text-white bg-green-500 rounded hover:bg-green-600">Edit</button>
                            <button class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    <!-- More rows can be added dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>



    </div>
@endsection
