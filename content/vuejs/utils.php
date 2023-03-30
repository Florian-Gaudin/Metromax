<?php

/**
 * Met en tampon le contenu des pages pour le rendre autour de l'architecture du layout
 */
function render(string $path)
{
  // ouverture tampon
  ob_start();
  require '../vuejs/views/' . $path . '.html.php';

  // mise en tampon de la page dans une variable
  $pageContent = ob_get_clean();

  require '../vuejs/views/layout.html.php';
}