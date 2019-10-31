#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$string = $argv[1];
	$string = trim($string);
    $string = preg_replace('/ +/', ' ',$string);

	$tab = explode(" ", $string);
	$nb_word = count($tab);

	$i = 1;
	while ($i < $nb_word)
		echo $tab[$i++]." ";
	echo $tab[0]."\n";
}
?>