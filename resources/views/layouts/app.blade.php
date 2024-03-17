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
  <header class="w-full border-b-[1px] border-gray-200">
    <nav class="flex container justify-between items-center m-auto p-5 px-14 bg-white">
      <div class="text-xl py-1 px-3 font-kanit font-bold bg-white text-gray-900 border-2 border-gray-900 rounded-md shadow-[8px_8px_0px_0px]">
        <a href="">#bacabuku</a>
      </div>

      <ul class="menu hidden lg:menu-horizontal bg-white rounded-box text-gray-900">
        @if (Auth::user()->role_id === 1)
        <li><a>Dashboard</a></li>
        @endif
        @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
        <li><a href="/pages/books/books">Books</a></li>
        <li><a href="/pages/categories/categories">Categories</a></li>
        @endif
        @if (Auth::user()->role_id === 1)
        <li><a href="/pages/rent-logs/rent-logs">Rent Log</a></li>
        <li><a href="/pages/users/users">Users</a></li>
        @endif
        @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
        <li>
          <details>
            <summary class="font-semibold">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</summary>
            <ul>
              <li><a>Profile</a></li>
              <li><a href="/logout">Logout</a></li>
            </ul>
          </details>
        </li>
        @endif
      </ul>

      <ul class="menu lg:hidden text-gray-900">
        <li>
          <details>
            <summary>Menu</summary>
            <ul class="border-0">
              @if (Auth::user()->role_id === 1)
              <li><a>Dashboard</a></li>
              @endif
              @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
              <li><a>Books</a></li>
              <li><a>Categories</a></li>
              @endif
              @if (Auth::user()->role_id === 1)
              <li><a>Users</a></li>
              <li><a>Rent Log</a></li>
              @endif
              @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
              <li>
                <details>
                  <summary>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</summary>
                  <ul>
                    <li><a>Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                  </ul>
                </details>
              </li>
              @endif
            </ul>
          </details>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container bg-white mx-auto px-14 lg:h-svh">
    @yield('content')
  </div>

  <footer class="footer footer-center p-4 bg-white text-gray-500 border-t-[1px] border-t-gray-300">
    <aside>
      <p>Copyright © 2024 - All right reserved by Baca Buku</p>
    </aside>
  </footer>
</body>

</html>