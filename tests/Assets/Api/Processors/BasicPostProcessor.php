<?php

namespace Tests\Assets\Api\Processors;

use Moves\ApiWrapper\Api\Processor;
use Moves\ApiWrapper\Api\Request;
use Moves\ApiWrapper\Api\Response;

class BasicPostProcessor extends Processor
{
    public static $called = false;

    public static function handle(Request $request, callable $next): Response
    {
        $response = $next($request);

        static::$called = true;

        return $response;
    }
}
