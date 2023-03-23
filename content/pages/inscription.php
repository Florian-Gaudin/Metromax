<!-- <?php
session_start();
?> -->

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
                'bg-cine': "url('/metromax/assets/img/cinema-bg2.jpg')",
                'bg-cine-mobile': "url('/metromax/assets/img/cinema_home.jpg')",
            }
            }
        }
        }
    </script>

</head>




<?php require_once("../include/navbar.php"); ?>

<div class="bg-bg2 font-bungee py-5 pt-[200px] md:pt-[300px] lg:pt-[120px] text-primary text-center">
    <h1 class="text-5xl">Inscrivez-vous</h1>
    <h2 class="text-3xl pt-3">pour profiter de tous nos contenus&nbsp;!</h2>
</div>

<?php
if (isset($_SESSION['message'])) {
        echo $_SESSION['message'] . '<br>';
    }  
// if ($_SESSION['mail_user']){
//   echo  '<a href="../pages/espaceperso.php"> Modifier mes informations de connexion<a>';
// }
// else {
//   echo 'Veuillez réessayer votre inscription';
// }
?>

    <div class="bg-bg-cine-mobile md:bg-bg-cine bg-[center_left_62rem] md:bg-[left_5rem] md:bg-[bottom-8rem] bg-fixed md:bg-cover flex justify-center py-[50px]">
        <div class="mx-5 md:mx-0 md:w-full md:max-w-sm p-4 bg-card bg-blend-hard-light bg-opacity-80 border border-gray-200 rounded-lg shadow sm:p-8 font-impact font-medium uppercase">
            <div class="mix-blend-normal">
                <h4 class ="text-bg1 text-center text-2xl md:text-3xl">Entrez vos informations&nbsp;:</h4>
                <form class="" method="POST" action="/metromax/content/src/traitement-inscription.php">
                    <div class="my-6">
                        <input type="text" id="nom" name="nom" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Entrez votre nom*" required>
                    </div>
                    <div class="my-6">
                        <input type="text" id="prenom" name="prenom" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Entrez votre prénom*" required>
                    </div>
                    <div class="my-6">
                        <input type="text" id="pseudo" name ="pseudo" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Choisissez votre pseudo*" required>
                    </div>
                    <div class="my-6">
                        <input type="email" id="email" name="email" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Entrez votre adresse mail*" required>
                    </div>
                    <div class="my-6">
                        <input type="password" id="password" name="password" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Choisissez votre votre mot de passe*" required>
                    </div>
                    <div class="my-6">
                        <input type="password" id="password2" name="password2" class="bg-primary border border-gray-300 text-bg1 font-impact placeholder:text-xs placeholder:md:text-base placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 md:pl-8 p-4" placeholder="Confirmez votre votre mot de passe*" required>
                    </div>
                    <button type="submit" name="submit" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">S'inscrire</button>
                    <p class="flex justify-end mt-5 italic text-sm">* Champs obligatoires</p>
                    <a href="./connexion.php" class="flex justify-end mt-5 underline">Déjà inscrit ?</a>
                </form>
            </div>
        </div>
    </div>

<?php require_once("../include/footer.php");?>

</body>