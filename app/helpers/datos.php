<?php

use App\herramientas;
use App\Proveedor\Proveedor;



function herramientas()
{
    $listadoHerramientas = herramientas::all();
    return $listadoHerramientas;
}
function proveedores()
{
    $listadoProveedor = proveedor::all();
    return $listadoProveedor;
}

