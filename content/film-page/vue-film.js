const vue = new Vue({
  data: () => {
    return {
      films: [],
      inputType: "",
      liked: [],
    };
  },
  computed: {
    getLikeCookie() {
      let cookieValue = $cookies.get('like');
      cookieValue == null ? this.liked = [] : this.liked = cookieValue
      },

    filteredFilms() {
      return this.films.filter((film) => {
        // récupération de l'id dans l'url
        const queryString_url_id = window.location.search;
        const urlSearchParams = new URLSearchParams(queryString_url_id);
        const idFilm = urlSearchParams.get("idFilm");
        return (
          film.id_film === idFilm
        );
      });
    },

  },

  methods: {
    getImgUrl(pic) {
      return "/metromax/assets/img/" + pic;
    },
    getBandeAnnonceUrl(url) {
      return url;
    },
    getUrlFilm(url) {
      return "/metromax/content/pages/film.php?idFilm=" + url;
    },
    getTitre(titre) {
      return "Bande-annonce " + titre;
    },
    setLikeCookie() {
      document.addEventListener('input', (e) => {
        if (e.target.classList.contains('vuemodelliked')) {
        setTimeout(() => {
        $cookies.set('like', this.liked)}, 600);
      }})
    },
  },
  mounted() {
    axios
      .get("../../content/film-page/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => {
        this.films = res;
      })
      
      setTimeout(() => {
        //récupérer les cookies
        this.getLikeCookie;
      }, 500);
    
  },
}).$mount("#vue-film");