<!-- <?php

session_start();

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Max</title>
    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<header class="bg-white">

  <!-- <nav class="bg-bg1 mx-auto flex items-center justify-between p-6 lg:px-8" aria-label="Global">
   
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-primary">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">  -->

    <!-- NOUVEAUTES  -->
      <!-- <a href="#" class="rounded-lg py-2 px-3 text-primary flex items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third">Populaires</a>
      <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="rounded-lg py-2 px-3 text-primary flex items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third" type="button">Catégories <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
<!-- Dropdown menu -->
    <!-- <div id="dropdownHover" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-bg1 shadow-lg ring-1 ring-gray-900/5">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
      <li>
        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
            </div>
            <div class="flex-auto">
                <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                  Cinéma
                  <span class="absolute inset-0"></span>
                </a>
            </div>
      </li>
      <li>
        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                </svg>
        </div>
              <div class="flex-auto">
                <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                  Série
                  <span class="absolute inset-0"></span>
                </a>
              </div>
        </div>
      </li>
      <li>
        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                  Jeunesse
                  <span class="absolute inset-0"></span>
                </a>
              </div>
        </div>
      </li>
    </ul>
</div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center">
        <a href="#" class=""><img class="h-20 w-auto" src="./assets/img/login.png" alt="logo metromax"></a>
        <a href="#" class="-mx-3 rounded-lg py-2.5 px-3 text-base leading-7 text-primary font-impact uppercase">Se connecter / S'inscrire</a>
    </div>
  </nav> -->

  <!-- Mobile menu, show/hide based on menu open state. -->
  <!-- <div class="lg:hidden" role="dialog" aria-modal="true"> -->
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <!-- <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-bg1 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Metro Max</span>
          <img class="h-8 w-auto" src="./assets/img/logo_simple.png" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6"> -->
            
<!-- Nouveautés populaires cat&gories -->

            <!-- <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base leading-7 hover:bg-secondary text-primary font-impact uppercase hover:text-third">Populaires</a>
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base leading-7 hover:bg-secondary text-primary font-impact uppercase hover:text-third" aria-controls="disclosure-1" aria-expanded="false">Catégories</button> -->
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <!-- <div class="mt-2 space-y-2" id="disclosure-1">
                

                

                
              </div>
            </div>
          </div>
          <div class="flex-col">
            <a href="#" class="-mx-3 rounded-lg py-2.5 px-3 text-base leading-7 hover:bg-secondary text-primary font-impact uppercase">
            <img class="h-20 w-auto" src="./assets/img/login.png" alt="logo metromax"></a>
            <a href="#" class="-mx-3 rounded-lg py-2.5 px-3 text-base leading-7 hover:bg-secondary text-primary font-impact uppercase">
            Se connecter / S'inscrire</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->


<!-- NOUVELLE NAVBAR -->


  <nav class="bg-bg1 flex items-center justify-between p-6 md:p-0 lg:px-8" aria-label="Global">
  <div class="container flex flex-row-reverse md:flex-row flex-wrap items-center md:justify-between">
    <div class="flex mr-16">
        <a href="#" class="-m-1.5 p-1.5 flex flex-row items-center">
            <span class="sr-only">Metro Max</span>
            <img class="h-20 w-auto" src="./assets/img/logo_simple.png" alt="logo metromax">
            <h1 class="font-bungee text-primary text-4xl">Metro Max</h1>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="items-center justify-center ml-3 text-primary rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 text-primary" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    <div class="hidden w-full md:flex md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium items-center">
            <li>
            <a href="#" class="rounded-lg py-5 md:py-2 px-10 text-primary flex items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third">Nouveautés</a>
            </li>
            <li>
            <a href="#" class="rounded-lg py-5 md:py-2 px-10 text-primary flex items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third">Populaires</a>
            </li>
            <li>
            <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar" data-dropdown-trigger="hover" class="rounded-lg py-5 md:py-2 px-10 text-primary flex flex-col md:flex-row items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third" aria-controls="disclosure-1" aria-expanded="false">Catégories
            <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-5 md:py-2 text-sm bg-bg1" aria-labelledby="dropdownNavbarButton">
                    <li>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                            <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                            Cinéma
                            <span class="absolute inset-0"></span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                            <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                        <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                        Séries
                        <span class="absolute inset-0"></span>
                        </a>
                        </div>
                    </li>
                    <li>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-secondary">
                            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg group-hover:bg-secondary">
                            <svg class="h-6 w-6 text-primary group-hover:text-third" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                            </svg>
                        </div>
                        <div class="flex-auto">
                            <a href="#" class="block text-primary items-center gap-x-1 text-sm leading-6 font-impact uppercase group-hover:text-third">
                            Jeunesse
                            <span class="absolute inset-0"></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            </li>
            <li>
                <div class="flex flex-col items-center md:hidden">
                <a href="#" class=""><img class="h-20 w-auto" src="./assets/img/login.png" alt="logo metromax"></a>
                <a href="#" class="-mx-3 rounded-lg py-5 px-3 text-base leading-7 text-primary font-impact uppercase">Se connecter / S'inscrire</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="hidden md:flex flex-col items-center">
            <a href="#" class=""><img class="h-20 w-auto" src="./assets/img/login.png" alt="logo metromax"></a>
            <a href="#" class="-mx-3 rounded-lg py-2 px-3 text-base leading-7 text-primary font-impact uppercase">Se connecter / S'inscrire</a>
    </div>
  </div>
</nav>
</header>
   

</body>
</html>