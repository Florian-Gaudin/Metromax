<?php

require_once(dirname(__DIR__) . '../models/fetchFilm.php');


$model = new Films();

$sql = $model->list('');

echo json_encode($sql->fetchAll());

?>