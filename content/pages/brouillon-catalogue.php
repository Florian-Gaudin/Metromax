<div id="app">

<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Notre catalogue<br>Films et séries</h1>
<div class="bg-bg-cine-mobile md:bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
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


<a href="/metromax/content/pages/film.php" class="w-4/5 mx-auto flex flex-col md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
    <img src="/metromax/assets/img/oscars3.jpg" alt="">
    <div class="flex flex-col justify-center px-5">
        <div class="flex justify-between">
            <h4 class="font-impact text-secondary text-3xl pb-5">Top Gun : Maverick</h4>
            <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : 2022</h5>
            <div>
                <i class="fa-regular fa-heart" style="color: red; font-size: 25px;"></i>
                <i class="fa-regular fa-star" style="color: yellow; font-size: 25px;"></i>
            </div>
        </div>
        <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
        <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller,  Jennifer Connelly, Jon Hamm</h5>
        <p class="font-impact text-primary text-2xl">Top Gun : Maverick est un film d'action américain réalisé par Joseph Kosinski, sorti en 2022. Il s’agit de la suite du film Top Gun de Tony Scott, sorti en 1986, dont l'action se déroulait principalement à Topgun, l'école de formation au combat aérien de la marine américaine. Il est présenté en avant-première au CinemaCon avant une présentation hors compétition au festival de Cannes 2022.</p>
    </div>
</a>

<div class="w-4/5 mx-auto flex flex-col md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
    <img src="/metromax/assets/img/oscars3.jpg" alt="">
    <div class="flex flex-col justify-center px-5">
        <div class="flex justify-between">
            <h4 class="font-impact text-secondary text-3xl pb-5">Top Gun : Maverick</h4>
            <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : 2022</h5>
            <div>
                <i class="fa-regular fa-heart" style="color: red; font-size: 25px;"></i>
                <i class="fa-regular fa-star" style="color: yellow; font-size: 25px;"></i>
            </div>
        </div>
        <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
        <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller,  Jennifer Connelly, Jon Hamm</h5>
        <p class="font-impact text-primary text-2xl">Top Gun : Maverick est un film d'action américain réalisé par Joseph Kosinski, sorti en 2022. Il s’agit de la suite du film Top Gun de Tony Scott, sorti en 1986, dont l'action se déroulait principalement à Topgun, l'école de formation au combat aérien de la marine américaine. Il est présenté en avant-première au CinemaCon avant une présentation hors compétition au festival de Cannes 2022.</p>
    </div>
</div>

<div class="w-4/5 mx-auto flex flex-col md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
    <img src="/metromax/assets/img/oscars3.jpg" alt="">
    <div class="flex flex-col justify-center px-5">
        <div class="flex justify-between">
            <h4 class="font-impact text-secondary text-3xl pb-5">Top Gun : Maverick</h4>
            <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : 2022</h5>
            <div>
                <i class="fa-regular fa-heart" style="color: red; font-size: 25px;"></i>
                <i class="fa-regular fa-star" style="color: yellow; font-size: 25px;"></i>
            </div>
        </div>
        <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
        <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller,  Jennifer Connelly, Jon Hamm</h5>
        <p class="font-impact text-primary text-2xl">Top Gun : Maverick est un film d'action américain réalisé par Joseph Kosinski, sorti en 2022. Il s’agit de la suite du film Top Gun de Tony Scott, sorti en 1986, dont l'action se déroulait principalement à Topgun, l'école de formation au combat aérien de la marine américaine. Il est présenté en avant-première au CinemaCon avant une présentation hors compétition au festival de Cannes 2022.</p>
    </div>
</div>


<nav aria-label="Page navigation example">
    <ul class="flex justify-center items-center -space-x-px pt-5 font-impact">
        <li>
            <button type="button" class="h-full px-4 cursor-pointer group focus:outline-none">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                    <svg aria-hidden="true" class="w-5 h-5 text-third hover:text-secondary sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
        </li>
        <li>
            <button type="button" class="h-full px-5 cursor-pointer group focus:outline-none">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                    1
                </span>
            </button>
        </li>
        <li>
            <button type="button" class="h-full px-5 cursor-pointer group focus:outline-none">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                    2
                </span>
            </button>
        </li>
        <li>
            <button type="button" class="h-full px-5 cursor-pointer group focus:outline-none">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                    3
                </span>
            </button>
        </li>
        <li>
            <button type="button" class="h-full px-5 cursor-pointer group focus:outline-none">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                    4
                </span>
            </button>
        </li>
        <li>
        <button type="button" class="h-full px-4 cursor-pointer group focus:outline-none">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-secondary text-third hover:bg-third hover:text-secondary">
                <svg aria-hidden="true" class="w-5 h-5 text-third hover:text-secondary sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
        </li>
    </ul>
</nav>
</div>

</div>