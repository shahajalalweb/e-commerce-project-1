
@extends('layout.layout')

@section('content')


<div class="flex-1 p-6">
    <!-- Topbar -->
    <div class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Dashboard</h1>
      <button class="px-4 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Download Free</button>
    </div>
    <!-- Main Area -->
    <div class="mt-8">
      <!-- Charts and Stats -->
      <div class="grid gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2 bg-white p-6 rounded shadow">
          <h3 class="text-lg font-bold">Profit & Expenses</h3>
          <!-- Chart placeholder -->
          <div class="h-40 mt-4 bg-gray-200 rounded"></div>
        </div>
        <div class="space-y-4">
          <div class="p-6 bg-white rounded shadow">
            <h4 class="text-sm font-medium">Traffic Distribution</h4>
            <div class="mt-4 h-20 bg-gray-200 rounded"></div>
            <p class="mt-4 text-center text-xl font-bold">$36,358</p>
            <p class="text-sm text-center text-green-600">+9% last year</p>
          </div>
          <div class="p-6 bg-white rounded shadow">
            <h4 class="text-sm font-medium">Product Sales</h4>
            <div class="mt-4 h-20 bg-gray-200 rounded"></div>
            <p class="mt-4 text-center text-xl font-bold">$6,820</p>
            <p class="text-sm text-center text-green-600">+9% last year</p>
          </div>
        </div>
      </div>
      <!-- Other Sections -->
      <div class="mt-8 grid gap-6 md:grid-cols-2">
        <div class="p-6 bg-white rounded shadow">
          <h4 class="text-lg font-bold">Upcoming Schedules</h4>
          <p class="mt-4 text-sm">9:30 am - Payment received from John</p>
        </div>
        <div class="p-6 bg-white rounded shadow">
          <h4 class="text-lg font-bold">Top Paying Clients</h4>
          <p class="mt-4 text-sm">Referral from Smith</p>
        </div>
      </div>
    </div>
  </div>


@endsection
