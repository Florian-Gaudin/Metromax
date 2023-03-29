const addForm = document.getElementById("add-film-form");
const updateForm = document.getElementById("edit-film-form");
const showAlert = document.getElementById("showAlert");
const addModal = new bootstrap.Modal(
  document.getElementById("addNewFilmModal")
);
const editModal = new bootstrap.Modal(document.getElementById("editFilmModal"));
const tbody = document.querySelector("tbody");

// Add New Film Ajax Request
addForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(addForm);
  formData.append("add", 1);

  if (addForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    addForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("add-film-btn").value = "Please Wait...";

    const data = await fetch("../src/action-film.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();
    showAlert.innerHTML = response;
    document.getElementById("add-film-btn").value = "Add Film";
    addForm.reset();
    addForm.classList.remove("was-validated");
    addModal.hide();
    fetchAllFilms();
  }
});

// Fetch All Films Ajax Request
const fetchAllfilms = async () => {
  const data = await fetch("../src/action-film.php?read=1", {
    method: "GET",
  });
  const response = await data.text();
  tbody.innerHTML = response;
};
fetchAllfilms();

// Edit film Ajax Request
tbody.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.editLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    editFilm(id);
  }
});


const editFilm = async (id) => {
  const data = await fetch(`../src/action-film.php?edit=1&id=${id}`, {
    method: "GET",
  });
  const response = await data.json();
  document.getElementById("id_film").value = response.id_film;  
  document.getElementById("annee_film").value = response.annee_film;
  document.getElementById("titre_film").value = response.titre_film;
  document.getElementById("resume_film").value = response.resume_film;
  document.getElementById("affiche_film").value = response.affiche_film;
  document.getElementById("url_ba_film").value = response.url_ba_film;
  document.getElementById("genre_film").value = response.genre_film;
};

// Update Film Ajax Request
updateForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  console.log(e)

  const formData = new FormData(updateForm);
  formData.append("update", 1);

  if (updateForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    updateForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("edit-film-btn").value = "Please Wait...";

    const data = await fetch("../src/action-film.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();

    showAlert.innerHTML = response;
    document.getElementById("edit-film-btn").value = "Ajouter le film";
    updateForm.reset();
    updateForm.classList.remove("was-validated");
    editModal.hide();
    fetchAllFilms();
  }
});

// Delete Film Ajax Request
tbody.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.deleteLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    deleteFilm(id);
  }
});

const deleteFilm = async (id) => {
  const data = await fetch(`../src/action-film.php?delete=1&id=${id}`, {
    method: "GET",
  });
  const response = await data.text();
  showAlert.innerHTML = response;
  fetchAllFilms();
};
