<?php


namespace Quartetcom\RaySample\Functional;


use PHPUnit\Framework\TestCase;
use Quartetcom\RaySample\DependencyInjection\RaySampleModule;
use Quartetcom\RaySample\RaySample;
use Ray\Di\Injector;

class RaySampleModuleTest extends TestCase
{
    public function test()
    {
        $injector = new Injector(new RaySampleModule());
        $this->assertInstanceOf(RaySample::class, $injector->getInstance(RaySample::class));
    }
}
