<?php

use App\herramientas;
use App\Proveedor\Proveedor;
use App\Trabajador\Trabajadores;


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
function trabajadores()
{
    $listadoTrabajor = Trabajadores::all();
    return $listadoTrabajor;
}

