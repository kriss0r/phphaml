<?php
/**
 * Simpliest way to use Haml.
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */

require_once __DIR__.'/../vendor/autoload.php';

$title = 'This is title';
$text =  'Lorem ipsum dolor sit amet';

display_haml(__DIR__.'/tpl/example3.haml', array(), __DIR__.'/tmp/haml');
?>
