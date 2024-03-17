@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="text-sm text-gray-900 breadcrumbs py-5 lg:flex lg:justify-between">
  <ul>
    <li><a>Dashboard</a></li>
    <li>Books</li>
  </ul>

  <div class="join pt-4 lg:pt-0">
    <input class="input input-bordered join-item" placeholder="Type here" />
    <button class="btn join-item rounded-r-md bg-gray-900 text-white hover:bg-gray-800">Seacrh</button>
  </div>
</div>

<div class="text-sm text-gray-900 breadcrumbs py-5 flex justify-between items-center">
  <h1 class="text-lg md:text-xl">All Books (1000)</h1>
  <button class="btn bg-gray-900 hover:bg-gray-800 text-white">Add Books</button>
</div>



<div class="flex flex-col justify-between lg:flex-row gap-5">
  <div class="flex flex-col border-[1px] rounded-md p-4">
    <img class="w-full bg-cover  sm:w-60 sm:h-60 border-gray-900 border-2 rounded-md" src="https://cdn.gramedia.com/uploads/items/9781800226753.jpg" alt="">
    <h2 class="font-semibold pt-2">One Million Kisses</h2>
    <h3 class="text-sm pb-2 text-green-500">Available 5</h3>
    <button class="btn btn-sm bg-gray-900 hover:bg-gray-800 text-white">Details</button>
  </div>
  <div class="flex flex-col border-[1px] rounded-md p-4">
    <img class="w-full h-60 sm:w-60 sm:h-60 border-gray-900 border-2 rounded-md" src="https://cdn.gramedia.com/uploads/items/9781785576621.jpg" alt="">
    <h2 class="font-semibold pt-2">Who's Afraid of The Dark?</h2>
    <h3 class="text-sm pb-2 text-green-500">Available 5</h3>
    <button class="btn btn-sm bg-gray-900 hover:bg-gray-800 text-white">Details</button>
  </div>
  <div class="flex flex-col border-[1px] rounded-md p-4">
    <img class="w-full h-60 sm:w-60 sm:h-60 border-gray-900 border-2 rounded-md" src="https://cdn.gramedia.com/uploads/items/9781789056570.jpg" alt="">
    <h2 class="font-semibold pt-2">Hug Me</h2>
    <h3 class="text-sm pb-2 text-green-500">Available 6</h3>
    <button class="btn btn-sm bg-gray-900 hover:bg-gray-800 text-white">Details</button>
  </div>
  <div class="flex flex-col border-[1px] rounded-md p-4">
    <img class="w-full h-60 sm:w-60 sm:h-60 border-gray-900 border-2 rounded-md" src="https://cdn.gramedia.com/uploads/items/9781788104128.jpg" alt="">
    <h2 class="font-semibold pt-2">Math Essentials</h2>
    <h3 class="text-sm pb-2 text-green-500">Available 2</h3>
    <button class="btn btn-sm bg-gray-900 hover:bg-gray-800 text-white">Details</button>
  </div>

</div>




@endsection