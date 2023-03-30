


<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Notre catalogue<br>Films et séries</h1>
<div class="bg-bg-cine-mobile md:bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
    <div class="lobby-container" id="vue-app">
      <div class="w-4/5 mx-auto">
          <h2 class="font-impact md:pt-[20px] md:pb-[40px] text-3xl text-secondary uppercase">Rechercher un film ou une série</h2> 
          <form class="flex items-center mt-5 md:mt-0 md:pb-[40px]">   
              <div class="relative w-full">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-1 pointer-events-none">
                      <svg aria-hidden="true" class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input v-model="searchKey" type="search" class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Chercher un film ou une série" required>
              </div>
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
      <h4 v-if="search.length == 0" class="font-impact text-secondary text-5xl pb-5 text-center">Aucun résultat</h4>



      <!-- CARD FILM -->


      <div class="list-container">
        <div v-for="film, id in search" :key="id" class="film-list">
          <div class="film-card w-4/5 mx-auto md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
            <div class="text-right">
              <i class="fa-regular fa-heart" style="color: red; font-size: 25px;"></i>
              <i class="fa-regular fa-star" style="color: yellow; font-size: 25px;"></i>
              <i @click="removeItem(id)" class="fas fa-times text-primary"></i>
            </div>
            <a href="/metromax/content/pages/film.php" class="">
                <div class="flex justify-between mb-5 pb-5">
                  <img :src="getImgUrl(film.affiche_film)" width="300px" class="mr-5" alt="affiche du film">
                  <div class="">
                    <h4 class="font-impact text-secondary text-3xl pb-5">{{film.titre_film}}</h4>
                    <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : {{film.annee_film}}</h5>
                    <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
                    <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller, Jennifer Connelly, Jon Hamm</h5>
                    <p class="font-impact text-primary text-2xl">{{film.resume_film}}</p>
                  </div>
                </div>
            </a>
            <iframe class="mx-auto" width="941" height="539" :src="getBandeAnnonceUrl(film.url_ba_film)" title="Bande annonce - ' . $row['titre_film'] . '" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
</div>