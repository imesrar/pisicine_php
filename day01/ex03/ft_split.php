<?PHP
function ft_split($s1)
{
	$tab = trim($s1);
	$tab= preg_replace('/ +/', ' ',$tab);
	$tab1 = explode(" ", $tab);
	if ($s1 != NULL)
		sort($tab1);
	return($tab1);
}
?>