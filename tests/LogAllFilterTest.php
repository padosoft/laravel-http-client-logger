<?php

namespace Padosoft\LaravelHttpClientLogger\Tests;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class LogAllFilterTest extends TestCase
{
    public function test_log_all_filter_returns_true()
    {
        $logAllFilter = new \Padosoft\LaravelHttpClientLogger\LogAllFilter();

        $this->assertTrue($logAllFilter->shouldLog(
            $this->mock(RequestInterface::class),
            $this->mock(ResponseInterface::class),
            123
        ));
    }
}
