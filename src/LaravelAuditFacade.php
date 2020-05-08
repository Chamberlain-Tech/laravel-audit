<?php

namespace ChamberlainTech\LaravelAudit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChamberlainTech\LaravelAudit\Skeleton\SkeletonClass
 */
class LaravelAuditFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-audit';
    }
}
