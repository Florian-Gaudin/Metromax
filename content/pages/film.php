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
    <link rel="stylesheet" href="/metromax/assets/styles/catalogue.css">
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
                'bg-cine': "url('./assets/img/cinema-bg2.jpg')",
            }
            }
        }
        }
    </script>

</head>

<body>
    <?php
    require_once("../include/navbar.php");
    ?>

    <h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Votre film :<br>Films et séries</h1>
    <div class="bg-bg-cine bg-fixed bg-[left_5rem] bg-[bottom-8rem] md:bg-cover py-20">

        <div class="w-4/5 mx-auto flex bg-third p-5 m-5 flex-col md:flex-row">
            <img src="/metromax/assets/img/oscars3.jpg" alt="">
            <div class="flex flex-col justify-center px-5">
                <div class="flex justify-between">
                    <h4 class="font-impact text-secondary text-3xl pb-5">Top Gun : Maverick</h4>
                    <h5 class="font-impact text-secondary text-2xl pb-5">Date de sortie : 2022</h5>
                    <div>
                        <i class="fa-regular fa-heart" style="color: red; font-size: 25px;"></i>
                        <i class="fa-regular fa-star" style="color: yellow; font-size: 25px;"></i>
                    </div>
                </div>
                <h5 class="font-impact text-primary text-2xl pb-5">Réalisateur : Joseph Kosinski</h5>
                <h5 class="font-impact text-primary text-2xl pb-5">Acteurs : Tom Cruise, Miles Teller,  Jennifer Connelly, Jon Hamm</h5>
                <p class="font-impact text-primary text-2xl">Top Gun : Maverick est un film d'action américain réalisé par Joseph Kosinski, sorti en 2022. Il s’agit de la suite du film Top Gun de Tony Scott, sorti en 1986, dont l'action se déroulait principalement à Topgun, l'école de formation au combat aérien de la marine américaine. Il est présenté en avant-première au CinemaCon avant une présentation hors compétition au festival de Cannes 2022.</p>
            </div>
        </div>

    </div>





    <?php
    require_once("../include/footer.php");
    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>