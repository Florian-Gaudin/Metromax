const vue = new Vue({
  data: () => {
    return {
      films: [],
      genreList: [],
      inputType: "",
      searchKey: "",
      genreOption: [],
      genreSelected: "",
      ascending: true,
      sortBy: "alphabetical",
      liked: [],
    };
  },
  computed: {
    search() {
      return this.films.filter((film) => {
        return (
          film.titre_film
            .toLowerCase()
            .includes(this.searchKey.toLowerCase()) &&
          film.genre_film
            .toLowerCase()
            .includes(this.genreSelected.toLowerCase())
        );
      });
    },

    filteredFilms() {
      // Sort by alphabetical order
      this.search.sort((a, b) => {
        if (this.sortBy == "alphabetical") {
          let fa = a.titre_film.toLowerCase(),
            fb = b.titre_film.toLowerCase();

          if (fa < fb) {
            return -1;
          }
          if (fa > fb) {
            return 1;
          }
          return 0;

          // Sort by year
        } else if (this.sortBy == "chronological") {
          return a.annee_film - b.annee_film;
        }
      });

      // Show sorted array in descending or ascending order
      if (!this.ascending) {
        this.search.reverse();
      }

      return this.search;
    },
  },
  getLikeCookie() {
    let cookieValue = JSON.parse($cookies.get('like'));
    cookieValue == null ? this.liked = [] : this.liked = cookieValue
  },
  methods: {
    getImgUrl(pic) {
      return "/metromax/assets/img/" + pic;
    },
    getBandeAnnonceUrl(url) {
      return url;
    },
    getTitre(titre) {
      return "Bande-annonce " + titre;
    },
    searchInput(arg) {
      this.inputType = arg;
    },
    removeItem(id) {
      this.$delete(this.films, id);
    },
    cancelSearch() {
      this.searchKey = "";
      this.genreSelected = "";
      this.anneeSelected = "";
    },
    setLikeCookie() {
      document.addEventListener('input', () => {
        setTimeout(() => {
        $cookies.set('like', JSON.stringify(this.liked))}, 600);
      })
    },
  },
  mounted() {
    this.getLikeCookie;
    axios
      .get("../../content/vuejs/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => {
        this.films = res;
      })
      .then(() => {
        for (let i = 0; i <= this.films.length; i++) {
          if (!this.genreList.includes(this.films[i].genre_film)) {
            this.genreList.push(this.films[i].genre_film);
          }
        }
      });

    setTimeout(() => {
      let arr = this.genreList.sort();
      for (let i = 0; i < arr.length; i++) {
        this.genreOption.push({
          name: arr[i],
          id: arr[i],
        });
      }
    }, 500);
  },
}).$mount("#vue-app");
