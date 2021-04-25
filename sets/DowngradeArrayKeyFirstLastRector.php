<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\Downgrade73\Rector\FuncCall\DowngradeArrayKeyFirstLastRector::class);
};
