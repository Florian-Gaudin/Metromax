<?php

  require_once '../src/db-film.php';
  require_once '../src/util.php';

  $db = new Database;
  $util = new Util;

  // Handle Add New Film Ajax Request
  if (isset($_POST['add'])) {
    $annee = $util->testInput($_POST['annee']);
    $titre = $util->testInput($_POST['titre']);
    $resume = $util->testInput($_POST['resume']);
    $affiche = $util->testInput($_POST['affiche']);

    // GESTION LIEN VIDEO
    $input_film = $util->testInput($_POST['url_ba_film']);
    $url_ba_film = str_replace("watch?v=", "embed/", $input_film);

    //$url_ba_film = $util->testInput($_POST['url_ba_film']);
    $genre = $util->testInput($_POST['genre']);

    if ($db->insert($annee, $titre, $resume, $affiche, $url_ba_film, $genre)) {
      echo $util->showMessage('success', 'Film ajouté avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de traitement!');
    }
  }

  // Handle Fetch All Films Ajax Request
  if (isset($_GET['read'])) {
    $films = $db->read();
    $output = '';
    if ($films) {
      foreach ($films as $row) {
        $output .= '<tr>
                      <td>' . $row['id_film'] . '</td>
                      <td>' . $row['annee_film'] . '</td>
                      <td>' . $row['titre_film'] . '</td>
                      <td>' . $row['resume_film'] . '</td>
                      <td><img style="width: 70px" src="' . $row['affiche_film'] . '"></td>
                      <td><iframe width="200" height="" src="' . $row['url_ba_film'] . '" title="Bande annonce - ' . $row['titre_film'] . '" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                      <td>' . $row['genre_film'] . '</td>
                      <td>
                        <a href="#" id="' . $row['id_film'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editFilmModal">Editer</a>

                        <a href="#" id="' . $row['id_film'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Supprimer</a>
                      </td>
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="6">No Films Found in the Database!</td>
            </tr>';
    }
  }

  // Handle Edit Film Ajax Request
  if (isset($_GET['edit'])) {
    $id_film = $_GET['id'];
    $film = $db->readOne($id_film);
    echo json_encode($film);
  }

  // Handle Update Film Ajax Request
  if (isset($_POST['update'])) {
    $id_film = $util->testInput($_POST['id_film']);
    $annee = $util->testInput($_POST['annee']);
    $titre = $util->testInput($_POST['titre']);
    $resume = $util->testInput($_POST['resume']);
    $affiche = $util->testInput($_POST['affiche']);
    $url_ba_film = $util->testInput($_POST['url_ba_film']);
    $genre = $util->testInput($_POST['genre']);
    if ($db->update($annee, $titre, $resume, $affiche, $url_ba_film, $genre, $id_film)) {
      echo $util->showMessage('success', 'Film mis à jour avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de traitement !');
    }
  }

  // Handle Delete Film Ajax Request
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
      echo $util->showMessage('info', 'Film supprimé avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de la requête !');
    }
  }

?>