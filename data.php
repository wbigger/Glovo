<?php
$json = new stdClass();

$json->pizzas = array(
  new StdClass(),
  new StdClass(),
  new StdClass()
);

$json->pizzas[0]->img_url = "margherita.jpg";
$json->pizzas[0]->desc = "Margherita";
$json->pizzas[0]->category = "Vegetariana";
$json->pizzas[0]->price = 7.00;

$json->pizzas[1]->img_url = "crostino.jpg";
$json->pizzas[1]->desc = "Crostino";
$json->pizzas[1]->category = "";
$json->pizzas[1]->price = 6.50;

$json->pizzas[2]->img_url = "funghi_formaggio.jpg";
$json->pizzas[2]->desc = "Funghi e quattro formaggi";
$json->pizzas[2]->category = "";
$json->pizzas[2]->price = 8.00;

echo json_encode($json);


?>