<?php
/**
 * Text blocks example
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */

require_once __DIR__.'/../vendor/autoload.php';

$parser = new HamlParser(__DIR__.'/tpl', __DIR__.'/tmp/haml');
$parser->registerBlock('md5', 'md5');

echo $parser->setFile('example4.haml');

?>
