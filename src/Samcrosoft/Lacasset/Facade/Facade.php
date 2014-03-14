<?php
/**
 * Created by PhpStorm.
 * User: Adebola
 * Date: 19/11/13
 * Time: 15:48
 */

namespace Samcrosoft\Lacasset\Facade;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'lacasset'; }


}