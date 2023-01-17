<?php

namespace Vdes\Dreams\Facades;

use Illuminate\Support\Facades\Facade;

class Dreams extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vdreams';
    }
}