<?php

namespace App\Units\Schedules\Routes;

use App\Support\Http\Routing\RouteFile;

/**
 * Class Web
 * @package App\Units\Schedules\Routes
 */
class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->schedulesRoutes();
    }

    /**
     * Declare Authenticated Routes
     */
    protected function schedulesRoutes()
    {
        $this->router->get('/', ['as' => 'schedules.index', 'uses' => 'ScheduleController@index']);
    }
}
