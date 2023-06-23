<?php
require_once 'header.php';
$url = 'http';
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url .= 's';
}
$url .= '://' . $_SERVER['SERVER_NAME'];
if ($_SERVER['SERVER_PORT'] !== '80') {
    $url .= ':' . $_SERVER['SERVER_PORT'];
}
$url .= $_SERVER['REQUEST_URI'];


// SQL query to select data
$sql = "SELECT DISTINCT name,img, price FROM product;";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['keywords'])) {
  // Extract keywords from the URL
  $keywordArray = [];
  parse_str(parse_url($url, PHP_URL_QUERY), $params);
  if (isset($params['keywords'])) {
      $keywordArray = $params['keywords'];
  }

  // Create SQL query
  $sql = "SELECT DISTINCT name, img, price FROM product WHERE keyword IN ('" . implode("', '", $keywordArray) . "');";

} 
?>

  <div class="bg-gray-50">
  <div>
    <!--
      Mobile PCu

      Off-canvas PCu for mobile, show/hide based on off-canvas PCu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas PCu backdrop, show/hide based on off-canvas PCu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->

    </div>

    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form class="hidden lg:block lg:flex-1">
              <div class="flex">
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="group relative -ml-2 rounded-md border-transparent bg-gray-900 focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="flex items-center rounded-md border-transparent bg-gray-900 bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-white focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-100">
                    

                    <option>USD</option>

                    <option>AUD</option>

                    <option>EUR</option>

                    <option>GBP</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                    <!-- Heroicon name: mini/chevron-down -->
                    <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>

            <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>

            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
              <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
              <div class="flex h-16 items-center justify-between">
                <!-- Logo (lg+) -->
                <div class="hidden lg:flex lg:items-center">
                  <a href="#">
                    <span class="sr-only">Your Company</span>
                    
                  </a>
                </div>

                <div class="hidden h-full lg:flex">
                  <!-- Mega PCus -->
                  <div class="ml-8">
                    <div class="flex h-full justify-center space-x-8">
                      <div class="flex">
                        <div class="relative flex">
                          <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                          <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false" ><a href="index.php">Laptop</a></button>
                        </div>

                        <!--
                          'Laptop' mega PCu, show/hide based on flyout PCu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute inset-x-0 top-full z-20 text-gray-500 sm:text-sm opacity-0">
                          <!-- Presentational elePCt used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter elePCt to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                          <div class="relative bg-white">
                            <div class="mx-auto max-w-7xl px-8">
                              <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                  <div>
                                    <p id="desktop-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="desktop-featured-heading-0" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sleep</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Swimwear</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div>
                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Bottoms</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                  <div>
                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                      </li>
                                    </ul>
                                  </div>

                                  <div>
                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant Other</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="flex">
                        <div class="relative flex">
                          <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                          <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">PC</button>
                        </div>

                        <!--
                          'PC' mega PCu, show/hide based on flyout PCu state.

                          Entering: "transition ease-out duration-200"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "transition ease-in duration-150"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="absolute inset-x-0 top-full z-20 text-gray-500 sm:text-sm opacity-0">
                          <!-- Presentational elePCt used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter elePCt to hide the top of the shadow -->
                          <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                          <div class="relative bg-white opacity-0">
                            <div class="mx-auto max-w-7xl px-8 opacity-0">
                              <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                  <div>
                                    <p id="desktop-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="desktop-featured-heading-1" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Casual</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Outdoor</a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div>
                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Boxers</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                  <div>
                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Core</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                      </li>
                                    </ul>
                                  </div>

                                  <div>
                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Significant Other</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                      </li>

                                      <li class="flex">
                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                      <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                    </div>
                  </div>
                </div>

                <!-- Mobile PCu and search (lg-) -->
                <div class="flex flex-1 items-center lg:hidden">
                  <!-- Mobile PCu toggle, controls the 'mobilePCuOpen' state. -->
                  <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                    <span class="sr-only">Open PCu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                  </button>

                  <!-- Search -->
                  <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <!-- Heroicon name: outline/magnifying-glass -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                  </a>
                </div>

                <!-- Logo (lg-) -->
                <a href="#" class="lg:hidden">
                  <span class="sr-only">Your Company</span>
                  
                </a>

                <div class="flex flex-1 items-center justify-end">
                  <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                      <div class="hidden lg:flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Search</span>
                          <!-- Heroicon name: outline/magnifying-glass -->
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                          </svg>
                        </a>
                      </div>

                      <div class="flex">
                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Account</span>
                          <!-- Heroicon name: outline/user -->
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>
                        </a>
                      </div>
                    </div>

                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                    <div class="flow-root">
                      <a href="#" class="group -m-2 flex items-center p-2">
                        <!-- Heroicon name: outline/shopping-cart -->
                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                        <span class="sr-only">items in cart, view bag</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>

  <div>
    <!--
      Mobile filter dialog

      Off-canvas filters for mobile, show/hide based on off-canvas filters state.
    -->
    <div class="relative z-40 sm:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas PCu backdrop, show/hide based on off-canvas PCu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      

    </div>

    <main>
      <div class="bg-white">
        <div class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">Find Your Perfect Laptop Match</h1>
          <p class="mt-4 max-w-xl text-sm text-gray-700">Welcome to our Laptop Extravaganza! Prepare yourself for an incredible shopping experience where you'll find the best deals on cutting-edge laptops. Whether you're a student, professional, gamer, or simply someone who loves the convenience of portable computing, we've got you covered.</p>
        </div>
      </div>

      <!-- Filters -->
      <section aria-labelledby="filter-heading">
        <h2 id="filter-heading" class="sr-only">Filters</h2>

        <div class="border-b border-gray-200 bg-white pb-4">
          <div class="mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="relative inline-block text-left">
              <div>
                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="PCu-button" aria-expanded="false" aria-haspopup="true">
                  Sort
                  <!-- Heroicon name: mini/chevron-down -->
                  <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

              <!--
                Dropdown PCu, show/hide based on PCu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div class="absolute left-0 z-10 mt-2 w-40 origin-top-left rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none transform opacity-0 scale-95" role="PCu" aria-orientation="vertical" aria-labelledby="PCu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <!--
                    Active: "bg-gray-100", Not Active: ""

                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                  -->
                  <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="PCuitem" tabindex="-1" id="PCu-item-0">Most Popular</a>

                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="PCuitem" tabindex="-1" id="PCu-item-1">Best Rating</a>

                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="PCuitem" tabindex="-1" id="PCu-item-2">Newest</a>

                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="PCuitem" tabindex="-1" id="PCu-item-3">Price: Low to High</a>

                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="PCuitem" tabindex="-1" id="PCu-item-4">Price: High to Low</a>
                </div>
              </div>
            </div>

            <!-- Mobile filter dialog toggle, controls the 'mobileFiltersOpen' state. -->
            <button type="button" class="inline-block text-sm font-medium text-gray-700 hover:text-gray-900 sm:hidden">Filters</button>

            <div class="hidden sm:block">
              <div class="flow-root">
                <div class="-mx-4 flex items-center divide-x divide-gray-200">
                  <div class="relative inline-block px-4 text-left">
                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                      <span>Category</span>

                      <span class="ml-1.5 rounded bg-gray-200 py-0.5 px-1.5 text-xs font-semibold tabular-nums text-gray-700">1</span>
                      <!-- Heroicon name: mini/chevron-down -->
                      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                    </button>

                   
                  </div>

                  <div class="relative inline-block px-4 text-left">
                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                      <span>Color</span>
                      <!-- Heroicon name: mini/chevron-down -->
                      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                    </button>


                  </div>

                  <div class="relative inline-block px-4 text-left">
                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" aria-expanded="false">
                      <span>Sizes</span>
                      <!-- Heroicon name: mini/chevron-down -->
                      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                    </button>

                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Active filters -->
        <div class="bg-gray-100">
          <div class="mx-auto max-w-7xl py-3 px-4 sm:flex sm:items-center sm:px-6 lg:px-8">
            <h3 class="text-sm font-medium text-gray-500">
              Filters
              <span class="sr-only">, active</span>
            </h3>

            <div aria-hidden="true" class="hidden h-5 w-px bg-gray-100 sm:ml-4 sm:block"></div>

            <div class="mt-2 sm:mt-0 sm:ml-4 flex">
              <?php

              if (isset($_GET['keywords'])) {
                foreach ($_GET['keywords'] as $thiskeyword) {
                  ?>
                  <div class="-m-1 flex flex-wrap items-center">
                <span class="m-1 inline-flex items-center rounded-full border border-gray-200 bg-white py-1.5 pl-3 pr-2 text-sm font-medium text-gray-900">
                  <span><?php echo $thiskeyword ?></span>
                  <button type="button" class="ml-1 inline-flex h-4 w-4 flex-shrink-0 rounded-full p-1 text-gray-400 hover:bg-gray-200 hover:text-gray-500">
                    <span class="sr-only">Remove filter for Objects</span>
                    <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                      <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                    </svg>
                  </button>
                </span>
              </div>

              <?php
                }
              }

              ?>
              

            </div>
          </div>
        </div>
      </section>

      <!-- Product grid -->
      <section aria-labelledby="products-heading" class="mx-auto max-w-2xl px-4 pt-12 pb-16 sm:px-6 sm:pt-16 sm:pb-24 lg:max-w-7xl lg:px-8">
        <h2 id="products-heading" class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

          <?php
          

          // Execute the query
          $result = $conn->query($sql);

          // Check if the query was successful
          if ($result->num_rows > 0) {
              // Loop through the rows of data
              while ($row = $result->fetch_assoc()) {
                  // Access data fields
                  $name = $row["name"];
                  $price = $row["price"];
                  $img = $row["img"];

          ?>
          <a href="#" class="group flex flex-col justify-end">
            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
              <img src="img/<?php echo $img ?>" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-gray-700"><?php echo $name ?></h3>
            <p class="mt-1 text-lg font-medium text-gray-900">LKR <?php echo $price ?></p>
          </a>


        <?php
            }
        } else {
            echo "No results found.";
        }


        ?>
          


          <!-- More products... -->
        </div>
      </section>
    </main>

    <footer aria-labelledby="footer-heading" class="border-t border-gray-200 bg-white">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-20">
          <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
            <!-- Image section -->
            <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
             
            </div>

            <!-- Sitemap sections -->
            <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
              <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Products</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Company</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                <ul role="list" class="mt-6 space-y-6">
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Secure PayPCts</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Newsletter section -->
            <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
              <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
              <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
              <form class="mt-2 flex sm:max-w-md">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                <div class="ml-4 flex-shrink-0">
                  <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gray-900 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-100 py-10 text-center">
          <p class="text-sm text-gray-500">&copy; 2021 Your Company, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>


    <button type="button" class="inline-flex items-center rounded-full border border-transparent bg-gray-900 p-3 text-white shadow-sm hover:bg-gray-700 focus:outline-none  focus:ring-offset-2 fixed bottom-0 right-0 m-2"  id="toggleChatButton">
      <!-- Heroicon name: outline/plus -->
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
      </svg>

    </button>


    <!-- Component Start -->

  <div class="flex flex-col flex-grow w-full max-w-xl bg-white shadow-xl rounded-lg overflow-hidden fixed bottom-0 right-0 lg:m-2  border-2 hidden transition ease-out duration-100 transform opacity-0 scale-95 z-50 " id="chatMain">
    <div class="bg-gray-100 p-4 flex justify-between">
      <!-- <input class="flex items-center h-10 w-full rounded px-3 text-sm" type="text" placeholder="Type your message…"> -->
      <p class="text-sm font-medium ">AI Powered Live Chat <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">Online</span></p>

      <button id="chatClose" class="hover:text-red-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      </button>
      

      <!-- <div class="relative flex">
         <span class="absolute inset-y-0 flex items-center">
            <button type="button" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
               </svg>
            </button>
         </span>
         <input type="text" placeholder="Write your message!" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">
         <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">

            <button type="button" class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-gray-800 hover:bg-gray-900 focus:outline-none">
               <span class="">Send</span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 ml-2 transform rotate-90">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
               </svg>
            </button>
         </div>
      </div> -->
    </div>
    <div class="flex flex-col flex-grow h-0 p-4 overflow-auto " style="height: 76vh;" id="messageWrapper">














    </div>
    
    <div class="bg-gray-100 p-4">
      <!-- <input class="flex items-center h-10 w-full rounded px-3 text-sm" type="text" placeholder="Type your message…"> -->
      <div class="relative flex">
        <span class="absolute inset-y-0 flex items-center hidden h-12 w-12 rounded-full bg-gray-700 opacity-75" id="voice-pulse"></span>
         <span class="absolute inset-y-0 flex items-center">

            <button id="record-btn" type="button" class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none ">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6 text-gray-600">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
               </svg>

            </button>

         </span>
          <audio id="audio" class="focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3 px-3 hidden" style="width: 80%;" controls></audio>
         <input type="text" id="chatInputText" placeholder=" Write your message!" class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">
         <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">

            <button type="button" class="inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-gray-800 hover:bg-gray-900 focus:outline-none" id="save-btn">
               <span class="">Send</span>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 ml-2 transform rotate-90">
                  <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
               </svg>
            </button>
         </div>
      </div>
    </div>
  </div>
  <!-- Component End  -->
  </div>
</div>

<?php

require_once 'footer.php';


?>