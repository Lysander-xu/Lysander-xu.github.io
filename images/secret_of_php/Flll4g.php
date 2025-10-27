<?php
highlight_file(__FILE__);
include('flag.php');
$a = $_POST['a'];
$b = $_POST['b'];

if (isset($a) && isset($b)){
    if ($a !== $b && md5($a) == md5($b)){
        echo "<br>yes<br>";
    } else {
        die("no");
    }
    $a = $_REQUEST['aa'];
    $b = $_REQUEST['bb'];
    if ($a !== $b && md5((string)$a) === md5((string)$b)){
        echo "yes yes<br>";
    } else {
        die("no no");
    }
    $a = $_REQUEST['aaa'];
    $b = $_REQUEST['bbb'];
    if ((string)$a !== (string)$b && md5((string)$a) === md5((string)$b)){
        echo "yes yes yes<br>";
        echo "Congratulations! You have passed the second level, the flag is ".$flag."<br>";
    } else {
        die("no no no");
    }
} else {
    echo "a or b is not set<br>";
}