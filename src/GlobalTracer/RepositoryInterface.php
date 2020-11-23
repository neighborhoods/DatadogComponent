<?php
declare(strict_types=1);

namespace Neighborhoods\DatadogComponent\GlobalTracer;


use DDTrace\Contracts\Tracer;

interface RepositoryInterface
{
    public function get() : Tracer;
}
