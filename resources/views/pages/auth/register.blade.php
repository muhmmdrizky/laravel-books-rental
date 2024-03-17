<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#bacabuku | Register</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="w-2/3 sm:w-2/4 md:w-2/5 lg:w-1/3 m-auto mt-24 mb-24 rounded-lg shadow-md border border-gray-200 p-3">
    <div class="flex justify-between mx-2">
      <a class="text-sm text-gray-500" href="/">Home</a>
      <a class="text-sm text-gray-500" href="login">Login</a>
    </div>

    <div class="flex flex-col items-center p-2 mt-2">
      <h1 class="text-sm md:text-lg lg:text-lg font-bold">Register to #bacabuku</h1>
      <p class="text-sm text-gray-500">read more, more read.</p>
    </div>
    @if ($errors->any())
    <div class="flex flex-col items-start p-2 m-3 border border-1 border-red-300 bg-red-100 rounded-md">
      @foreach ($errors->all() as $error)
      <p class="text-sm text-red-800">{{ $error }}</p>
      @endforeach
    </div>
    @endif

    @if (session('status'))
    <div class="flex flex-col items-center p-2 m-3 border border-1 border-green-300 bg-green-100 rounded-md">
      <span class="text-sm text-green-800">{{ session('message') }}</span>
    </div>
    @endif
    <form action="" method="POST">
      @csrf
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">First Name</span>
        <input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your first name</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Last Name</span>
        <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your last name</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Username</span>
        <input type="text" name="username" value="{{ old('username') }}" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your username</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Password</span>
        <input type="password" name="password" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your password</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Phone</span>
        <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your phone number</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Address</span>
        <textarea name="address" placeholder="Type here" class="input input-bordered w-full my-2 min-h-24" />{{ old('address') }} </textarea>
        <span class="text-sm text-gray-500">Please enter your address</span>
      </div>
      <div class="flex flex-col p-3">
        <button class="btn bg-slate-900 w-20 sm:w-24 md:w-28 lg:w-32 text-white hover:bg-slate-800">Register</button>
      </div>
    </form>
  </div>


</body>

</html>