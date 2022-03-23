<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\DowngradePhp71\Rector\ConstFetch\DowngradePhp71JsonConstRector::class);
};
