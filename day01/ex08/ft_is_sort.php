<?PHP
function ft_is_sort($tab)
{
	$test = $tab;
	$test1 = $tab;
	sort($test);
	rsort($test1);
	$flag = 0;
	if($tab == $test1 || $tab == $test)
		return (1);
	else	
		return (0);
}
?>