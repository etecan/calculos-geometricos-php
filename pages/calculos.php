<?php

require "../config.php";

include "../header.php";

if(isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
    if ($tipo == 'quadrado')
    include "quadrado.php";
if ($tipo == 'circulo')
    include "circulo.php";
if ($tipo == 'triangulo')
    include "triangulo.php";
}
else 
    echo ("
    <div class='notification is-danger '>
  Página não encontrada
</div>
    ");




include "../footer.php";

?>