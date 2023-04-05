<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Max</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                primary:'#F2F3EA',
                bg1:'#000000',
                bg2:'#252A30',
                secondary:'#E5941A',
                third :'#2C5C59',
                card : '#d9d9d9',
            },
            fontFamily: {
                'bungee': ['"Bungee Shade"', 'cursive'],
                'impact': ['"Impact"', 'Haettenschweiler', 'Arial Narrow Bold', 'sans-serif'],
            },
            fontSize: {
                sm: '0.875rem',
                base: '1rem',
                xl: '1.125rem',
                '2xl': '1.25rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
                '5xl': '3.052rem',
                },
            backgroundImage: {
                'bg-cine': "url('./assets/img/cinema-bg2.jpg')",
                'bg-cine-mobile': "url('./assets/img/cinema_home.jpg')",
            }
            }
        }
        }
    </script>
</head>


<?php require_once("../include/navbar.php"); ?>

<h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Bienvenue sur votre <br> espace administrateur</h1>

<?php

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

    $stmt = $conn->prepare('SELECT * FROM users WHERE id_user =?');
    
    $stmt->execute([$_SESSION['id_user']]);
    $utilisateur = $stmt->fetch();
    $id_user = $utilisateur['id_user'];
    $id_role = $utilisateur['id_role'];

// Vérification des droits administrateur
if ($id_role == 1) {
    $_SESSION['message'] = 'Accès refusé, vous n\'avez pas les droits administrateur';
    header("Location: /metromax/content/pages/connexion.php");
    exit();
}
elseif ($id_role == 2) {
    ?>
    <div class="bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">
        <div class="w-4/5 mx-auto flex flex-col justify-center md:flex-row bg-bg2 bg-opacity-80 p-5 m-5">
            <div class="flex flex-col justify-center px-5">
                <a href="gestion_films.php" class="w-9/12 mt-10 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third"> Gérer les films </a>
                <a href="gestion_users.php" class="w-9/12 mt-10 mb-10 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third"> Gérer les utilisateurs </a>
            </div>
        </div>
    </div>


<?php
}


require_once("../include/footer.php");

?>