<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKwxDLh6\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKwxDLh6/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKwxDLh6.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKwxDLh6\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerKwxDLh6\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'KwxDLh6',
    'container.build_id' => 'ac8be3f9',
    'container.build_time' => 1531619303,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKwxDLh6');