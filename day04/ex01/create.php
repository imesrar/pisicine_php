<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $compte = unserialize(file_get_contents('../private/passwd'));
        if ($compte) {
            $exist = 0;
            foreach ($compte as $key => $value) {
                if ($value['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
        if ($exist) {
            echo "ERROR\n";
        } else {
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $compte[] = $tmp;
            file_put_contents('../private/passwd', serialize($compte));
            echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>