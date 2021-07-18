<?php
/**
 * Example with CSS generating with Sass
 *
 * @author Amadeusz Jasak <amadeusz.jasak@gmail.com>
 * @package phpHaml
 * @subpackage Examples
 */

require_once __DIR__.'/../vendor/autoload.php';

$sass = new SassParser(__DIR__.'/tpl', __DIR__.'/tmp/sass');
header('Content-Type: text/css');
echo $sass->render('example8.sass');

?>
