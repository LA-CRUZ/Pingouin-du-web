<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJa2gght\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJa2gght/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJa2gght.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJa2gght\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJa2gght\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Ja2gght',
    'container.build_id' => '8caf7108',
    'container.build_time' => 1576518877,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJa2gght');