<?php
/**
 * Including by variable
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */

require_once __DIR__.'/../vendor/autoload.php';

$parser = new HamlParser(__DIR__.'/tpl', __DIR__.'/tmp/haml');

$parser->assign('menu', 'my_menu');
echo $parser->setFile('example9.haml');
?>
