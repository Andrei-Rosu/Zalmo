<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIxVI9me\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIxVI9me/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerIxVI9me.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerIxVI9me\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerIxVI9me\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'IxVI9me',
    'container.build_id' => '8acec84b',
    'container.build_time' => 1523632502,
));
