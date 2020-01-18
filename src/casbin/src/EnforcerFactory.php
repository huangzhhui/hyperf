<?php

namespace Hyperf\Casbin;


use Psr\Container\ContainerInterface;
use ReflectionClass;

class EnforcerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $reflectionClass = new ReflectionClass(Enforcer::class);
        return $reflectionClass->newInstanceWithoutConstructor();
    }
    
}