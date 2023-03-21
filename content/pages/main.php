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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./content/src/carousel.js" defer></script>
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
                'bg-cine': "url('./assets/img/cinema-bg2.jpg')",
                'bg-cine-mobile': "url('./assets/img/cinema_home.jpg')",
            }
            }
        }
        }
    </script>
</head>
<body>

<!--  OFFRES MAIN CTA  -->
<header class="bg-bg2">

    <h1 class="font-bungee py-5 pt-[200px] md:pt-[300px] lg:pt-[120px] text-5xl text-primary text-center">Découvrez nos offres</h1>
    <div class="bg-bg-cine-mobile md:bg-bg-cine bg-[center_left_62rem] md:bg-[left_5rem] md:bg-[bottom-8rem] bg-fixed md:bg-cover">

        <div class="flex flex-col md:flex-row justify-around">
            <!-- CARD 1 -->
            <div class="mx-5 my-[100px] md:mx-0 md:w-full md:max-w-sm p-4 mt-5 bg-card bg-blend-hard-light bg-opacity-80 border border-gray-200 rounded-lg shadow sm:p-8 font-impact font-medium uppercase">
                <div class="mix-blend-normal">
                    <h5 class="mb-4 text-3xl md:text-4xl text-center text-secondary opacity-100">L'offre <br> à la carte</h5>
                    <h4 class ="text-bg1 text-center text-2xl md:text-3xl mb-10">Payez ce que vous regardez</h4>
                    <!-- List -->
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Accès à <span class="text-secondary">+ de 10000 films</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Toutes les <span class="text-secondary">nouveautés</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Streaming et mode <span class="text-secondary">déconnecté</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Achat & location <span class="text-secondary">à l'unité</span></span>
                        </li>
                    </ul>
                    <div class="flex justify-center">
                        <a href="/metromax/content/pages/catalogue.php" class="w-9/12 text-primary font-medium rounded-lg bg-secondary text-lg px-3 md:px-5 py-2.5 w-full text-center uppercase">Accéder au catalogue</a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="mx-5 my-[100px] md:mx-0 md:w-full md:max-w-sm p-4 mt-5 bg-card bg-blend-hard-light bg-opacity-80 border border-gray-200 rounded-lg shadow sm:p-8 font-impact font-medium uppercase">
                <div class="mix-blend-normal">
                    <h5 class="mb-4 text-3xl md:text-4xl text-center text-third opacity-100">L'offre <br> d'abonnement</h5>
                    <h4 class ="text-bg1 text-center text-2xl md:text-3xl mb-10">à partir de 6€99/mois</h4>
                    <!-- List -->
                    <ul role="list" class="space-y-5 my-7">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-third" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2"> <span class="text-third">Sans engagement</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-third" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">+ de 1000 films <span class="text-third">en illimité</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-third" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Accès au <span class="text-third">catalogue "à la carte"</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-third" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2">Streaming et mode <span class="text-third">déconnecté</span></span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-third" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base leading-tight text-bg1 text-xl md:text-2xl mb-2"><span class="text-third">3 écrans </span>en simultané</span>
                        </li>
                    </ul>
                    <div class="flex justify-center">
                        <button type="button" class="w-9/12 text-primary font-medium rounded-lg bg-third text-lg px-3 md:px-5 py-2.5 w-full text-center uppercase">Essayer gratuitement</button>
                    </div>
                </div>
            </div>
        </div>
   
        <!--  CAROUSEL  -->
        <section class="bg-bg2 bg-opacity-80 md:pt-[10px] md:pb-[70px]">
            <div class="">
                <h2 class="font-bungee py-5 text-4xl text-primary text-center">Nos films et séries du moment</h2>
            </div>
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 6 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./assets/img/slider6.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6" data-carousel-slide-to="5"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary group-hover:bg-third group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-third hover:text-secondary sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary group-hover:bg-third group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-third hover:text-secondary sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>

        <section class="bg-bg1 bg-opacity-80 pt-[10px] pb-[50px] ">
            <div class="">
                <h2 class="font-bungee py-5 text-4xl text-primary text-center">Nos sélections</h2>
            </div>

        <!--  Slider 1 : Nos packs séries et films -->
        <h3 class="font-impact md:py-5 text-2xl text-secondary text-center md:text-left md:pl-[100px] uppercase">Nos packs séries et films</h3>
        <div class="flex items-center justify-center w-full h-full py-5 md:pt-2 sm:py-8 px-4">
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 cursor-pointer" id="prev">
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <div class="w-4/5 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="sliders" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie1.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie2.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie3.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie4.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie5.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie6.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie7.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie8.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie9.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie10.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie11.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie12.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie13.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie14.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="./assets/img/serie15.jpg" alt="sitting area" class="object-cover object-center w-full" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-2">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <button aria-label="slide forward" class="absolute z-30 right-0 mr-10" id="next">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>

        <!--  Slider 2 : Vos favoris -->
        <h3 class="font-impact md:py-5 text-2xl text-secondary text-center md:text-left md:pl-[100px] uppercase">Vos favoris</h3>
        <div class="flex items-center justify-center w-full h-full py-5 md:pt-2 sm:py-8 px-4">
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 cursor-pointer" id="prev2">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <div class="w-4/5 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                        <div id="sliders2" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top1.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top2.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top3.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top4.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top5.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top6.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top7.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top8.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top9.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/top10.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button aria-label="slide forward" class="absolute z-30 right-0 mr-10" id="next2">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next2</span>
                        </span>
                    </button>
                </div>
            </div>

            
        <!--  Slider 3 : Sélection Oscars 2023 -->
        <h3 class="font-impact md:py-5 text-2xl text-secondary text-center md:text-left md:pl-[100px] uppercase">Les films nominés et gagnants aux Oscars 2023</h3>
        <div class="flex items-center justify-center w-full h-full py-5 md:pt-2 sm:py-8 px-4">
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 cursor-pointer" id="prev3">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <div class="w-4/5 h-full mx-auto overflow-x-hidden overflow-y-hidden">
                        <div id="sliders3" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars1.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars2.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars3.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars4.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars5.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars6.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars7.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars8.jpg" alt="sitting area" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="./assets/img/oscars9.jpg" alt="black chair and white table" class="object-cover object-center w-full" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">Catalog 2</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button aria-label="slide forward" class="absolute z-30 right-0 mr-10" id="next3">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-third hover:bg-secondary group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-secondary hover:text-third sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next3</span>
                        </span>
                    </button>
                </div>
            </div>


    </section>

</div>


</header>

</body>
</html>