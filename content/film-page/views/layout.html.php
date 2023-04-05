<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Metromax  - Film</title>
  <link rel="stylesheet" href="/metromax/content/film-page/views/style-etoiles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>

  <div id="root"><?= $pageContent ?></div>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <script src="/metromax/content/film-page/vue-film.js"></script>
  <script src="https://unpkg.com/vue-cookies@1.8.3/vue-cookies.js"></script>
  <script type="module" src="../film-page/api-http/avis.js"></script>
  <script src="/metromax/content/film-page/api-http/node_modules/chart.js/dist/chart.umd.js"></script>

</body>

</html>