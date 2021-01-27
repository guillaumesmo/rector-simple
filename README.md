# rector-simple

This package allows using rector/rector CLI without a config file, running a single rule (possible previously with the removed `--only` argument)

## Installation

    composer require --dev guillaumesmo/rector-simple

## Usage

    vendor/bin/rector process -c vendor/guillaumesmo/rector-simple/sets/ClosureToArrowFunctionRector.php src
