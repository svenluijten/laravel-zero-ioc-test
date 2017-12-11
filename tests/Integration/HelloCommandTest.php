<?php

namespace Tests\Unit;

use App\TestService;
use Tests\TestCase;

class HelloCommandTest extends TestCase
{
    /** @test */
    public function it_tests_a_mocked_dependency(): void
    {
        $mock = $this->createMock(TestService::class);

        app()->instance(TestService::class, $mock);

        $mock->expects($this->once())->method('someMethod')->willReturn('from the tests');

        $this->app->call('hello');
    }
}
