<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\TagsInputType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Form/Type/TagsInputType.php';

return $this->privates['App\Form\Type\TagsInputType'] = new \App\Form\Type\TagsInputType(($this->privates['App\Repository\TagRepository'] ?? $this->load('getTagRepositoryService.php')));
