<?php

session_start();

// Vérifier que tous les champs ont bien été remplis
if(isset($_POST['submit']))
{

   if(!empty($_POST['email']) AND !empty($_POST['password']))
   {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    try
    {
      $conn = new PDO(
        'mysql:host=localhost;dbname=metromax;charset=utf8',
        'root',
        ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

  // Accéder aux données serveur
    $stmt = $conn->prepare('SELECT * FROM users WHERE mail_user = ?');
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();
    $id_user = $utilisateur['id_user'];
    $id_role = $utilisateur['id_role'];
  

    // Vérifier que les champs utilisateur et les données serveur correspondent
        if (password_verify($password, $utilisateur['mdp_user'])) {
          $rolestmt = $conn->prepare('SELECT * FROM users WHERE id_user = ?');
          $rolestmt->execute([$id_user]);
          $role = $rolestmt->fetchAll();

        // Vérification du rôle de l'utilisateur connecté
          if ($id_role == 2) {
            $_SESSION['message_admin'] = 'Bonjour Administrateur, vous êtes connecté avec le compte administrateur ' . $utilisateur['mail_user'] . '<br>' . ' <a href="pages/gestion_admin.php"> Accès à la page de gestion admin </a> ';
            $_SESSION['mail_user'] = $_POST['email'];
            $_SESSION['mdp_user'] = $_POST['password'];
            $_SESSION['pseudo_user'] = $utilisateur['pseudo_user'];
            $_SESSION['prenom_user'] = $utilisateur['prenom_user'];
            $_SESSION['nom_user'] = $utilisateur['nom_user'];
            $_SESSION['id_user'] = $utilisateur['id_user'];
            header("Location: /metromax/index.php");
          }

            elseif ($id_role == 1) {
            $_SESSION['message_admin'] = null;
            $_SESSION['mail_user'] = $_POST['email'];
            $_SESSION['mdp_user'] = $_POST['password'];
            $_SESSION['pseudo_user'] = $utilisateur['pseudo_user'];
            $_SESSION['prenom_user'] = $utilisateur['prenom_user'];
            $_SESSION['nom_user'] = $utilisateur['nom_user'];
            $_SESSION['id_user'] = $utilisateur['id_user'];
            header("Location: /metromax/index.php");
          }}
          
        
        // Messages d'erreur
        elseif ($utilisateur['mail_user'] == $email && $utilisateur['mdp_user'] != $password) {
          $_SESSION['message'] = 'Mot de passe incorrect';
          header("Location: /metromax/content/pages/connexion.php");
          exit();
        }
        else { 
          $_SESSION['message'] = "Le compte n'existe pas avec cet email, veuillez vérifier votre email ou vous inscrire";
          header("Location: /metromax/content/pages/connexion.php");
          exit();
        }
      }
      else {
        die("erreur");
      }
    }
  //  Vérifier que tous les champs ont bien été remplis
   else
   {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
          header("Location: /metromax/content/pages/connexion.php");
          exit();
   }
?> 