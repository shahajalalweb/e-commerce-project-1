@extends('layout.layout')

@section('content')
    <div class="flex-1 p-6">
        <!-- Topbar -->
        <div class="flex items-center justify-between bg-white p-4 rounded-md shadow-md">
            <!-- Dashboard Title -->
            <h1 class="text-2xl font-bold text-gray-800">Category</h1>

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

        <div class="mt-8">
            <!-- Category Input Form -->
            <div class="p-6 bg-white rounded shadow">
                <h3 class="text-lg font-bold mb-4">Add Category</h3>

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

                <!-- Category Form -->
                <form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 shadow-lg rounded-lg">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2" for="category">
                            Category
                        </label>
                        <input type="text" id="category" name="category"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter category name">
                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit"
                            class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold px-6 py-2 rounded-lg shadow-lg hover:shadow-xl transition duration-200">
                            Add Category
                        </button>
                    </div>
                </form>
            </div>

            <!-- Categories Table -->
            <div class="p-6 bg-white rounded shadow mt-8">
                <h3 class="text-lg font-bold mb-4">Categories List</h3>
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead>
                        <tr class="border-b bg-gray-100">
                            <th class="text-left px-6 py-2 font-semibold text-gray-700">#</th>
                            <th class="text-left px-6 py-2 font-semibold text-gray-700">Category Name</th>
                            <th class="text-left px-6 py-2 font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                            <tr class="border-b">
                                <td class="px-6 py-4 text-gray-700">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $category->name }}</td>
                                <td class="px-6 py-4 text-gray-700">
                                    <a href="{{ route('category.delete', $category->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this category?')"
                                        class="text-red-600 hover:underline ml-4">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
