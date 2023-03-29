<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Max - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<a href="/metromax/index.php">Retour page d'accueil</a> <br>
<a href="/metromax/content/pages/gestion_admin.php">Retour page de gestion administrateur</a>

<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Gestion des films du catalogue</h1>

<div class="bg-card text-impact text-bg2 bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">

    <!-- Add New Film Modal Start -->
    <div class="modal fade" tabindex="-1" id="addNewFilmModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gestion des films</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-film-form" action="../src/config.php" method="POST" class="p-2" novalidate>
                        <div class="row mb-3 gx-3">
                            <div class="mb-3">
                                <label for="annee">Ajouter l'année de sortie du film</label>
                                <input type="text" name="annee" class="form-control form-control-lg w-75" placeholder="Ajouter l'année de sortie du film" required>
                                <div class="invalid-feedback">Ajouter l'année de sortie du film</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="titre">Ajouter le titre du film</label>
                                <input type="text" name="titre" class="form-control form-control-lg w-75" placeholder="Ajouter le titre du film" required>
                                <div class="invalid-feedback">Ajouter le titre du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="resume">Ajouter le résumé du film</label>
                                <input type="text" name="resume" class="form-control form-control-lg w-75" placeholder="Ajouter le résumé du film" required>
                                <div class="invalid-feedback">Ajouter le résumé du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="affiche">Ajouter l'url vers l'affiche du film</label>
                                <input type="text" name="affiche" class="form-control form-control-lg w-75" placeholder="Ajouter l'url vers l'affiche du film" required>
                                <div class="invalid-feedback">Ajouter l'url vers l'affiche du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="url_ba_film">Ajouter l'url vers la bande-annonce du film</label>
                                <input type="text" name="url_ba_film" class="form-control form-control-lg w-75" placeholder="Ajouter l'url vers la bande-annonce du film" required>
                                <div class="invalid-feedback">Ajouter l'url vers la bande-annonce du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="genre">Ajouter le genre du film</label>
                                <input type="text" name="genre" class="form-control form-control-lg w-75" placeholder="Ajouter le genre du film" required>
                                <div class="invalid-feedback">Ajouter le genre du film</div>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Ajouter le film" class="btn btn-primary btn-block btn-lg w-75" id="add-film-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New Film Modal End -->

    <!-- Edit Film Modal Start -->
    <div class="modal fade" tabindex="-1" id="editFilmModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editer le film</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-film-form" action="../src/config.php" class="p-2" novalidate>
                        <input type="hidden" name="id_film" id="id_film">
                        <div class="row mb-3 gx-3">
                            <div class="mb-3">
                                <label for="annee">Modifier l'année du film</label>
                                <input type="text" name="annee" id="annee_film" class="form-control form-control-lg w-75" placeholder="Modifier l'année de sortie du film'">
                                <div class="invalid-feedback">Modifier l'année de sortie du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="titre">Modifier le titre du film</label>
                                <input type="text" name="titre" id="titre_film" class="form-control form-control-lg w-75" placeholder="Modifier le titre du film">
                                <div class="invalid-feedback">Modifier le titre du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="resume">Modifier le résumé du film</label>
                                <input type="text" name="resume" id="resume_film" class="form-control form-control-lg w-75" placeholder="Modifier le résumé du film">
                                <div class="invalid-feedback">Modifier le résumé du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="affiche">Modifier l'url vers l'affiche du film</label>
                                <input type="text" name="affiche" id="affiche_film" class="form-control form-control-lg w-75" placeholder="Modifier l'url vers l'affiche du film">
                                <div class="invalid-feedback">Modifier l'url vers l'affiche du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="url_ba_film">Modifier l'url vers la bande-annonce du film</label>
                                <input type="text" name="url_ba_film" id="url_ba_film" class="form-control form-control-lg w-75" placeholder="Modifier l'url vers la bande-annonce du film">
                                <div class="invalid-feedback">Modifier l'url vers la bande-annonce du film</div>
                            </div>

                            <div class="mb-3">
                                <label for="genre">Modifier le genre du film</label>
                                <input type="text" name="genre" id="genre_film" class="form-control form-control-lg w-75" placeholder="Modifier le genre du film">
                                <div class="invalid-feedback">Modifier le genre du film</div>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Mettre à jour le film" class="btn btn-success btn-block btn-lg w-75" id="edit-film-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Film Modal End -->
    <div class="container">
        <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div>
            <h4 class="text-primary">Films présents dans la base de données</h4>
            </div>
            <div>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewFilmModal">Ajouter un film</button>
            </div>
        </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-lg-12">
            <div id="showAlert"></div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead>
                <tr>
                    <th>ID Film</th>
                    <th>Année de sortie</th>
                    <th>Titre</th>
                    <th>Résumé</th>
                    <th>Affiche</th>
                    <th>Bande-annonce</th>
                    <th>Genre</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <script src="../src/main-film.js"></script>


</div>

</body>

</html>
