<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQVxt8uV\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQVxt8uV/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQVxt8uV.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQVxt8uV\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerQVxt8uV\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'QVxt8uV',
    'container.build_id' => '8221ef10',
    'container.build_time' => 1523524575,
));
