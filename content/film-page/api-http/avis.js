// Récupération des pièces depuis le fichier JSON
// POUR LANCER L'API DANS LA CONSOLE: cd content/film-page/api-http  puis npm start
const reponse = await fetch('/metromax/content/film-page/api-http/pieces-autos.json');
const pieces = await reponse.json();
genererCommentButton(pieces);
ajoutListenersAvis();
ajoutListenerEnvoyerAvis();

function ajoutListenersAvis() {

    const piecesElements = document.querySelectorAll(".commentaires button");
 
    for (let i = 0; i < piecesElements.length; i++) {
 
     piecesElements[i].addEventListener("click", async function (event) {

		// récupération de l'id du film dans l'url
		const queryString_url_id = window.location.search;
		const urlSearchParams = new URLSearchParams(queryString_url_id);
		const idFilm = urlSearchParams.get("idFilm");

		// Affichage des commentaires correspondants au film 
		const reponse = await fetch("http://localhost:8081/pieces/" + idFilm + "/avis");
		const avis = await reponse.json();
		const pieceElement = event.target.parentElement;

		const avisElement = document.createElement("p");
		for (let i = 0; i < avis.length; i++) {
		avisElement.innerHTML += `
            <div class="flex">
                <p class="mr-3 text-secondary text-2xl">${avis[i].utilisateur}</p>
                <p class="text-xl text-primary">${avis[i].commentaire}</p>
            </div>`;
		}
		pieceElement.appendChild(avisElement);
     });
    }
 }

function genererCommentButton(pieces){

        const article = pieces[1];
        // Récupération de l'élément du DOM qui accueillera le bouton commentaires
        const sectionFiches = document.querySelector(".commentaires");


        const pieceElement = document.createElement("article");
        
        // Création du bouton       
        const avisBouton = document.createElement("button");
        avisBouton.dataset.id = article.id;
        avisBouton.innerHTML += `<span class="block mx-auto my-10 text-third uppercase bg-secondary hover:bg-third hover:text-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-2.5 text-center">Afficher les commentaires des utilisateurs</span>`;
        
        // On rattache la balise article a la section Fiches
        sectionFiches.appendChild(pieceElement);
        
        pieceElement.appendChild(avisBouton);
}

function returnNbEtoiles() {
	let nbEtoilesRadio = '';
	if(document.getElementById('nbEtoiles1').checked){
		nbEtoilesRadio = document.getElementById('nbEtoiles1').value;
	} else if(document.getElementById('nbEtoiles2').checked){
		nbEtoilesRadio = document.getElementById('nbEtoiles2').value;
	} else if(document.getElementById('nbEtoiles3').checked){
		nbEtoilesRadio = document.getElementById('nbEtoiles3').value;
	} else if(document.getElementById('nbEtoiles4').checked){
		nbEtoilesRadio = document.getElementById('nbEtoiles4').value;
	} else {
		nbEtoilesRadio = document.getElementById('nbEtoiles5').value;
	}
	return nbEtoilesRadio;
}

function ajoutListenerEnvoyerAvis() {
	const formulaireAvis = document.querySelector(".formulaire-avis");
	formulaireAvis.addEventListener("submit", function (event) {
		event.preventDefault();
		const nbEtoilesRadio = returnNbEtoiles();
		// Création de l’objet du nouvel avis.
		const avis = {
			pieceId: parseInt(event.target.querySelector("[name=piece-id]").value),
			utilisateur: event.target.querySelector("[name=utilisateur").value,
			commentaire: event.target.querySelector("[name=commentaire]").value,
			nbEtoiles: nbEtoilesRadio
		};
		console.log(avis);
		// Création de la charge utile au format JSON
		const chargeUtile = JSON.stringify(avis);
		// Appel de la fonction fetch avec toutes les informations nécessaires
		fetch("http://localhost:8081/avis", {
			method: "POST",
			headers: { "Content-Type": "application/json" },
			body: chargeUtile
		});
	});
}

async function afficherGraphiqueAvis() {
	// Calcul du nombre total de commentaires par quantité d'étoiles attribuées
	const avis = await fetch("http://localhost:8081/avis").then(avis => avis.json());
	const nb_commentaires = [0, 0, 0, 0, 0];

	for (let commentaire of avis) {
		nb_commentaires[commentaire.nbEtoiles - 1]++;
	}
	// Légende qui s'affichera sur la gauche à côté de la barre horizontale
	const labels = ["5", "4", "3", "2", "1"];
	// Données et personnalisation du graphique
    // Chart.defaults.font.size = 16;
    // Chart.defaults.color = #E5941A;
	const data = {
		labels: labels,
		datasets: [{
			label: "Nombres d'étoiles attribuées par les visiteurs :",
			data: nb_commentaires.reverse(), // le reverse permet de mettre les commentaires à 5 étoiles en haut
			backgroundColor: "rgba(255, 230, 0, 1)", // couleur jaune
		}],
	};
	// Objet de configuration final
	const config = {
		type: "bar",
		data: data,
		options: {
			indexAxis: "y",
		},
	};
	// Rendu du graphique dans l'élément canvas
	new Chart(
		document.querySelector("#graphique-avis"),
		config,
	);
}

await afficherGraphiqueAvis();
