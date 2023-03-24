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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
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



                <?php if (isset($_SESSION['id_user']))
                    {
                    ?>

                <body class="border-0">

                <?php require_once("../include/navbar.php"); ?>

                <h1 class="font-bungee py-5 text-5xl pt-[200px] md:pt-[300px] lg:pt-[140px] text-primary text-center bg-bg2">Bienvenue sur<br>votre espace personnel</h1>

                <?php
                if (isset($_SESSION['message_update'])) {
                ?>
                <p class="-mx-3 rounded-lg px-3 text-base leading-7 text-secondary font-impact"><?= $_SESSION['message_update'] ?></p>
                <?php
                }
                ?>


                <div class="bg-bg-cine-mobile md:bg-bg-cine bg-[center_left_62rem] md:bg-[left_5rem] md:bg-[bottom-8rem] bg-fixed md:bg-cover flex flex-col items-center py-[50px]">

    <!-- ESPACE AFFICHAGE DES INFORMATIONS DE L'UTILISATEUR -->
    <div class="mx-5 md:mx-0 md:w-3/5 p-4 bg-card bg-blend-hard-light bg-opacity-80 border border-gray-200 rounded-lg shadow sm:p-8 font-impact font-medium">
        <div class="mix-blend-normal">
            <img src="/metromax/assets/img/login.png" alt="" class="mx-auto">
            <div>
                <span class="text-bg1 text-xl md:text-2xl">
                    
                Bienvenue <?= $_SESSION['prenom_user'] . ' ' . $_SESSION['nom_user'] . ' !' ?>
                </span> <br>
                <span class="text-bg1 text-xl md:text-2xl">
                    Votre pseudo : <?= $_SESSION['pseudo_user'] ?>
                </span> <br>
                <span class="mt-10 text-bg1 text-xl md:text-2xl">
                    Votre adresse mail : <?= $_SESSION['mail_user'] ?>
                </span>

            </div>
        

        </div>
    </div>

    <!-- ESPACE MODIFICATION DES INFORMATIONS -->
    <div class="mx-5 md:mx-0 md:w-3/5 p-4 bg-card bg-blend-hard-light bg-opacity-80 border border-gray-200 rounded-lg shadow sm:p-8 font-impact font-medium">
        <div class="mix-blend-normal">
           
            <div id="accordion-collapse" data-accordion="collapse">
                <!-- Accordion : modifier avatar, mail et mot de passe -->
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Modifier mon avatar</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">TEXTE .</p>
                        <p class="text-gray-500 dark:text-gray-400">TEXTE .</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Modifier mon adresse mail</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 font-impact border border-b-0 border-gray-200 dark:border-gray-700">
                        <form class="p-5" action="/metromax/content/src/traitement-espace-user.php" method="POST">
                            <h3 class="mb-3 text-xl md:text-2xl">Veuillez entrer votre ancienne et votre nouvelle adresse mail :</h3>

                            <div class="mb-3">
                            <label class="lg:hidden">Adresse mail actuelle</label>
                            <input type="email" name="former_email" placeholder="Adresse mail actuelle*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                            <label for="modify_email" class="lg:hidden">Nouvelle adresse mail</label>
                            <input id="modify_email" type="email" name="modify_email" placeholder="Nouvelle adresse mail*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                            <label for="modify_email2" class="lg:hidden">Confirmer votre nouvelle adresse mail</label>
                            <input id="modify_email2" type="email" name="modify_email2" placeholder="Confirmez votre nouvelle adresse mail*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <button type="submit" name="submit_modify_mail" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">
                            Valider la modification
                            </button>
                        </form>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Modifier mon mot de passe</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 font-impact border border-t-0 border-gray-200 dark:border-gray-700">
                        <form data-form-type="login" class="p-5" action="/metromax/content/src/traitement-espace-user.php" method="POST">
                            <h2 class="mb-3 text-xl md:text-2xl">Veuillez entrer votre ancien et votre nouveau mot de passe :</h2>

                            <div class="mb-3">
                                <label class="lg:hidden">Mot de passe actuel</label>
                                <input type="password" name="former_password" placeholder="Mot de passe actuel*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password" class="lg:hidden">Nouveau mot de passe</label>
                                <input id="modify_password" type="password" name="modify_password" placeholder="Nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password2" class="lg:hidden">Confirmez votre nouveau mot de passe</label>
                                <input id="modify_password2" type="password" name="modify_password2" placeholder="Confirmez votre nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <button type="submit" name="submit_modify_password" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">
                            Valider la modification
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Voir favoris -->
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Voir et modifier mes favoris</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 font-impact border border-t-0 border-gray-200 dark:border-gray-700">
                        <form data-form-type="login" class="p-5" action="/metromax/content/src/traitement-espace-user.php" method="POST">
                            <h2 class="mb-3 text-xl md:text-2xl">Veuillez entrer votre ancien et votre nouveau mot de passe :</h2>

                            <div class="mb-3">
                                <label class="lg:hidden">Mot de passe actuel</label>
                                <input type="password" name="former_password" placeholder="Mot de passe actuel*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password" class="lg:hidden">Nouveau mot de passe</label>
                                <input id="modify_password" type="password" name="modify_password" placeholder="Nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password2" class="lg:hidden">Confirmez votre nouveau mot de passe</label>
                                <input id="modify_password2" type="password" name="modify_password2" placeholder="Confirmez votre nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <button type="submit_modify_password" name="submit" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">
                            Valider la modification
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Voir les notes attribuées -->
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Voir les différentes notes que j'ai attribuées</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 font-impact border border-t-0 border-gray-200 dark:border-gray-700">
                        <form data-form-type="login" class="p-5" action="/metromax/content/src/traitement-espace-user.php" method="POST">
                            <h2 class="mb-3 text-xl md:text-2xl">Veuillez entrer votre ancien et votre nouveau mot de passe :</h2>

                            <div class="mb-3">
                                <label class="lg:hidden">Mot de passe actuel</label>
                                <input type="password" name="former_password" placeholder="Mot de passe actuel*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password" class="lg:hidden">Nouveau mot de passe</label>
                                <input id="modify_password" type="password" name="modify_password" placeholder="Nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password2" class="lg:hidden">Confirmez votre nouveau mot de passe</label>
                                <input id="modify_password2" type="password" name="modify_password2" placeholder="Confirmez votre nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <button type="submit_modify_password" name="submit" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">
                            Valider la modification
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Voir les commentaires écrits -->
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="text-bg1 text-center text-2xl md:text-3xl">Voir les commentaires que j'ai écrits</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 font-impact border border-t-0 border-gray-200 dark:border-gray-700">
                        <form data-form-type="login" class="p-5" action="/metromax/content/src/traitement-espace-user.php" method="POST">
                            <h2 class="mb-3 text-xl md:text-2xl">Veuillez entrer votre ancien et votre nouveau mot de passe :</h2>

                            <div class="mb-3">
                                <label class="lg:hidden">Mot de passe actuel</label>
                                <input type="password" name="former_password" placeholder="Mot de passe actuel*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password" class="lg:hidden">Nouveau mot de passe</label>
                                <input id="modify_password" type="password" name="modify_password" placeholder="Nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <div class="mb-3">
                                <label for="modify_password2" class="lg:hidden">Confirmez votre nouveau mot de passe</label>
                                <input id="modify_password2" type="password" name="modify_password2" placeholder="Confirmez votre nouveau mot de passe*" required class="bg-primary border border-gray-300 text-bg1 font-impact text-md placeholder:text-impact placeholder:text-bg1 placeholder:text-bold placeholder:uppercase rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-4"/>
                            </div>
                            <button type="submit_modify_password" name="submit" class="w-9/12 text-third text-2xl rounded-lg bg-secondary text-lg px-3 md:px-5 py-4 w-full text-center uppercase hover:text-secondary hover:bg-third">
                            Valider la modification
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once("../include/footer.php");?>

                    <?php
                    }
                    else { 
                        $_SESSION['message'] = 'Veuillez vous connecter';
                        header("Location: /metromax/content/pages/connexion.php");
                    }
                ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>