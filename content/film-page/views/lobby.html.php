
<div class="bg-bg-cine-mobile md:bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
    <div class="lobby-container" id="vue-film">

      <!-- CARD FILM TEMPLATE -->
      <article class="list-container">
        <div v-for="film, id in filteredFilms" :key="id" class="film-list">
        <h1 class="font-bungee py-5 text-5xl pt-[150px] md:pt-[100px] lg:pt-[80px] text-primary text-center bg-bg2">Votre film :<br></h1>
          <div class="film-card w-4/5 mx-auto md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
            <h2 class="font-bungee py-5 text-4xl text-primary text-center bg-bg2">{{film.titre_film}}</h2>
            <div class="text-right mb-5">
                  <!-- <label v-bind:for="film.id_film" class="">
                    <input type="checkbox" name="checkbox" v-bind:id="film.id_film" :value=film.id_film v-model="liked" @click="setLikeCookie()" class="hidden peer vuemodelliked">
                    <i class="fas fa-heart mr-3 text-3xl duration-75 cursor-pointer hover:scale-125 hover:text-hearthover peer-checked:text-heartchecked"></i>
                    <p class="text-primary">Ajouter aux favoris</p>
                  </label> -->
            </div>
            <iframe class="mx-auto mb-10" width="941" height="539" :src="getBandeAnnonceUrl(film.url_ba_film)" :title="getTitre(film.titre_film)" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="flex pb-5">
              <img :src="getImgUrl(film.affiche_film)" width="300px" class="mr-5" alt="affiche du film">
              <div class="">
                <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : {{film.annee_film}}</h5>
                <h5 class="font-impact text-primary text-2xl pb-5">Genre : {{film.genre_film}}</h5>
                <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
                <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller, Jennifer Connelly, Jon Hamm</h5>
                <p class="font-impact text-primary text-2xl pb-5 mb-5">{{film.resume_film}}</p>
              </div>
            </div>

            			<!-- AVIS ET COMMENTAIRES -->
			<section class="filtres">
				<h3 class="font-bungee text-center text-primary text-4xl py-5 bg-bg2 mt-10 mb-5">Ajouter un avis</h3>
				<form class="formulaire-avis">
					<input class="hidden" type="number" name="piece-id" :value="film.id_film">
					<span class="font-impact text-secondary text-2xl pb-5">Votre pseudo :</span>
					<input class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" type="text" name="utilisateur" placeholder="<?= $_SESSION['pseudo_user']?>" value="<?= $_SESSION['pseudo_user']?>"><br>
					<span class="font-impact text-secondary text-2xl pb-5">Rédiger votre avis sur le film :</span>
					<textarea class="h-32 resize-none bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4" placeholder="Votre commentaire..." name="commentaire" required></textarea><br>
					<span class="font-impact text-secondary text-2xl pb-5 pr-5 mr-10">Noter le film de 1 à 5 :</span>
          <div class="star-rating ml-10">
            <input class="border-white focus:ring-transparent focus:ring-offset-0" type="radio" name="nbEtoiles" id="nbEtoiles5" value="5"/>
            <input class="border-white focus:ring-transparent focus:ring-offset-0" type="radio" name="nbEtoiles" id="nbEtoiles4" value="4"/>
            <input class="border-white focus:ring-transparent focus:ring-offset-0" type="radio" name="nbEtoiles" id="nbEtoiles3" value="3" checked/>
            <input class="border-white focus:ring-transparent focus:ring-offset-0" type="radio" name="nbEtoiles" id="nbEtoiles2" value="2"/>
            <input class="border-white focus:ring-transparent focus:ring-offset-0" type="radio" name="nbEtoiles" id="nbEtoiles1" value="1"/>
            <!-- <input class="border-white focus:ring-transparent focus:ring-offset-0 star0" type="radio" name="nbEtoiles" id="nbEtoiles star0" value="0"/> -->
          </div>
					<button class="block mx-auto mt-5 text-third uppercase bg-secondary hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-2.5 text-center" type="submit">Envoyer votre avis</button>
				</form>

				<!-- utilisation de la librairie CHART.JS graphiques -->
				<h3 class="font-bungee text-center text-primary text-4xl py-5 bg-bg2 mt-10 mb-5">Tous les avis et commentaires</h3>
        <div class="flex flex-col items-center">
          <div class="w-1/2">
            <canvas class="font-impact text-2xl text-primary" id="graphique-avis"></canvas>
          </div>
          <section class="commentaires w1/2"></section>
        </div>
				
			</section>
      <!-- Fin de la section Avis et commentaires -->


          </div>
        </div>
      </article>
      <!-- FIN CARD FILM TEMPLATE -->

    </div>
</div>