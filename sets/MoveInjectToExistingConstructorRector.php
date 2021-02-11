<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\NetteCodeQuality\Rector\Class_\MoveInjectToExistingConstructorRector::class);
};
