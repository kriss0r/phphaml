<?php
/**
 * Textile block example
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */
die("disabled");
require_once __DIR__.'/../vendor/autoload.php';

// Set path to textile engine
require_once '../../aFRM/includes/textile/classTextile.php';

$parser = new HamlParser(__DIR__.'/tpl', __DIR__.'/tmp/haml');

echo $parser->setFile('example5.haml');

?>
