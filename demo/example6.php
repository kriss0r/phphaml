<?php
/**
 * Example with embedded Sass code
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */

require_once __DIR__.'/../vendor/autoload.php';

$parser = new HamlParser(__DIR__.'/tpl', __DIR__.'/tmp/haml');

echo $parser->setFile('example6.haml');

?>
