<?php

session_start();

// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit']))
{
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND $_POST['password']==$_POST['password2'])
   {

 // Connexion à la BDD
  try {
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

  // Accéder à la table qui nous intéresse : table 'utilisateur' de la BDD , puis préparer le tableau (fetch) pour exploiter les données

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $default_avatar = '/metromax/assets/img/login.png';

    if (isset($_POST ['submit'])) {
    // Vérifier si le champ utilisateur 'mail' n'existe pas déjà dans la BDD
      $stmt = $conn->prepare("SELECT * FROM users WHERE mail_user=?");
      $stmt->execute([$email]); 
      $user = $stmt->fetch();
      if ($user) {
          // le nom d'utilisateur existe déjà
          $_SESSION['message'] = 'Cet utilisateur existe déjà';
          header("Location: ../pages/inscription.php");
}
      else {
          // Ecriture de la requête sur la BDD : ajouter un nouvel utilisateur
        $insertUser = 'INSERT INTO users(mdp_user, nom_user, prenom_user, pseudo_user, mail_user, avatar_user, id_role) VALUES (:mdp_user, :nom_user, :prenom_user, :pseudo_user, :mail_user, :avatar_user, :id_role)';
        
        // Préparation
        $insertUser = $conn->prepare($insertUser);
        
        // Exécution ! L'utilisateur est maintenant en base de données
        $insertUser->execute([
            'mdp_user' =>$password,
            'nom_user' => $nom,
            'prenom_user' => $prenom,
            'pseudo_user' => $pseudo,
            'mail_user' => $email,
            'avatar_user' => $default_avatar,
            'id_role' => 1 ,            
        ]);
        $user["prenom_user"] = $_POST['prenom'] ;
        $_SESSION['msg_success_register'] = 'Bienvenue ' . $user["prenom_user"].', vous êtes enregistré.' . '<br>' . '<a class="underline" href="/metromax/content/pages/connexion.php">Cliquez pour vous connecter</a>';
        header("Location: /metromax/index.php");
      }
      }
    }
   }
   elseif ($_POST['password']!=$_POST['password2']) {
    echo "Vous devez entrer un mot de passe identique";
    header("Location: ../pages/inscription.php");
    exit();
   }
  // Vérifier que tous les champs ont bien été remplis
   else
   {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
          header("Location: ../pages/inscription.php");
          exit();
   }

?> 