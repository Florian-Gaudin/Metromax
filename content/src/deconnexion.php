<?php
    session_start();
    session_destroy();
    header("Location: /metromax/index.php");
    ?>