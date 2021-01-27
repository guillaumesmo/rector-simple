<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\Rector\Polyfill\Rector\If_\UnwrapFutureCompatibleIfFunctionExistsRector::class);
};
