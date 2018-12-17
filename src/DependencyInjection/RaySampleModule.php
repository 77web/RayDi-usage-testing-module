<?php


namespace Quartetcom\RaySample\DependencyInjection;


use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Quartetcom\RaySample\RaySample;
use Ray\Di\AbstractModule;

class RaySampleModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind(LoggerInterface::class)->to(NullLogger::class);
        $this->bind(RaySample::class);
    }

}
