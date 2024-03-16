<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#bacabuku | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body>
  <header class="w-full border-b-[1px] border-b-gray-300">
    <div class="container mx-auto bg-white px-5">
      <nav class="flex justify-between m-auto w-10/12 items-center py-5">
        <ul class="text-xl py-1 px-3 font-kanit font-bold bg-white text-gray-900 border-2 border-gray-900 rounded-md shadow-[8px_8px_0px_0px]">
          <a href="">#bacabuku</a>
        </ul>
        <ul class="flex gap-6 font-semibold text-sm text-gray-900">
          <li><a href="/pages/auth/login">Login</a></li>
          <li><a href="/pages/auth/register">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="hero container mx-auto min-h-screen bg-white px-5">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h2 class="text-lg text-gray-700">Welcome to</h2>
        <h1 class="text-5xl font-bold text-gray-900">#bacabuku</h1>
        <h2 class="italic text-sm text-gray-500">read more, more read.</h2>
        <p class="py-6 text-sm lg:text-lg">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
        <button class="btn bg-gray-900 text-white hover:bg-gray-800">Get Started</button>
      </div>
    </div>
  </div>

  <footer class="footer footer-center p-4 bg-white text-gray-500 border-t-[1px] border-t-gray-300">
    <aside>
      <p>Copyright © 2024 - All right reserved by Baca Buku</p>
    </aside>
  </footer>


</body>

</html>