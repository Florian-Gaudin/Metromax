<?php

session_start();

// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit']))
{
    $formerMail = htmlspecialchars($_POST['former_email']);
    $formerPassword = htmlspecialchars($_POST['former_password']);
    $newMail = htmlspecialchars($_POST['modify_email']);
    $newMail2 = htmlspecialchars($_POST['modify_email2']);
    $newPassword = htmlspecialchars($_POST['modify_password']);
    $newPassword2 = htmlspecialchars($_POST['modify_password2']);
    $id_utilisateur = $_SESSION['id_user'];


// Si toutes les conditions sont remplies, on passe au traitement : remplacement du nouvel email et nouveau mot de passe
if(!empty($formerMail) AND !empty($newMail) AND !empty($NewMail2) AND !empty($formerPassword) AND !empty($newPassword) AND !empty($newPassword2) AND $formerMail == $_SESSION['mail_utilisateur'] AND $formerPassword == $_SESSION['password_utilisateur'] AND $newMail != $_SESSION['mail_utilisateur'] AND $newPassword != $_SESSION['password_utilisateur'] AND $newMail == $newMail2 AND $newPassword == $newPassword2)
   {
   // Create connection
   try {
    $conn = new PDO(
        'mysql:host=localhost;dbname=justinimmo;charset=utf8',
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
    $userUpdate = $conn->prepare('SELECT * FROM utilisateur WHERE id_user = ?');
    $userUpdate->execute([$id_utilisateur]);
    $utilisateur = $userUpdate->fetch();


//  HASHER LES MOTS de PASSE newpassword et newpassword2



    // Ecriture de la requête
    $request = 'UPDATE utilisateur SET mail_utilisateur = ?, password_utilisateur = ? WHERE id_user = ?';
    $stmt = $conn->prepare($request);
    $stmt->execute([
        $newMail,
        $newPassword,
        $id_utilisateur,]);

// Message si succès
    $_SESSION['message'] = 'Succès de la requête ' . $prenom .', vous êtes à présent enregistré avec votre nouvel mail ' . $newMail . ' et votre nouveau mot de passe';
    header("Location: ../index.php");
    unset($update);
    $conn = null;
    exit();
    }

// Vérifier que l'utilisateur entre bien correctement son ancien mail et son ancien mot de passe
    elseif ($_SESSION['mail_utilisateur'] != $formerMail) {
    $_SESSION['message'] = "Vous devez entrer votre ancien mail à l'identique";
    header("Location: espaceperso.php");
    exit();
    }
    elseif ($_SESSION['password_utilisateur'] != $formerPassword) {
    $_SESSION['message'] = "Vous devez entrer votre ancien mot de passe à l'identique";
    header("Location: espaceperso.php");
    exit();
    }
    // Vérifier que les anciens mail + mot de passe entrés par l'utilisateur sont différents des nouveaux
    elseif ($formerMail == $newMail || $formerMail == $newMail2) {
    $_SESSION['message'] = "Vous devez choisir un nouvel email différent de l'ancien";
    header("Location: espaceperso.php");
    exit();
    }
    elseif ($formerPassword == $newPassword || $formerPassword == $newPassword2) {
    $_SESSION['message'] = "Vous devez choisir un nouveau mot de passe différent de l'ancien";
    header("Location: espaceperso.php");
    exit();
    }
    // Messages d'erreur si mail ou mot de passe différents
    elseif ($newMail != $newMail2) {
    $_SESSION['message'] = "Vous devez entrer deux fois un nouveau mail identique";
    header("Location: espaceperso.php");
    exit();
    }

    // Vérifier que tous les champs ont bien été remplis
    else {
    $_SESSION['message'] = 'Veuillez remplir tous les champs';
    header("Location: espaceperso.php");
    exit();
    }
}

?> 