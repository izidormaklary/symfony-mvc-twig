<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNkXMhCe\App_KernelDevlsDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNkXMhCe/App_KernelDevlsDebugContainer.php') {
    touch(__DIR__.'/ContainerNkXMhCe.legacy');

    return;
}

if (!\class_exists(App_KernelDevlsDebugContainer::class, false)) {
    \class_alias(\ContainerNkXMhCe\App_KernelDevlsDebugContainer::class, App_KernelDevlsDebugContainer::class, false);
}

return new \ContainerNkXMhCe\App_KernelDevlsDebugContainer([
    'container.build_hash' => 'NkXMhCe',
    'container.build_id' => 'd0c819ac',
    'container.build_time' => 1627500878,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNkXMhCe');