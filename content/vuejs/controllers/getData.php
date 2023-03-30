<?php

require_once(dirname(__DIR__) . '../models/films.php');


$model = new Films();

$sql = $model->list('');

echo json_encode($sql->fetchAll());

?>