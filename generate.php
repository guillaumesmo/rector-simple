<?php

$handle = fopen('php://stdin', 'r');

if (!$handle) {
    exit(1);
}

$template = '<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator) {
    $containerConfigurator->services()->set(\%CLASS%::class);
};
';

while (($line = fgets($handle)) !== false) {
    $file = 'sets/' . preg_replace('/.*\\\\/', '', trim($line)) . '.php';
    file_put_contents($file, str_replace('%CLASS%', trim($line), $template));
}
