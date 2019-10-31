#!/usr/bin/php
<?php
if ($argc < 2 || !file_exists($argv[1]))
    exit();
$read = fopen($argv[1], 'r');
$doc = "";
while ($read && !feof($read)) {
    $doc .= fgets($read);
}
$doc = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($tab) {
    $tab[0] = preg_replace_callback("/( title=\")(.*?)(\")/si", function($tab) {
        return ($tab[1]."".strtoupper($tab[2])."".$tab[3]);
    }, $tab[0]);
    $tab[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($tab) {
        return ($tab[1]."".strtoupper($tab[2])."".$tab[3]);
    }, $tab[0]);
    return ($tab[0]);
}, $doc);
echo $doc;
?>