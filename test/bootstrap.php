<?php

// Grab our autoloader
require __DIR__.'/../vendor/autoload.php';
// PHPUnit cross version compatibility.
if (class_exists('PHPUnit\Runner\Version')
    && version_compare(PHPUnit\Runner\Version::id(), '6.0', '>=')
    && class_exists('PHPUnit_Framework_TestCase') === false
) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

?>