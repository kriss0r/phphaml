<?php

function _js($str) {
	$str = str_replace("\xD", "\n", $str);
	return <<<HERE
<script type="text/javascript">
$str
</script>
HERE;
}

function _css($str) {
	$str = str_replace("\xD", "\n", $str);
	return <<<HERE
<script type="text/css">
$str
</script>
HERE;
}

function _plain($str) {
	return $str;
}

function _escaped($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
function _php($str) {
	return "<?php\n$str\n?>";
}
