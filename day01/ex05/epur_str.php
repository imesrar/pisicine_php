#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$tr = trim($argv[1]);
	$pr = preg_replace('/ +/', ' ',$tr);
	echo("$pr\n");
}
?>