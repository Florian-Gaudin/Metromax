<?php

  require_once './db.php';
  require_once './util.php';

  $db = new Database;
  $util = new Util;

  // Handle Add New User Ajax Request
  if (isset($_POST['add'])) {
    $prenom = $util->testInput($_POST['prenom']);
    $nom = $util->testInput($_POST['nom']);
    $pseudo = $util->testInput($_POST['pseudo']);
    $email = $util->testInput($_POST['email']);
    $password = $util->testInput(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $role = $util->testInput($_POST['role']);

    if ($db->insert($password, $nom, $prenom, $pseudo, $email, $role)) {
      echo $util->showMessage('success', 'Utilisateur ajouté avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de traitement!');
    }
  }

  // Handle Fetch All Users Ajax Request
  if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
      if ($users) {
        foreach ($users as $row) {
          if ($row['id_role'] == 1) {
              $role2 = "Utilisateur";
          }
          elseif ($row['id_role'] == 2) {
              $role2 = "Administrateur";
          }
          $output .= '<tr>
                        <td>' . $row['id_user'] . '</td>
                        <td>' . $row['mail_user'] . '</td>
                        <td>' . $row['pseudo_user'] . '</td>
                        <td>' . $row['nom_user'] . '</td>
                        <td>' . $row['prenom_user'] . '</td>
                        <td>' . $role2 . '</td>
                        <td><img width="100px" src="/metromax/assets/img/' . $row['avatar_url'] . '" alt="profil image"></td>
                        <td>
                          <a href="#" id="' . $row['id_user'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Editer</a>
  
                          <a href="#" id="' . $row['id_user'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Supprimer</a>
                        </td>
                      </tr>';
        }
        echo $output;
      } else {
        echo '<tr>
                <td colspan="6">No Users Found in the Database!</td>
              </tr>';
      }
    }

  // Handle Edit User Ajax Request
  if (isset($_GET['edit'])) {
    $id = $_GET['id'];
    $user = $db->readOne($id);
    echo json_encode($user);
  }

  // Handle Update User Ajax Request
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $pseudo = $util->testInput($_POST['pseudo']);
    $prenom = $util->testInput($_POST['prenom']);
    $nom = $util->testInput($_POST['nom']);
    $email = $util->testInput($_POST['email']);
    $password = $util->testInput($_POST['password']);
    $role = $util->testInput($_POST['role']);
    if ($db->update($password, $nom, $prenom, $pseudo, $email, $role, $id)) {
      echo $util->showMessage('success', 'Utilisateur mis à jour avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de traitement !');
    }
  }

  // Handle Delete User Ajax Request
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
      echo $util->showMessage('info', 'Utilisateur supprimé avec succès !');
    } else {
      echo $util->showMessage('danger', 'Erreur de la requête !');
    }
  }

?>