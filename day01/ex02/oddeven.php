#!/usr/bin/php
<?php
while(1)
{
	echo "Entrez un nombre: ";
	$line = fgets(STDIN);
	$line = str_replace("\n", "", $line);
	if (feof(STDIN) == TRUE)
		exit();
	//or just [if (!is_numeric($line))] if u want to apply is_numeric principe 
	if (!is_numeric($line) || strchr($line, ' ') != NULL )
	{
		echo  "'".$line. "' n'est pas un chiffre";
		echo "\n";
	}
	else
	{
		echo 'Le nombre '.$line.' est ';
		if (substr($line, -1) % 2 == 0)
		{
			echo  "Pair\n";
		}
		else
		{
			echo "Impair\n";
		}
	}
}
?>

