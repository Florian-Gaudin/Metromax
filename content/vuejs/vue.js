const vue = new Vue({
    data: () => {
      return {
        films: [],
        // countryList: [],
        inputType: "",
        searchKey: "",
    //     countryOption: [],
    //     countrySelected: "",
    //     grapesRadio: [
    //       { name: "Pinot Noir" },
    //       { name: "Sauvignon" },
    //       { name: "Merlot" },
    //       { name: "Chardonnay" },
    //     ],
    //     grapesSelected: "",
      };
    },
    computed: {
      search() {
        return this.films.filter((film) => {
          return (
            film.titre_film.toLowerCase().includes(this.searchKey.toLowerCase())
            // &&
            // film.country
            //   .toLowerCase()
            //   .includes(this.countrySelected.toLowerCase()) &&
            // wine.grapes.toLowerCase().includes(this.grapesSelected.toLowerCase())
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
    //   searchInput(arg) {
    //     this.inputType = arg;
    //   },
      removeItem(id) {
        this.$delete(this.films, id);
      },
    //   cancelSearch() {
    //     this.searchKey = "";
    //     this.countrySelected = "";
    //     this.grapesSelected = "";
    //   },
    },
    mounted() {
      axios
        .get("../../content/vuejs/controllers/getData.php")
        .then((res) => res.data)
        .then((res) => {
          this.films = res;
        })
        // .then(() => {
        //   for (let i = 0; i <= this.films.length; i++) {
        //     if (!this.countryList.includes(this.films[i].country)) {
        //       this.countryList.push(this.films[i].country);
        //     }
        //   }
        // });
  
    //   setTimeout(() => {
    //     let arr = this.countryList.sort();
    //     for (let i = 0; i < arr.length; i++) {
    //       this.countryOption.push({
    //         name: arr[i],
    //         id: arr[i],
    //       });
    //     }
    //   }, 500);
    },
  }).$mount("#vue-app");
  