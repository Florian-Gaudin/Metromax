<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Notre catalogue<br>Films et séries</h1>
<div class="bg-bg-cine-mobile md:bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
    <div class="lobby-container" id="vue-app">

      <!-- FILTRES TRIS RECHERCHE -->
      <ul class="flex flex-row justify-around">
        <li v-on:click="searchInput('name')" class="bg-primary bg-blend-hard-light bg-opacity-80 hover:bg-opacity-90 rounded-full p-5 font-impact text-2xl text-secondary uppercase flex items-center cursor-pointer">
          <div class="flex justify-center items-center flex-col-reverse cursor-pointer">
            <i class="fas fa-search mr-3"></i>
            <label class="cursor-pointer">Effectuer une recherche</label>
          </div>
          <input v-if="inputType == 'name'" v-model="searchKey" type="search" class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Chercher un film" required>
        </li>
        <li v-on:click="searchInput('genre')" class="bg-primary bg-blend-hard-light bg-opacity-80 hover:bg-opacity-90 rounded-full p-5 font-impact text-2xl text-secondary uppercase flex items-center cursor-pointer">
          <div class="flex justify-center items-center flex-col-reverse cursor-pointer">
            <i class="fa-solid fa-filter mr-3"></i>
            <label class="cursor-pointer">Filtrer par genre</label>
          </div>
          <select v-show="inputType == 'genre'" v-model="genreSelected" class="bg-primary border border-gray-300 text-bg1 font-impact text-md rounded-lg block w-full pl-12 p-4">
            <option value="" selected disabled>Choisissez un genre</option>
            <option v-for="option in genreOption" :value="option.id">{{option.name}}</option>
          </select>
        </li>
        <li v-on:click="searchInput('annee')" class="bg-primary bg-blend-hard-light bg-opacity-80 hover:bg-opacity-90 rounded-full p-5 font-impact text-2xl text-secondary uppercase flex items-center cursor-pointer">
          <div class="flex justify-center items-center flex-col-reverse cursor-pointer">
              <i class="fa-solid fa-sort mr-3"></i>
              <label class="cursor-pointer">Trier par :</label>
          </div>
          <div id="sort-bar">
            <select v-show="inputType == 'annee'" name="sortBy" id="select" v-model="sortBy" class="bg-primary border border-gray-300 text-bg1 font-impact text-md rounded-lg block w-full pl-12 p-4">
              <option value="alphabetical" class="">Ordre alphabétique</option>
              <option value="chronological" class="">Ordre chronologique</option>
            </select>
            <button v-show="inputType == 'annee'" v-on:click="ascending = !ascending" class="sort-button bg-primary text-bg1 font-impact text-lg rounded-lg block w-full">Inverser l'ordre
              <i v-if="ascending" class="fa fa-sort-up"></i>
              <i v-else class="fa fa-sort-down"></i>
            </button>
          </div>
        </li>
        <li class="bg-primary bg-blend-hard-light bg-opacity-80 hover:bg-opacity-90 rounded-full p-5 font-impact text-2xl text-secondary uppercase flex items-center cursor-pointer">
          <!-- Annulation de la recherche et de tous les filtres -->
          <div @click="cancelSearch" class="flex justify-center items-center flex-col-reverse">
            <i class="fas fa-times"></i>
            <h5 class="mr-4">Annuler la recherche</h5>
          </div>
        </li>
      </ul>

      <!-- Compteur de résultats -->
      <h4 v-if="inputType == ''" class="font-impact text-secondary text-5xl pb-5 text-center mt-5 pt-5">Liste des films :</h4>

      <div v-if="search.length == 0" class="font-impact text-secondary pb-5 text-center pt-5">
        <h4 class="text-5xl pt-5">Désolé</h4>
        <h5 class="text-4xl pt-3">Aucun résultat trouvé</h5>
      </div>
      <h4 v-if="searchKey && search.length >= 1" class="font-impact text-secondary text-5xl pb-5 text-center">{{search.length}} résultat<span v-if="search.length >=2">s<span></h4>




      <!-- CARD FILM TEMPLATE -->
      <article class="list-container">
        <div v-for="film, id in filteredFilms" :key="id" class="film-list">
          <div class="film-card w-4/5 mx-auto md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">

            <div class="flex justify-between text-right mb-5">
              <label v-bind:for="film.id_film" class="flex flex-row text-right">
                <input type="checkbox" name="checkbox" v-bind:id="film.id_film" :value=film.id_film v-model="liked" @click="setLikeCookie()" class="hidden peer vuemodelliked">
                <i class="fas fa-heart mr-3 text-3xl duration-75 cursor-pointer hover:scale-125 hover:text-hearthover peer-checked:text-heartchecked"></i>
                <p class="text-primary">Ajouter aux favoris</p>
              </label>
              <div class="flex flex-row-reverse items-center">
                <i @click="removeItem(id)" class="fas fa-times text-primary"></i>
                <p class="text-primary pr-3">Retirer des résultats</p>
              </div>
            </div>

            <div class="flex pb-5">
              <img :src="getImgUrl(film.affiche_film)" width="300px" class="mr-5" alt="affiche du film">
              <div class="">
                <h4 class="font-impact text-secondary text-3xl pb-5">{{film.titre_film}}</h4>
                <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : <span class="text-xl text-primary">{{film.annee_film}}</span></h5>
                <h5 class="font-impact text-secondary text-2xl pb-5">Genre : <span class="text-xl text-primary">{{film.genre_film}}</span></h5>
                <h5 class="font-impact text-secondary text-2xl pb-5">Réalisateur : <span class="text-xl text-primary">Joseph Kosinski</span></h5>
                <h5 class="font-impact text-secondary text-2xl pb-5">Acteurs : <span class="text-xl text-primary">Tom Cruise, Miles Teller, Jennifer Connelly, Jon Hamm</span></h5>
                <p class="font-impact text-primary text-2xl pb-5 mb-5">{{film.resume_film}}</p>
                <!-- Modal toggle Bande-Annonce du film -->
                <button v-bind:data-modal-target="film.titre_film" v-bind:data-modal-toggle="film.titre_film" class="block mx-auto mt-5 text-third bg-secondary hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                  Voir la bande-annonce de {{film.titre_film}}
                </button>
                <!-- <form action="/metromax/content/film-page/controllers/getData.php" method="GET"></form> -->
                  <a :id="film.id_film" :href="getUrlFilm(film.id_film)" class="fetchFilm w-1/3 block mx-auto mt-5 text-third bg-secondary hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Voir la fiche détaillée</a>
              </div>
            </div>

            <!-- Fenêtre de la modal Bande-Annonce -->
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
      </article>
      <!-- FIN CARD FILM TEMPLATE -->

    </div>
</div>