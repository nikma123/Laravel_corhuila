<?php

use App\herramientas;
use App\Menu;




function herramientas()
{
    $listadoMenu = herramientas::all();
    return $listadoMenu;
}

