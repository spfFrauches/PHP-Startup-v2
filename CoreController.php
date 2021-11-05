<?php 

namespace CoreController;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CoreController
{

    public static function startIlluminateRouter()
    {

        $dispatcher = new \Illuminate\Events\Dispatcher;
        $router = new \Illuminate\Routing\Router($dispatcher);

        /* -------------------------------------------------------- */
        /* Conforme URL direciona para o controller                 */
        /* -------------------------------------------------------- */

        // Home 
        $router->get('/', [ \App\Controllers\MainController::class, 'index' ] );

        // Página exemplo estática
        $router->get('/pagina-estatica', function() {               
            return "aqui pode ser construida uma página HTML CSS estática";
        });

        $request = \Illuminate\Http\Request::createFromGlobals();
        $response = $router->dispatch($request);
        $response->send();

    }


}