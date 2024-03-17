@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="text-sm text-gray-900 breadcrumbs py-5">
  <ul>
    <li><a>Dashboard</a></li>
  </ul>
</div>
<div class="flex flex-col lg:flex-row gap-5">
  <div class="flex justify-between bg-gray-900 text-white basis-2/6 p-4">
    <div>
      <i class="fa-solid fa-user text-8xl"></i>
    </div>
    <div class="flex flex-col text-right justify-center">
      <h2>Users</h2>
      <h1 class="text-5xl font-bold">154</h1>
    </div>
  </div>
  <div class="flex justify-between bg-gray-900 text-white basis-2/6 p-4">
    <div>
      <i class="fa-solid fa-list text-8xl"></i>
    </div>
    <div class="flex flex-col text-right justify-center">
      <h2>Categories</h2>
      <h1 class="text-5xl font-bold">15</h1>
    </div>
  </div>
  <div class="flex justify-between bg-gray-900 text-white basis-2/6 p-4">
    <div>
      <i class="fa-solid fa-book text-8xl"></i>
    </div>
    <div class="flex flex-col text-right justify-center">
      <h2>Books</h2>
      <h1 class="text-5xl font-bold">99</h1>
    </div>
  </div>
</div>

<h1 class="text-lg md:text-xl py-5">#Rent Logs.</h1>

<div class="pb-5">
  <div class="overflow-x-auto">
    <table class="table text-gray-900">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Book</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        <tr>
          <th>1</th>
          <td>Cy Ganderton</td>
          <td>Quality Control Specialist</td>
          <td>Blue</td>
        </tr>
        <!-- row 2 -->
        <tr class="hover">
          <th>2</th>
          <td>Hart Hagerty</td>
          <td>Desktop Support Technician</td>
          <td>Purple</td>
        </tr>
        <!-- row 3 -->
        <tr>
          <th>3</th>
          <td>Brice Swyre</td>
          <td>Tax Accountant</td>
          <td>Red</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection