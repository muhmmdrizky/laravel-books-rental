<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#bacabuku | @yield('title')</title>
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
    <div class="text-sm text-gray-900 breadcrumbs py-5">
      <ul>
        <li><a>Dashboard</a></li>
        <li><a>Documents</a></li>
        <li>Add Document</li>
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

  </div>

  <footer class="footer footer-center p-4 bg-white text-gray-500 border-t-[1px] border-t-gray-300">
    <aside>
      <p>Copyright © 2024 - All right reserved by Baca Buku</p>
    </aside>
  </footer>
</body>

</html>