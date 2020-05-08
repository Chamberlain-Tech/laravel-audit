<?php

namespace ChamberlainTech\LaravelAudit\Tests;

use Orchestra\Testbench\TestCase;
use ChamberlainTech\LaravelAudit\LaravelAuditServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAuditServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
