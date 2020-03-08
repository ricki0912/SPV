<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();    

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {

        // Render index view
        return $container->get('renderer')->render($response, 'login/login.phtml', $args);
    });


  

    
 
    // Retrieve todo with id 
    $app->get('/todo/[{id}]', function ($request, $response, $args) use ($container){
       //return "nueva ruta";
       return $container->get('renderer')->render($response, 'index.phtml', $args);
    });
 
 
    // Search for todo with given search teram in their name
    $app->get('/todos/search/[{query}]', function ($request, $response, $args) {
        return "otra mas";
    });

 





     $app->get('/articulo', function ($request, $response, $args) use ($container) {
        //return "hola";
       return $container->get('renderer')->render($response, 'articulo/articulo.phtml', $args);

    });

      $app->get('/ventas', function ($request, $response, $args) use ($container) {
        //return "hola";
       return $container->get('renderer')->render($response, 'ventas/ventas.phtml', $args);

    });

        $app->get('/usuario', function ($request, $response, $args) use ($container) {
        //return "hola";
       return $container->get('renderer')->render($response, 'usuario/usuario.phtml', $args);

    });


    $app->post('/validate/login/user/', 'App\Controllers\LoginController:validateUser');
    $app->post('/close/login/user/', 'App\Controllers\LoginController:closeUser');


    /*$app->get('/prueba', function () {

        Fpdf::AddPage();
        Fpdf::SetFont('Courier', 'B', 18);
        Fpdf::Cell(50, 25, 'Hello World!');
        Fpdf::Output();

    });*/

    /*$app->get('/prueba', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {

        $fpdf->AddPage();
        $fpdf->SetFont('Courier', 'B', 18);
        $fpdf->Cell(50, 25, 'Hello World!');
        $fpdf->Output();

    });*/


    /*====================================
    =            route menu              =
    ====================================*/



    /*=====  End of route asistencia  ======*/ 

    /*para el app android */





};
