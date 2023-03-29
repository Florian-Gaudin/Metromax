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

<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Gestion des utilisateurs</h1>

<div class="bg-card text-impact text-bg2 bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">

    <!-- Add New User Modal Start -->
    <div class="modal fade" tabindex="-1" id="addNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gestion des utilisateurs</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form" action="./config.php" method="POST" class="p-2" novalidate>
                        <div class="row mb-3 gx-3">
                            <div class="mb-3">
                                <label for="pseudo">Ajouter le pseudo de l'utilisateur</label>
                                <input type="text" name="pseudo" class="form-control form-control-lg w-75" placeholder="Ajouter le pseudo" required>
                                <div class="invalid-feedback">Ajouter le pseudo de l'utilisateur</div>
                            </div>
                            <div class="mb-3">
                                <label for="prenom">Ajouter le prénom de l'utilisateur</label>
                                <input type="text" name="prenom" class="form-control form-control-lg w-75" placeholder="Ajouter le prénom" required>
                                <div class="invalid-feedback">Ajouter le prénom de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="nom">Ajouter le nom de l'utilisateur</label>
                                <input type="text" name="nom" class="form-control form-control-lg w-75" placeholder="Ajouter le nom" required>
                                <div class="invalid-feedback">Ajouter le nom de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Ajouter le mail de l'utilisateur</label>
                                <input type="email" name="email" class="form-control form-control-lg w-75" placeholder="Ajouter le mail" required>
                                <div class="invalid-feedback">Ajouter le mail de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="password">Ajouter le mot de passe de l'utilisateur</label>
                                <input type="password" name="password" class="form-control form-control-lg w-75" placeholder="Ajouter le mot de passe" required>
                                <div class="invalid-feedback">Ajouter le mot de passe de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="role">Ajouter le rôle de l'utilisateur</label>
                                <select name="role" class="form-select w-75" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="0" disabled selected>Choisir le rôle de l'utilisateur</option>
                                    <option value="2">Administrateur</option>
                                    <option value="1">Utilisateur</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Ajouter l'utilisateur" class="btn btn-primary btn-block btn-lg w-75" id="add-user-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New User Modal End -->

    <!-- Edit User Modal Start -->
    <div class="modal fade" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editer l'utilisateur</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" action="./config.php" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3 gx-3">
                            <div class="mb-3">
                                <label for="pseudo">Modifier le pseudo de l'utilisateur</label>
                                <input type="text" name="pseudo" id="pseudo_user" class="form-control form-control-lg w-75" placeholder="Modifier le pseudo de l'utilisateur">
                                <div class="invalid-feedback">Modifier le pseudo de l'utilisateur</div>
                            </div>
                            <div class="mb-3">
                                <label for="prenom">Modifier le prénom de l'utilisateur</label>
                                <input type="text" name="prenom" id="prenom_user" class="form-control form-control-lg w-75" placeholder="Ajouter le prénom">
                                <div class="invalid-feedback">Ajouter le prénom de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="nom">Modifier le nom de l'utilisateur</label>
                                <input type="text" name="nom" id="nom_user" class="form-control form-control-lg w-75" placeholder="Ajouter le nom">
                                <div class="invalid-feedback">Ajouter le nom de l'utilisateur</div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Modifier le mail de l'utilisateur</label>
                                <input type="email" name="email" id="mail_user" class="form-control form-control-lg w-75" placeholder="Entrer e-mail">
                                <div class="invalid-feedback">Le mail est obligatoire</div>
                            </div>

                            <div class="mb-3">
                                <label for="password">Modifier le mot de passe de l'utilisateur</label>
                                <input type="password" name="password" id="mdp_user" class="form-control form-control-lg w-75" placeholder="Ajouter le mot de passe">
                                <div class="invalid-feedback">Mot de passe obligatoire</div>
                            </div>

                            <div class="mb-3">
                                <label for="role">Modifier le rôle de l'utilisateur</label>
                                <select name="role" class="form-select w-75" id="id_role" aria-label="Floating label select example">
                                    <option value="0" disabled selected>Choisir le rôle de l'utilisateur</option>
                                    <option value="2">Administrateur</option>
                                    <option value="1">Utilisateur</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Mettre à jour l'utilisateur" class="btn btn-success btn-block btn-lg w-75 " id="edit-user-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit User Modal End -->
    <div class="container">
        <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div>
            <h4 class="text-primary">Utilisateurs enregistrés</h4>
            </div>
            <div>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Ajouter un utilisateur</button>
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
                    <th>ID utilisateur</th>
                    <th>E-mail</th>
                    <th>Pseudo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Rôle</th>
                    <th>Avatar</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <script src="../src/main.js"></script>


</div>

</body>

</html>
