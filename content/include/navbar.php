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
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<header class="bg-white">

<!-- : version mobile first / version desktop gérée par l'ajout de "md:" -->

  <nav class="bg-bg1 items-center p-6 md:p-0 w-full" aria-label="Global">
  <div class="flex flex-row-reverse md:flex-row flex-wrap items-center justify-around md:justify-between ">
    <div class="flex items-center">
        <a href="#" class="-m-1.5 p-1.5 flex flex-row items-center">
            <span class="sr-only">Metro Max</span>
            <img class="h-20 w-auto" src="./assets/img/logo_simple.png" alt="logo metromax">
            <h1 class="font-bungee text-primary text-4xl">Metro Max</h1>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="items-center justify-center ml-3 text-primary rounded-lg md:hidden w-10 h-10 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-10 h-10 text-primary" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-10 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
    <!-- bouton dropdown -->
                <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar" data-dropdown-trigger="hover" class="rounded-lg py-5 md:py-2 px-10 text-primary flex flex-col md:flex-row items-center gap-x-1 text-xl leading-6 font-impact uppercase hover:bg-secondary hover:text-third" aria-controls="disclosure-1" aria-expanded="false">Catégories
                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
                </button>

    <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-5 md:py-2 text-sm bg-bg1 rounded-lg" aria-labelledby="dropdownNavbarButton">
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
                <!-- bouton se connecter / s'inscrire version mobile -->
                <div class="flex flex-col items-center md:hidden">
                <a href="#" class=""><img class="h-15 w-auto" src="./assets/img/login.png" alt="login image"></a>
                <a href="#" class="-mx-3 rounded-lg py-5 px-3 text-base leading-7 text-primary font-impact uppercase">Se connecter / S'inscrire</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- searchbar -->
    <form class="flex items-center mt-5 md:mt-0">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-1 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="bg-primary border border-gray-300 text-bg1 text-impact text-sm placeholder:text-impact placeholder:text-bg1 placeholder:text-bold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 p-1" placeholder="Chercher un film" required>
    </div>
    <button type="submit" class="p-1 ml-2 text-sm font-medium text-third bg-orange-400 rounded-lg border border-blue-700 hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
</form>

    <!-- bouton se connecter / s'inscrire version tablette/desktop -->
    <div class="hidden md:flex flex-col items-center mr-3">
            <a href="#" class=""><img class="h-16 w-auto" src="./assets/img/login.png" alt="login image"></a>
            <a href="#" class="-mx-3 rounded-lg px-3 text-base leading-7 text-primary font-impact uppercase">Se connecter / S'inscrire</a>
    </div>
  </div>
</nav>
</header>
   

</body>
</html>