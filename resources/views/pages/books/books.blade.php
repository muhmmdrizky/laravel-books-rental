<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#bacabuku | Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>

<body>
  <header class="w-full border border-b-[1px] border-gray-200">
    <nav class="flex container justify-between items-center m-auto p-5 px-14 bg-white">
      <div class="text-xl py-1 px-3 font-kanit font-bold bg-white text-gray-900 border-2 border-gray-900 rounded-md shadow-[8px_8px_0px_0px]">
        <a href="">#bacabuku</a>
      </div>
      <ul class="menu hidden lg:menu-horizontal bg-white rounded-box text-gray-900">
        <li><a>Dashboard</a></li>
        <li><a href="/pages/books/books">Books</a></li>
        <li><a>Categories</a></li>
        <li><a>Users</a></li>
        <li>
          <details>
            <summary class="font-semibold">Muhammad Rizky</summary>
            <ul>
              <li><a>Profile</a></li>
              <li><a>Log out</a></li>
            </ul>
          </details>
        </li>
      </ul>

      <ul class="menu lg:hidden text-gray-900">
        <li>
          <details>
            <summary>Menu</summary>
            <ul class="border-0">
              <li><a>Dashboard</a></li>
              <li><a>Books</a></li>
              <li><a>Categories</a></li>
              <li><a>Users</a></li>
              <li>
                <details>
                  <summary>Muhammad Rizky</summary>
                  <ul>
                    <li><a>Profile</a></li>
                    <li><a>Log out</a></li>
                  </ul>
                </details>
              </li>
            </ul>
          </details>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container bg-white mx-auto px-14 lg:h-svh">
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




  </div>

  <footer class="footer footer-center p-4 bg-white text-gray-500 border-t-[1px] border-t-gray-300">
    <aside>
      <p>Copyright © 2024 - All right reserved by Baca Buku</p>
    </aside>
  </footer>
</body>

</html>