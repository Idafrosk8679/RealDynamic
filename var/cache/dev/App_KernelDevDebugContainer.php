<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEEbxzKC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEEbxzKC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEEbxzKC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEEbxzKC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEEbxzKC\App_KernelDevDebugContainer([
    'container.build_hash' => 'EEbxzKC',
    'container.build_id' => 'bc5062ba',
    'container.build_time' => 1606210655,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEEbxzKC');
