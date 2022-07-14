<?php

$id = $_POST['id'];

$quantidade = $_POST['quantidade'];

echo $sql = "UPDATE `estoque` SET 'quantidade'=$quantidade WHERE id_estoque = $id";

?>