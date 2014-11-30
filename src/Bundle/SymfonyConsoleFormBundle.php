<?php

namespace Matthias\SymfonyConsoleForm\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SymfonyConsoleFormBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new SymfonyConsoleFormExtension();
    }

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterTransformersPass());
    }
}