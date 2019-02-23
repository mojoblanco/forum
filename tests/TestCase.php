<?php

namespace Tests;

use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signIn($user = null) 
    {
        $user = $user ?: create('App\User');

        $this->actingAs($user);

        return $this;
    }

    // Framework-supplied test case methods snipped for brevity

    // Use this version if you're on PHP 7
    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct() {}
            
            public function report(Exception $e)
            {
                // no-op
            }
            
            public function render($request, Exception $e) {
                throw $e;
            }
        });
    }
}