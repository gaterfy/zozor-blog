<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ArrayTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';

return $this->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false);
