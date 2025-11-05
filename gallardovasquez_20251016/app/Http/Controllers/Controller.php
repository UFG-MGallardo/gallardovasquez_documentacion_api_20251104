<?php

namespace App\Http\Controllers;
use OpenAPI\Atributes as OA;

/**
 * @OA\Info(
 *  version="1.0.0,
 *  title="Documentacion de API de Manuel Sebastian Gallardo Vasquez",
 *  description="API desarrollada por Manuel Sebastian Gallardo Vasquez, para la universidad UFG",
 *  @OA\Contact(
 *      email="ia.gallardo520@ufg.edu.sv"
 *      ),
 *  @OA\Licence(
 *      name="Apache 2.0",
 *      url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 *  )
 * 
 * @OA\Server(
 *  url="http://localhost:8000/",
 *  description="Servidor local de desarrollo"
 * )
 * 
 * @OA\Server(
 *  url="http://testing.ejemplo.com/",
 *  description="Servidor local para pruebas"
 * )
 * 
 * @OA\Server(
 *  url="http://msgv.ejemplo.com/",
 *  description="Servidor local de produccion"
 * )
 * 
 * @OA\SecuritySxheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   name="Authorization",
 *   in="header"
 * )
 * 
 * @OA\Tag(
 *   name="Zonas",
 *   description="Proyecto de desarrollo de API para mantenimiento de tabla de bd Catalogos, especificamente para la tabla Zonas"
 * )
 * 
 */

abstract class Controller
{
    //
}
