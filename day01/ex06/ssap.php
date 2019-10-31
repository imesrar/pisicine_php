#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$i = 1;
	while($i < $argc)
	{
		$string .= " ".$argv[$i]." ";
		$i++;
	}
	$tr = trim($string);
		
	$pr = preg_replace('/ +/', ' ',$tr);
	
	$tab = explode(" ", $pr);
	
	sort($tab);
	foreach ($tab as $elem)
		echo "$elem\n";
}
?>