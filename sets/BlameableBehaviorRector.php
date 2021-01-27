<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\DoctrineGedmoToKnplabs\Rector\Class_\BlameableBehaviorRector::class);
};
