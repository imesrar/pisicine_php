#!/usr/bin/php
<?php
    date_default_timezone_set('Africa/Casablanca');
    $fd = fopen("/var/run/utmpx", "r");
    while ($str = fread($fd, 628))
    {
        $res = unpack("a256a/a4b/a32c/id/ie/I2f", $str);
        $tab[$res['c']] = $res;
    }
    ksort($tab);
    foreach ($tab as $val){
        if ($val['e'] == 7) {
            echo trim($val['a'])." ";
            echo trim($val['c'])."  ";
            echo date("M", $val["f1"])." ";
            echo date("d", $val["f1"])." ".date("H:i", $val["f1"]);
            echo "\n";
        }
    }
?>