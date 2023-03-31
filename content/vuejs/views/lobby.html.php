<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Notre catalogue<br>Films et séries</h1>
<div class="bg-bg-cine-mobile md:bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
    <div class="lobby-container" id="vue-app">

      <div @click="cancelSearch" class="bg-primary bg-blend-hard-light bg-opacity-80 p-5 font-impact text-2xl text-secondary uppercase flex flex-row">
        <h5 >Annuler la recherche</h5>
        <i class="fas fa-times"></i>
      </div>


      <ul>
        <li v-on:click="searchInput('name')" class="bg-primary bg-blend-hard-light bg-opacity-80 p-5 font-impact text-2xl text-secondary uppercase flex flex-row">
          <i class="fas fa-search"></i>
          <label class="">Effectuer une recherche</label>
          <input v-if="inputType == 'name'" v-model="searchKey" type="search" class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Chercher un film ou une série" required>
        </li>
        <li v-on:click="searchInput('genre')" class="bg-primary bg-blend-hard-light bg-opacity-80 p-5 font-impact text-2xl text-secondary uppercase flex flex-row">
          <i class="fa-solid fa-filter"></i>
          <label class="">Filtrer par genre</label>
          <select v-show="inputType == 'genre'" v-model="genreSelected">
            <option value="" selected disabled>Choisissez un genre</option>
            <option v-for="option in genreOption" :value="option.id">{{option.name}}</option>
          </select>
        </li>
        <li v-on:click="searchInput('annee')" class="bg-primary bg-blend-hard-light bg-opacity-80 p-5 font-impact text-2xl text-secondary uppercase flex flex-row">
          <i class="fa-solid fa-sort"></i>
          <div id="sort-bar">
            <select name="sortBy" id="select" v-model="sortBy">
              <option value="alphabetical" class="">Trier par ordre alphabétique</option>
              <option value="chronological" class="">Trier par ordre chronologique</option>
            </select>
            <button v-on:click="ascending = !ascending" class="sort-button">
              <i v-if="ascending" class="fa fa-sort-up"></i>
              <i v-else class="fa fa-sort-down"></i>
            </button>
          </div>
        </li>
      </ul>

      <!-- <div class="w-4/5 mx-auto">
          <h2 class="font-impact md:pt-[20px] md:pb-[40px] text-3xl text-secondary uppercase">Rechercher un film ou une série</h2> 
          <form class="flex items-center mt-5 md:mt-0 md:pb-[40px]">   
              <div class="relative w-full">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-1 pointer-events-none">
                      <svg aria-hidden="true" class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input v-model="searchKey" type="search" class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Chercher un film ou une série" required>
              </div>
          </form>
      </div> -->

      <!-- <div class="w-4/5 mx-auto flex justify-between">

          <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
              <button type="button" class="font-impact text-2xl text-secondary uppercase">Voir tout notre catalogue</button>
          </div>

          <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
              <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="click" class="font-impact text-2xl text-secondary uppercase" type="button">Trier par <svg class="w-8 h-8 ml-2 inline" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
              <!-- Dropdown menu -->
              <!-- <div id="dropdownHover" class="z-10 hidden divide-y">
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
          </div> -->

          <!-- <div class="bg-primary bg-blend-hard-light bg-opacity-80 p-5">
              <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="click" class="font-impact text-2xl text-secondary uppercase" type="button">Affiner par <svg class="w-8 h-8 ml-2 inline" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
              <!-- Dropdown menu -->
              <!-- <div id="dropdownHover" class="z-10 hidden divide-y">
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
    </div> -->

      <h4 v-if="inputType == ''" class="font-impact text-secondary text-5xl pb-5 text-center mt-5 pt-5">Liste des films :</h4>

      <div v-if="search.length == 0" class="font-impact text-secondary pb-5 text-center pt-5">
        <h4 class="text-5xl pt-5">Désolé</h4>
        <h5 class="text-4xl pt-3">Aucun résultat trouvé</h5>
      </div>
      <h4 v-if="searchKey && search.length >= 1" class="font-impact text-secondary text-5xl pb-5 text-center">{{search.length}} résultat<span v-if="search.length >=2">s<span></h4>




      <!-- CARD FILM -->

      <div class="list-container">
        <div v-for="film, id in filteredFilms" :key="id" class="film-list">
          <div class="film-card w-4/5 mx-auto md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
            <div class="text-right mb-5">
                <div class="like-container">
                  <label v-bind:for="film.id_film" class="">
                    <input type="checkbox" name="checkbox" v-bind:id="film.id_film" :value=film.id_film v-model="liked" @click="setLikeCookie()" class="hidden peer vuemodelliked">
                    <i class="fas fa-heart mr-3 text-3xl duration-75 cursor-pointer hover:scale-125 hover:text-hearthover peer-checked:text-heartchecked"></i>
                  </label>
                </div>

              <i class="fa-regular fa-star mr-3" style="color: yellow; font-size: 25px;"></i>
              <i @click="removeItem(id)" class="fas fa-times text-primary"></i>
            </div>
            <a href="/metromax/content/pages/film.php" class="">
                <div class="flex justify-between mb-5 pb-5">
                  <img :src="getImgUrl(film.affiche_film)" width="300px" class="mr-5" alt="affiche du film">
                  <div class="">
                    <h4 class="font-impact text-secondary text-3xl pb-5">{{film.titre_film}}</h4>
                    <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : {{film.annee_film}}</h5>
                    <h5 class="font-impact text-primary text-2xl pb-5">Genre : {{film.genre_film}}</h5>
                    <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
                    <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller, Jennifer Connelly, Jon Hamm</h5>
                    <p class="font-impact text-primary text-2xl">{{film.resume_film}}</p>
                  </div>
                </div>
            </a>

                  

            <!-- Modal toggle -->
            <button v-bind:data-modal-target="film.titre_film" v-bind:data-modal-toggle="film.titre_film" class="block mx-auto text-third bg-secondary hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
              Voir la bande-annonce de {{film.titre_film}}
            </button>

            <!-- Main modal -->
            <div :id="film.titre_film" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-2xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative">
                      <iframe class="mx-auto" width="941" height="539" :src="getBandeAnnonceUrl(film.url_ba_film)" :title="getTitre(film.titre_film)" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>