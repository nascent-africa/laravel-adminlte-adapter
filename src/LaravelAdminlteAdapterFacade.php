<?php

namespace NascentAfrica\LaravelAdminlteAdapter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NascentAfrica\LaravelAdminlteAdapter\Skeleton\SkeletonClass
 */
class LaravelAdminlteAdapterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-adminlte-adapter';
    }
}
