<?php

// Grab our autoloader
$root = dirname(__DIR__);

$autoLoader = require $root . '/vendor/autoload.php';
// PHPUnit cross version compatibility.
if (class_exists('PHPUnit\Runner\Version')
    && version_compare(PHPUnit\Runner\Version::id(), '6.0', '>=')
    && class_exists('PHPUnit_Framework_TestCase') === false
) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

?>