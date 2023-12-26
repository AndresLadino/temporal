<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/input.css">
    @vite('resources/css/app.css')
    <title>Ladco Steel | Industria Metalmecánica </title>
</head>

<body>
    <header class="sticky top-0 z-50">
        <!--<nav class="bg-neutral-950 dark:border-gray-700 text-lg">-->
        
        
<nav class="bg-cover bg-center bg-[url('https://images.unsplash.com/photo-1633886038251-66242d6cf688?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fHw%3D&w=1000&q=80')]  bg-blend-multiply text-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center">
            <img src="{{ URL::asset('/images/logo.png') }}" class="h-16 mr-3" alt="Ladco Steel Logo" />
            <!--<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ladco</span>-->
        </a>
    <div class="flex items-center md:order-2">
        <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-lg text-amber-300 rounded-lg cursor-pointer hover:bg-neutral-600">          
          <svg class="w-5 h-5 mr-2" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" preserveAspectRatio="xMidYMid meet"><path fill="#FBD116" d="M32 5H4a4 4 0 0 0-4 4v9h36V9a4 4 0 0 0-4-4z"></path><path fill="#22408C" d="M0 18h36v7H0z"></path><path fill="#CE2028" d="M0 27a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4v-2H0v2z"></path></svg>          
          Español (CO)
        </button>
        <!-- Dropdown lenguaje -->
        <div class="z-50 hidden my-4 text-base list-none bg-neutral-900 divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
          <ul class="py-2 font-medium" role="none">
            <li>
                <a href="{{url('locale/es')}}" class="block px-4 py-2 text-sm text-amber-300 hover:bg-neutral-950 dark:text-gray-400 dark:hover:bg-neutral-600 dark:hover:text-white" role="menuitem">
                  <div class="inline-flex items-center">
                    <svg class="w-3.5 h-3.5 mr-2" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" preserveAspectRatio="xMidYMid meet"><path fill="#FBD116" d="M32 5H4a4 4 0 0 0-4 4v9h36V9a4 4 0 0 0-4-4z"></path><path fill="#22408C" d="M0 18h36v7H0z"></path><path fill="#CE2028" d="M0 27a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4v-2H0v2z"></path></svg>          
                    Español (CO)
                  </div>
                </a>
              </li>
            <li>
              <a href="{{url('locale/en')}}" class="block px-4 py-2 text-sm text-amber-300 hover:bg-neutral-950 dark:text-gray-400 dark:hover:bg-neutral-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <svg aria-hidden="true" class="h-3.5 w-3.5  mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                  English
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-amber-300 hover:bg-neutral-950 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <svg class="h-3.5 w-3.5  mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512"><path fill="#ffce00" d="M0 341.3h512V512H0z"/><path d="M0 0h512v170.7H0z"/><path fill="#d00" d="M0 170.7h512v170.6H0z"/></svg>
                  Deutsch
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-amber-300 hover:bg-neutral-950 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <svg class="h-3.5 w-3.5  mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h512v512H0z"/><path fill="#009246" d="M0 0h170.7v512H0z"/><path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/></g></svg>              
                  Italiano
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-amber-300 hover:bg-neutral-950 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                <div class="inline-flex items-center">
                  <svg class="h-3.5 w-3.5  mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                  中文 (繁體)
                </div>
              </a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-amber-500 rounded md:bg-transparent md:text-amber-500 md:p-0" aria-current="page">Inicio</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-amber-300 font-normal transition duration-300 hover:bg-zinc-900 md:hover:bg-transparent md:hover:text-amber-500 md:p-0 md:w-auto">Productos
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 4 4 4-4" />
                </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
                class="z-10 hidden  font-normal bg-neutral-950 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-lg text-gray-700 dark:text-gray-400 "
                    aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Producto
                            1</a>
                    </li>
                    <li aria-labelledby="dropdownNavbarLink">
                        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                            data-dropdown-placement="right-start" type="button"
                            class="flex items-center justify-between w-full px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Multilevel<svg
                                class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="doubleDropdown"
                            class="z-10 hidden bg-neutral-950 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-lg text-gray-700 dark:text-gray-200"
                                aria-labelledby="doubleDropdownButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplo
                                        1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplo
                                        2</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplo
                                        3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplo
                                        4</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplo
                            5</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#"
                        class="block px-4 py-2 text-amber-300 font-normal transition duration-300 md:hover:text-amber-500 hover:bg-zinc-900 dark:hover:bg-gray-600 dark:hover:text-white">Ejemplooo</a>
                </div>
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-amber-300 rounded hover:bg-amber-500 md:hover:bg-transparent md:hover:text-amber-500 md:p-0 font-normal">Nosotros</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-amber-300 rounded hover:bg-amber-500 md:hover:bg-transparent md:hover:text-amber-500 md:p-0 font-normal">Blog</a>
        </li>        
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-amber-300 rounded hover:bg-amber-500 md:hover:bg-transparent md:hover:text-amber-500 md:p-0 font-normal">Contáctenos</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  
    </header>
    <!-- Contenido principal -->
    <main>
        <!-- Slider -->
        <section id="slider-mobiliario-metalico">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden lg:h-[50rem] md:h-[50rem]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_6.gif') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ URL::asset('/images/productos/producto_5.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-800/60 group-hover:bg-neutral-800/90 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-neutral-800/60 group-hover:bg-neutral-800/90 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Siguiente</span>
                    </span>
                </button>
            </div>
        </section>
        <!-- Informacion principal -->
        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-10 text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    @lang('messages.title')
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">
                    @lang('messages.title-desc')</p>

                <div class="container my-24 mx-auto md:px-6">
                    <section class="mb-16 text-center">
                        <div class="grid lg:grid-cols-3 lg:gap-x-12">
                            <div class="mb-12 lg:mb-0">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div
                                            class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Lorem ipsum bla bla bla</h5>
                                        <p>
                                            Laudantium totam quas cumque pariatur at doloremque hic quos
                                            quia eius. Reiciendis optio minus mollitia rerum labore
                                            facilis inventore voluptatem ad, quae quia sint.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-12 lg:mb-0">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div
                                            class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Consectetur magnam ex sequi eum, numquam omnis fugit
                                            molestias autem voluptas blanditiis quas ipsam, sapiente nesciunt possimus
                                            distinctio natus nobis rem deserunt!</h5>
                                        <p>
                                            Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                                            ullam aspernatur odio soluta, quisquam dolore animi mollitia a
                                            omnis praesentium, expedita nobis!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div
                                    class="block h-full rounded-lg bg-white shadow-[0_2px_15px_10px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex justify-center">
                                        <div
                                            class="-mt-8 inline-block rounded-full bg-white p-4 text-primary shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                class="h-7 w-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h5 class="mb-4 text-lg font-semibold">Lorem ipsum</h5>
                                        <p>
                                            Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                                            ullam beatae hic voluptatibus dolores exercitationem? Facilis
                                            debitis aspernatur amet nisi?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
            </div>
        </section>
        <!-- Productos bg-amber-300
  <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt=""> -->

        <section class="w-10/12 mx-auto h-fit pb-10">
            <h1
                class="text-center text-4xl font-extrabold tracking-tight leading-10 text-gray-900 md:text-5xl lg:text-6xl ">
                Productos
            </h1>




            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-32">
                <div class="grid gap-4">
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">

                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-fit group">
                        <div class="relative overflow-hidden">
                            <img class="h-auto max-w-full object-cover"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg"
                                alt="">
                            <div
                                class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <a href=""
                                    class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                    más</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-fit group">
                            <div class="relative overflow-hidden">
                                <img class="h-auto max-w-full object-cover"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg"
                                    alt="">
                                <div
                                    class="absolute h-full w-full bg-black/60 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href=""
                                        class="bg-amber-400 text-white font-bold py-2 px-5 hover:bg-amber-500 transition-color duration-200">Ver
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
        <!--Jumbotron -->
        <section>

            <section
                class="bg-gray-600 bg-opacity-100 bg-fixed bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1608126841548-dfad1d420a0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80')]  bg-blend-multiply">
                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                        ¡Contáctenos!</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">¿En busca de
                        soluciones personalizadas que superen tus expectativas? Nuestro formulario de contacto es tu
                        puerta de entrada a un mundo de posibilidades. ¡Permítenos ayudarte a alcanzar tus metas y
                        necesidades! </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            ¡Vamos!
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <!--<a href="#"
                            class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                            Learn more
                        </a>-->
                    </div>
                </div>
            </section>

        </section>
    </main>


    <!--    footer -->



    <footer class="bg-neutral-950">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">

                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-amber-300 uppercase dark:text-white">Nosotros</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Historia</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-amber-300 uppercase dark:text-white">Siguenos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">LinkedIn</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-amber-300 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Términos y Condiciones</a>
                            </li>
                            <!--<li>
                                <a href="#" class="hover:underline">Terminos &amp; Condiciones</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href=""
                        class="hover:underline">Ladco Steel S.A.S</a>. Todos los derechos reservados.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" x="0px" y="0px" width="100" height="100"
                            viewBox="0 0 50 50">
                            <path
                                d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z">
                            </path>
                        </svg>
                        <span class="sr-only">TikTok</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">



                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 32 32">
                            <path
                                d="M 7.5 5 C 6.132813 5 5 6.132813 5 7.5 L 5 24.5 C 5 25.867188 6.132813 27 7.5 27 L 24.5 27 C 25.867188 27 27 25.867188 27 24.5 L 27 7.5 C 27 6.132813 25.867188 5 24.5 5 Z M 7.5 7 L 24.5 7 C 24.785156 7 25 7.214844 25 7.5 L 25 24.5 C 25 24.785156 24.785156 25 24.5 25 L 7.5 25 C 7.214844 25 7 24.785156 7 24.5 L 7 7.5 C 7 7.214844 7.214844 7 7.5 7 Z M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 Z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 Z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 Z">
                            </path>
                        </svg>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                    <!--
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">

                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble</span>
                    </a>
                    -->
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>
