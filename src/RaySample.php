<?php
/**
 * This file is part of the Quartetcom.RaySample
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Quartetcom\RaySample;

use Psr\Log\LoggerInterface;

class RaySample
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(string $message): void
    {
        $this->logger->info($message);
    }
}
