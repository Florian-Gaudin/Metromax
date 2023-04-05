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
                hearthover : 'rgba(251, 38, 38, 0.5)',
                heartchecked : '#fb2626',
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

<body>
    <?php
    
    require_once("../include/navbar.php"); 

    require_once("../vuejs/utils.php");
    render('lobby');

    require_once("../include/footer.php");

    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14"></script>
<script src="https://unpkg.com/vue-cookies@1.8.3/vue-cookies.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
<script src="/metromax/content/vuejs/vue.js"></script>
</body>
</html>