<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\DowngradePhp80\Rector\ClassMethod\DowngradeStringReturnTypeOnToStringRector::class);
};
