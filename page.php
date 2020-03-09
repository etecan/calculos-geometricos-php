<?php

require "config.php";

include "header.php";

if(isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'square')
    include "pages/square.php";
if ($page == 'circle')
    include "pages/circle.php";
if ($page == 'triangle')
    include "pages/triangle.php";
else 
    echo ("Página não encontrada!");

}



include "footer.php";

?>