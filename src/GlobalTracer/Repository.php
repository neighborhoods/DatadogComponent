<?php
declare(strict_types=1);

namespace Neighborhoods\DatadogComponent\GlobalTracer;


use DDTrace\Contracts\Tracer;

class Repository implements RepositoryInterface
{

    public function get() : Tracer
    {
        return \DDTrace\GlobalTracer::get();
    }
}
