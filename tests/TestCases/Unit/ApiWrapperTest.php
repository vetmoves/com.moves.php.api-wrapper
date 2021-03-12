<?php

namespace Tests\TestCases\Unit;

use Moves\ApiWrapper\Api\Endpoint;
use Moves\ApiWrapper\Api\Route;
use Moves\ApiWrapper\ApiWrapper;
use PHPUnit\Framework\TestCase;

class ApiWrapperTest extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testLoad()
    {
        ApiWrapper::load(__DIR__ . '/../../Assets/routes/test.php');

        $route = Route::find('file.test');
        $this->assertInstanceOf(Endpoint::class, $route);
    }
}
