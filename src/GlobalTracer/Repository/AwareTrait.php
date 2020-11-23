<?php
declare(strict_types=1);

namespace Neighborhoods\DatadogComponent\GlobalTracer\Repository;

use Neighborhoods\DatadogComponent\GlobalTracer\RepositoryInterface;

trait AwareTrait
{
    protected $GlobalTracerRepository;

    public function setGlobalTracerRepository(RepositoryInterface $GlobalTracerRepository): self
    {
        if ($this->hasGlobalTracerRepository()) {
            throw new \LogicException('GlobalTracerRepository is already set.');
        }
        $this->GlobalTracerRepository = $GlobalTracerRepository;

        return $this;
    }

    protected function getGlobalTracerRepository(): RepositoryInterface
    {
        if (!$this->hasGlobalTracerRepository()) {
            throw new \LogicException('GlobalTracerRepository is not set.');
        }

        return $this->GlobalTracerRepository;
    }

    protected function hasGlobalTracerRepository(): bool
    {
        return isset($this->GlobalTracerRepository);
    }

    protected function unsetGlobalTracerRepository(): self
    {
        if (!$this->hasGlobalTracerRepository()) {
            throw new \LogicException('GlobalTracerRepository is not set.');
        }
        unset($this->GlobalTracerRepository);

        return $this;
    }
}
