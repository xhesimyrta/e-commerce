<header>
  <div class="container px-4 xl:px-32 mx-auto md:flex md:items-center py-2.5 justify-between">
    <div class="flex items-center justify-between space-x-2 sm:space-x-12">
      <a href="mailto:mhhasanul@gmail.com" class="flex items-center space-x-2">
        <i class="far fa-envelope"></i><span class="hidden lg:flex">mhhasanul@gmail.com</span>
      </a>
      <a href="tel:+(12345)67890" class="flex items-center space-x-2">
        <i class="fas fa-phone-volume"></i><span class="hidden lg:flex">(12345)67890</span>
      </a>
    </div>
    <div class="hidden md:display md:flex md:items-center space-x-5">
      <select class="focus:outline-none" name="language">
        <option value="English">English</option>
        <option value="Italian">Italian</option>
      </select>
      <select class="focus:outline-none" name="valute">
        <option value="usd">USD</option>
        <option value="euro">EUR</option>
      </select>
      @if( auth()->check() )
      <a href="" class="flex items-center space-x-1"><i class="far fa-user flex"></i>
        <p>{{ auth()->user()->name }}</p>
      </a>
      <a href="{{ route('signout') }}" class="flex items-center space-x-1">Logout</a>
      @else
      <a href="{{ route('login') }}" class="flex items-center space-x-1">
        <p>Login</p><i class="far fa-user flex"></i>
      </a>
      <a href="{{ route('register') }}" class="flex items-center space-x-1">
        <p>Register</p>
      </a>
      @endif
      <a href="#" class="flex items-center space-x-1">
        <p>Wishlist</p><i class="far fa-heart"></i>
      </a>
      <a href="{{ route('shopping-cart') }}">
        <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1" />
          <circle cx="20" cy="21" r="1" />
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
        </svg>
      </a>
    </div>
  </div>
</header>

<nav class="py-2 xl:py-4 flex">
  <div class="container px-4 xl:px-32 mx-auto md:flex items-center justify-between">
    <div class="flex justify-between items-center">
      <a href="/" class="logo text-lg font-bold xl:text-4xl">Hekto</a>
      <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="hidden flex-col mt-3 md:flex md:flex-row lg:space-x-3 xl:space-x-8 md:mt-0" id="navbar-collapse">
      <div class="flex items-center space-x-3 md:hidden pb-4 md:pb-0">
        <select class="focus:outline-none" name="language">
          <option value="English">English</option>
          <option value="Italian">Italian</option>
        </select>
        <select class="focus:outline-none" name="valute">
          <option value="usd">USD</option>
          <option value="euro">EUR</option>
        </select>
        <a class="flex items-center space-x-1" href="www.google.com">
          <p>Wishlist</p><i class="far fa-heart"></i>
        </a>
        <a href="{{ route('shopping-cart') }}">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
      <a href="/" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600 ">Home</a>
      <a href="" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600 ">Pages</a>
      <a href="{{ route('product-list') }}" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600 ">Products</a>
      <a href="{{ route('blog') }}" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Blog</a>
      <a href="{{ route('all-products') }}" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Shop</a>
      <a href="contact" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600">Contact</a>
      <a href="about" class="p-2 lg:px-4 md:mx-2 rounded hover:bg-gray-200 hover:text-pink-600 ">About</a>
      @if( auth()->check() )
      <a href="{{ route('signout') }}" class="p-2 lg:px-4 md:hidden text-indigo-600 text-center border border-solid border-p-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 text-xl">Logout <i class="far fa-user flex"></i></a>
      @else
      <a href="{{ route('login') }}" class="p-2 lg:px-4 md:hidden text-indigo-600 text-center border border-solid border-p-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1 text-xl">Login <i class="far fa-user flex"></i></a>
      @endif
    </div>
    <form action="{{ route('search') }}" method="GET">
      <div class="flex py-2">
        <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search" class="w-full py-0.5 px-4 2xl:py-1.5  md:w-36 lg:w-80 border-2 focus:outline-none">
        <button class="search-btn px-4 text-white"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </div>
</nav>