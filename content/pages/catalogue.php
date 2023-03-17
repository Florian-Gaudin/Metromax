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
    <link rel="stylesheet" href="/metromax/assets/styles/reset.css">
    <link rel="stylesheet" href="/metromax/assets/styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                primary:'#F2F3EA',
                bg1:'#000000',
                bg2:'#252A30',
                secondary:'#E5941A',
                third :'#2C5C59',
                card : '#d9d9d9',
            },
            fontFamily: {
                'bungee': ['"Bungee Shade"', 'cursive'],
                'impact': ['"Impact"', 'Haettenschweiler', 'Arial Narrow Bold', 'sans-serif'],
            },
            fontSize: {
                sm: '0.875rem',
                base: '1rem',
                xl: '1.125rem',
                '2xl': '1.25rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
                '5xl': '3.052rem',
                },
            backgroundImage: {
                'bg-cine': "url('/metromax/assets/img/cinema_home.jpg')",
            }
            }
        }
        }
    </script>

</head>
<body>
    <?php
    require_once("../include/navbar.php");

    // if (isset($_SESSION['message'])) {
    //     echo $_SESSION['message'];
    // }
    // if (isset($_SESSION['message'])) {
    //     echo $_SESSION['gestion_admin'] . '<br>';
    // }
?>

<h1 class="font-bungee py-5 text-5xl text-primary text-center bg-bg2">Notre catalogue<br>Films et séries</h1>
<div class="bg-bg-cine bg-[center_left_62rem] md:bg-[left_0rem] md:bg-cover py-20">
    <div class="w-4/5 mx-auto">
        <h2 class="font-impact md:pt-[130px] md:pb-[40px] text-3xl text-secondary uppercase">Rechercher un film ou une série</h2> 
        <form class="flex items-center mt-5 md:mt-0 md:pb-[40px]">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-1 pointer-events-none">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="simple-search" class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Chercher un film ou une série" required>
            </div>
            <button type="submit" class="p-3 ml-3 text-sm font-medium text-third bg-orange-400 rounded-lg border border-blue-700 hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    <div class="w-4/5 mx-auto flex justify-between">
    
        <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
            <button type="button" class="font-impact text-2xl text-secondary uppercase">Voir tout notre catalogue</button>
        </div>
    
        <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="click" class="font-impact text-2xl text-secondary uppercase" type="button">Trier par <svg class="w-8 h-8 ml-2 inline" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden divide-y">
                <ul class="py-2 text-sm text-secondary bg-primary bg-blend-hard-light bg-opacity-80 p-5" aria-labelledby="dropdownHoverButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                </li>
                </ul>
            </div>
        </div>

        <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="click" class="font-impact text-2xl text-secondary uppercase" type="button">Affiner par <svg class="w-8 h-8 ml-2 inline" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden divide-y">
                <ul class="py-2 text-sm text-secondary bg-primary bg-blend-hard-light bg-opacity-80 p-5" aria-labelledby="dropdownHoverButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                </li>
                </ul>
            </div>
        </div>

    </div>

    <h3 class="w-4/5 mx-auto font-impact md:pt-[140px] md:pb-5 text-2xl text-primary uppercase">Résultat(s) de votre recherche :</h3>
</div>

<?php
    require_once("../include/footer.php");
    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>