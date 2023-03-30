<?php

session_start();



                                                                                    //  MODIFICATION DE MAIL

// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit_modify_mail']))
{
    $formerMail = htmlspecialchars($_POST['former_email']);
    $newMail = htmlspecialchars($_POST['modify_email']);
    $newMail2 = htmlspecialchars($_POST['modify_email2']);
    $id_utilisateur = $_SESSION['id_user'];


// Si toutes les conditions sont remplies, on passe au traitement : remplacement du nouvel email et nouveau mot de passe
if(!empty($formerMail) AND !empty($newMail) AND !empty($newMail2) AND $formerMail == $_SESSION['mail_user'] AND $newMail != $_SESSION['mail_user'] AND $newMail == $newMail2)
   {
   // Create connection
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

    // Accéder aux données serveur
    $userUpdate = $conn->prepare('SELECT * FROM users WHERE id_user = ?');
    $userUpdate->execute([$id_utilisateur]);
    $utilisateur = $userUpdate->fetch();


    // Ecriture de la requête
    $request = 'UPDATE users SET mail_user = ? WHERE id_user = ?';
    $stmt = $conn->prepare($request);
    $stmt->execute([
        $newMail,
        $id_utilisateur,]);

    // Message si succès
    $_SESSION['message_update'] = 'Vous êtes à présent enregistré avec votre nouveau mail ' . $newMail . '<br>' . 'Vous devrez vous reconnecter pour voir vos modifications';
    header("Location: /metromax/content/pages/espace-user.php");
    unset($update);
    $conn = null;
    exit();
    }

    // Vérifier que l'utilisateur entre bien correctement son ancien mail et son ancien mot de passe
    elseif ($_SESSION['mail_user'] != $formerMail) {
    $_SESSION['message_update'] = "Vous devez entrer votre ancien mail à l'identique";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    // Vérifier que les anciens mail + mot de passe entrés par l'utilisateur sont différents des nouveaux
    elseif ($formerMail == $newMail || $formerMail == $newMail2) {
    $_SESSION['message_update'] = "Vous devez choisir un nouvel email différent de l'ancien";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    // Messages d'erreur si mail ou mot de passe différents
    elseif ($newMail != $newMail2) {
    $_SESSION['message_update'] = "Vous devez entrer deux fois un nouveau mail identique";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    // Vérifier que tous les champs ont bien été remplis
    else {
    $_SESSION['message_update'] = 'Veuillez remplir tous les champs';
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
}


                                                                                    //  MODIFICATION DE MOT DE PASSE


// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit_modify_password']))
{
    $formerPassword = htmlspecialchars($_POST['former_password']);
    $newPassword = htmlspecialchars($_POST['modify_password']);
    $newPassword2 = htmlspecialchars($_POST['modify_password2']);
    $id_utilisateur = $_SESSION['id_user'];


// Si toutes les conditions sont remplies, on passe au traitement : remplacement du nouvel email et nouveau mot de passe
if(!empty($formerPassword) AND !empty($newPassword) AND !empty($newPassword2) AND $formerPassword == $_SESSION['mdp_user'] AND $newPassword != $_SESSION['mdp_user'] AND $newPassword == $newPassword2)
   {
   // Create connection
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

    // Accéder aux données serveur
    $userUpdate = $conn->prepare('SELECT * FROM users WHERE id_user = ?');
    $userUpdate->execute([$id_utilisateur]);
    $utilisateur = $userUpdate->fetch();


//  HASHER LE MOT de PASSE newpassword
    $password = htmlspecialchars(password_hash($newPassword, PASSWORD_DEFAULT));



    // Ecriture de la requête
    $request = 'UPDATE users SET mdp_user = ? WHERE id_user = ?';
    $stmt = $conn->prepare($request);
    $stmt->execute([
        $password,
        $id_utilisateur,]);

// Message si succès
    $_SESSION['message_update'] = 'Vous êtes à présent enregistré avec votre nouveau mot de passe ' . '<br>' . 'Vous devrez vous reconnecter pour voir vos modifications';
    header("Location: /metromax/content/pages/espace-user.php");
    unset($update);
    $conn = null;
    exit();
    }

// Vérifier que l'utilisateur entre bien correctement son ancien mail et son ancien mot de passe
    elseif ($_SESSION['mdp_user'] != $formerPassword) {
    $_SESSION['message_update'] = "Vous devez entrer votre ancien mot de passe à l'identique";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    elseif ($formerPassword == $newPassword || $formerPassword == $newPassword2) {
    $_SESSION['message_update'] = "Vous devez choisir un nouveau mot de passe différent de l'ancien";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    // Messages d'erreur si nouveaux mot de passe différents
    elseif ($newPassword != $newPassword2) {
    $_SESSION['message_update'] = "Vous devez entrer deux fois un nouveau mail identique";
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
    // Vérifier que tous les champs ont bien été remplis
    else {
    $_SESSION['message_update'] = 'Veuillez remplir tous les champs';
    header("Location: /metromax/content/pages/espace-user.php");
    exit();
    }
}


                                                                                    //  MODIFICATION DE L'AVATAR


// Vérifier que tous les champs ont bien été remplis ET que l'utilisateur a bien écrit deux fois le même mail et le même mot de passe
if(isset($_POST['submit_modify_avatar'])){

    if(!empty($_POST['avatar'])) {
        $newAvatar = htmlspecialchars($_POST['avatar']);
        $id_utilisateur = $_SESSION['id_user'];
    
       // Create connection
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
    
        // Accéder aux données serveur
        $userUpdate = $conn->prepare('SELECT * FROM avatar a INNER JOIN users u ON a.avatar_id = u.avatar_id WHERE id_user = ?');
        $userUpdate->execute([$id_utilisateur]);
        $utilisateur = $userUpdate->fetch();
    
    
        // Ecriture de la requête
        $request = 'UPDATE users SET avatar_id = ? WHERE id_user = ?';
        $stmt = $conn->prepare($request);
        $stmt->execute([
            $newAvatar,
            $id_utilisateur,]);
    
        // Message si succès
        $_SESSION['message_update'] = 'Vous avez choisi et validé une nouvelle image de profil !<br>Vous devrez vous reconnecter pour voir vos modifications';
        header("Location: /metromax/content/pages/espace-user.php");
        unset($update);
        $conn = null;
        exit();
        }

    else {
        $_SESSION['message_update'] = 'Veuillez choisir un avatar';
        header("Location: /metromax/content/pages/espace-user.php");
    }
}


?>