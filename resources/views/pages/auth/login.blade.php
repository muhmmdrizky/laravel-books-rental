<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#bacabuku | Login</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div class="w-2/3 sm:w-2/4 md:w-2/5 lg:w-1/3 m-auto mt-24 rounded-lg shadow-md border border-gray-200 p-3">
    <div class="flex justify-between mx-2">
      <a class="text-sm text-gray-500" href="/">Home</a>
      <a class="text-sm text-gray-500" href="register">Register</a>
    </div>

    <div class="flex flex-col items-center p-2 mt-2">
      <h1 class="text-sm md:text-lg lg:text-lg font-bold">Welcome to #bacabuku</h1>
      <p class="text-sm text-gray-500">read more, more read.</p>
    </div>
    @if (session('status'))
    <div class="flex flex-col items-center p-2 m-3 border border-1 border-red-300 bg-red-100 rounded-md">
      <span class="text-sm text-red-800">{{ session('message') }}</span>
    </div>
    @endif
    <form action="/login" method="POST">
      @csrf
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Username</span>
        <input type="text" name="username" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your username</span>
      </div>
      <div class="flex flex-col p-3">
        <span class="text-sm font-semibold">Password</span>
        <input type="password" name="password" placeholder="Type here" class="input input-bordered w-full my-2" />
        <span class="text-sm text-gray-500">Please enter your password</span>
      </div>
      <div class="flex flex-col p-3">
        <button type="submit" class="btn bg-slate-900 w-20 sm:w-24 md:w-28 lg:w-32 text-white hover:bg-slate-800">Login</button>
      </div>
    </form>
  </div>


</body>

</html>